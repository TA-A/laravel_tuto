<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));

        // return view('projects.index', ['projects' => $projects]);
    }

    public function show(Project $project)
    {
        // $project = Project::findOrFail($id);

        // return $project;
        return view('projects.show', compact('project'));

    }

    public function create()
    {

        return view('projects.create');

        // return view('projects.index', compact('projects'));
    }

    public function store()
    {
        // dd(request()->all());
        // dd(request(['title', 'description']));

        // Project::create(request()->all());

        // return 'done';

        // dd([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        // return [
        //     'title' => request('title'),
        //     'description' => request('description')
        // ];
        
        Project::create(request(['title', 'description']));

        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        return redirect('/projects');
        // return request()->all();
        // return request('title');
        // return request('description');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        // $project->title = request('title');
        // $project->description = request('description');

        // $project->save();

        return redirect('/projects');
        // dd(request()->all());
        // dd('hello');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
        // dd('delete ' . $id);
        // dd('hello');
    }
}
