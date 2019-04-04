<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
   public function index()
   {
      $project=new \App\Project;
      $list=$project::all();
      return view("/projects")->with(["list"=>$list]);
   }
   public function create()
   {
      return view ('createproject');
   }
   public function store()
   {
      $project=new \App\Project;
      $project->Productname=request('Productname');
      $project->Description=request('Description');
      $project->Price=request('Price');
      $project->save();
      return redirect("/projects");
   }
   public function edit($id)
   {
      $project = Project::find($id);
      return view('edit',compact('project'));
   }
   public function update($id)
   {
      $project = Project::find($id);
      $project->Productname=request('Productname');
      $project->Description=request('Description');
      $project->Price=request('Price');
      $project->update();
      return redirect('/projects');
   }
   public function destroy(Project $project)
   {
      $project->delete();
      return redirect("/projects");
   }
   public function show($id)
   {
      $project=Project::find($id);
      return view ('display',compact('project'));
   }
}
