<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
    	
    	return view('tasks.show', compact('task'));
    }
}
