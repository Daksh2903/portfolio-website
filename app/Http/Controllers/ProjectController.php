<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    // Show all projects
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }


    // Show create form
    public function create()
    {
        return view('admin.projects.create');
    }


    // Store project
    public function store(Request $request)
    {

        Project::create([

            'title' => $request->title,

            'description' => $request->description,

            'github_link' => $request->github_link,

            'technologies' => $request->technologies,

        ]);

        return redirect('/admin/projects')
            ->with('success', 'Project Added Successfully');

    }

    public function destroy($id)
    {

        $project = Project::findOrFail($id);

        $project->delete();

        return redirect('/admin/projects')
            ->with('success', 'Project Deleted Successfully');

    }

}