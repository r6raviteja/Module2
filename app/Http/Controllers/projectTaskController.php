<?php

namespace App\Http\Controllers;

use App\Task;
use App\project;
class projectTaskController extends Controller
{
	public function store(project $project)
	{
		$project->addTask(request()->validate(["description"=>"required"]));
		
		return back();
	
	}
    public function update(Task $task)
    {
    	$method = request()->has('completed') ? 'complete' : 'incomplete';
    	$task->$method();
    	return back();
    }
}
