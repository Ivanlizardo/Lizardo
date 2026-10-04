<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $tasks = new TaskModel();

        return view('welcome', [
            'tasks' => $tasks
                ->where('task_date', date('Y-m-d'))
                ->orderBy('task_date', 'ASC')
                ->findAll()
        ]);
    }

    public function list()
    {
        $tasks = new TaskModel();

        return view('tasks/list', [
            'tasks' => $tasks->orderBy('task_date', 'ASC')->findAll()
        ]);
    }
}