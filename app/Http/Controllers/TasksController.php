<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
    public function index() {

        $name = "Bqube";
        $tasks = Tasks::all();

        return view('tasks.index', compact('name', 'tasks'));

    }

    public function show( Tasks $task ) {

        return view('tasks.show', compact("task"));

    }
}
