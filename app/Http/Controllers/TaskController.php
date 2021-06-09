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
    public function store(Request $request)  // TODO: ここのRequestなぞ
    {
        return Task::create($request->all()); // TODO: ここのall()のところなぞ
    }

    // タスクの詳細取得
    public function show(Task $task)
    {
        return $task;
    }

    // タスクの更新
    public function update(Request $request, Task $task) // TODO: ここもstoreのところと同様になぞ
    {
        $task->update($request->all());
        return $task;
    }

    // タスクの削除
    public function destroy(Task $task)
    {
        $task->delete();

        return $task;
    }
}
