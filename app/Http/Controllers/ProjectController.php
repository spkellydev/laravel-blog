<?php

namespace App\Http\Controllers;


use App\Project;
use Illuminate\Http\Request;

use App\Category;
use Purifier;
use Image;
use Storage;
//add flash session items
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Create a variable and store the blog posts in it from the database
         $projects = Project::orderBy('id', 'desc')->paginate(5);

         //return a view and pass in the above
         return view('projects.archive')->withProjects($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Use view to create a post in the post folder
        $categories = Category::all();
        return view('projects.create')->withCatgories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //validate the data
        $this->validate($request, array(
            // https://laravel.com/docs/5.4/validation#form-request-validation
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:3|max:255|unique:projects,slug',
            'category_id' => 'required|integer',
            'body' => 'required',
            'featured_image' => 'sometimes|image',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required'
            ));
        //push to database
        $project = new Project;

        $project->title = $request->title;
        $project->slug = $request->slug;
        $project->category_id = $request->category_id;
        $project->meta_title = $request->meta_title;
        $project->meta_description = $request->meta_description;
        $project->github = $request->github;
        $project->technology = $request->technology;

        //Purifier for WYSIWIG
        $project->body = Purifier::clean($request->body);

        //Save Featured Image
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = $project->slug . '-' . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->fit(975,400)->save($location);

            $project->image = $filename;
        }

        $project->save();

        //redirect to another page
        Session::flash('success', 'The project was successfully saved!');

        return redirect()->route('projects.show', $project->slug);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
         //get from database, accessing the model
         $project = Project::where('slug', '=', $slug)->first();
         return view('projects.show')->withProject($project);
    }

    /**
     * Single view for front end.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function getSingle($slug)
    {
         //get from database, accessing the model
         $project = Project::where('slug', '=', $slug)->first();
         return view('projects.single')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function getIndex()
    {
        $projects = Project::paginate(10);
		return view('projects.index')->withProjects($projects);
    }
}
