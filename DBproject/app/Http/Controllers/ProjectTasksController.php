<?php

namespace App\Http\Controllers;

use App\Task;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);
        // dd(request()->all());
        // dd($task);

        return back();
    }
}
