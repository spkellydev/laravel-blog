<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Technology;
use App\Http\Resources\Technology as TechnologyResource;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all technologies
        $tech = Technology::paginate(15);
        return TechnologyResource::collection($tech);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creating and updating
        $tech = $request->isMethod('put') ? Technology::findOrFail($request->technology_id) : new Technology;

        $tech->id = $request->input('technology_id');
        $tech->tech = $request->input('tech');
        $tech->description = $request->input('description');

        if ( $tech->save() ) {
            return new TechnologyResource($tech);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show a single tech
        $tech = Technology::findOrFail($id);
        //return the single tech as a resource
        return new TechnologyResource($tech);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete a tech
        $tech = Technology::findOrFail($id);
        //return the single tech as a resource
        if ( $tech->delete() ) {
            return new TechnologyResource($tech);
        }
    }
}
