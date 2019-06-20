<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\project;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;

class projectscontroller extends Controller
{
   public function __construct()
   {
      $this->middleware("auth");
      # code...
   }
	public function index()
	{
      //$projects = auth()->user()->projects;
		//$projects=project::where("owner_id",auth()->id())->get();

		return view("projects.index",["projects" => auth()->user()->projects
   ]);
	}
   public function create()
   {
   	return view("projects.create");
   }
    public function store()
   {
     $attributes= $this->validateProject();
     $attributes["owner_id"]=auth()->id();
  $project= project::create($attributes);
	
   event(new ProjectCreated($project));
  
   return redirect("/projects");

   }
   public function edit(project $project)
   {
      return view("projects.edit",compact("project"));
   }
   public function update(project $project)
   {  
      $project->update($this->validateProject());
      return redirect("/projects");
   }
   public function destroy(project $project)
   {
      $this->authorize("update",$project);
      $project->delete();
      return redirect("/projects"); 
   }
   public function show(project $project)
   { 
      // if(\Gate::denies("update",$project)){
      //    abort(403);
      // }
      $this->authorize("update",$project);
      // if($project->owner_id !== auth()->id()){
      //    abort(403);

      // }
      return view("projects.show",compact("project"));  
   }
   public function validateProject()
   {
      return Request()->validate([
         "title"=>["required","min:3"],
         "description"=>["required","min:3"]]);
      # code...
   }
}
