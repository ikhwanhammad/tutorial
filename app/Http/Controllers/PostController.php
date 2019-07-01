<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        $projects = Project::all();
        
        return view('projects.index',compact('projects'));
    }

    public function create(){

        return view('projects.create');
    }

    public function store(Request $request){
        
        // request()->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        // ]);

        $project =  new Project();

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        // Project::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        return redirect('/projects');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project = Project::findorFail($id);

        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::findorFail($id);

        return view('projects.edit',compact('project'));
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
        //
        $project = Project::findorFail($id);

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect('/projects');
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

        Project::findorFail($id)->delete();

        return redirect('/projects');
        
    }
}
