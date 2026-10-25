<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    // Welcome page: only tasks whose task_date is today.
    public function today()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks'));
    }

    // Task List page: every task, ordered by date.
    public function index()
    {
        $tasks = Task::orderBy('task_date')->orderBy('id')->get();

        return view('tasks.index', compact('tasks'));
    }
}
