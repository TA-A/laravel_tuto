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

        ////////////////////////////////////Better Encapsulation ///////////////////////////////////////
        // if (request()->has('completed')) {
        //     $task->complete();
        // }else {
        //     $task->incomplete();  
        // }

        // request()->has('completed') ? $task->complete() : $task->incomplete();
        $method = request()->has('completed') ? 'complete' :'incomplete';
        $task->method();
        ////////////////////////////////////////////////////////////////////////////////////////////////

        // $task->complete(false);
        // $task->complete(request()->has('completed'));

           
        // $task->update([
        //     'completed' => request()->has('completed')
        // ]);
        // dd(request()->all());
        // dd($task);

        return back();
    }
}
