<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Use the post model
use App\Post;
//add flash session items
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Create a variable and store the blog posts in it from the database
        $posts = Post::all();

        //return a view and pass in the above
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Use view to create a post in the post folder
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            // https://laravel.com/docs/5.4/validation#form-request-validation
            'title' => 'required|max:255',
            'body' => 'required'
            ));
        //push to database
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();
        //redirect to another page
        Session::flash('success', 'The blog posted was successfully saved!');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get from database, accessing the model
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the post in the db and save it as a variable
        $post = Post::find($id);
        //return the view and pass in new information
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //accept information from the form field data
        //Validate it
        $this->validate($request, array(
            // https://laravel.com/docs/5.4/validation#form-request-validation
            'title' => 'required|max:255',
            'body' => 'required'
            ));
        //save in the db
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();
        //set flash data with success message
        Session::flash('success', 'This post was successfully saved.');
        //redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
