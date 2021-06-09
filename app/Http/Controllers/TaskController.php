<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // タスクの一覧取得
    public function index()
    {
        return Task::all();
    }

    // タスクの新規登録
    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    // タスクの詳細取得
    public function show(Task $task)
    {
        return $task;
    }
}
