<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    // タスクの一覧取得
    public function index()
    {
        return Task::all();
    }

    // タスクの詳細取得
    public function show(Task $task)
    {
        return $task;
    }
}
