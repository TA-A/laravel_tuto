<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);
        // $project->addTask(request('description'));

        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);

        return back();
    }

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
