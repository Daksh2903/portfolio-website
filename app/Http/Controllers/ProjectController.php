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

    public function edit($id)
    {

        $project = Project::findOrFail($id);

        return view('admin.projects.edit', compact('project'));

    }


    // Show create form
    public function create()
    {
        return view('admin.projects.create');
    }


    // Store project
    public function store(Request $request)
    {

        $imageName = null;

        // Upload image
        if($request->hasFile('image')){

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/projects'), $imageName);

        }

        Project::create([

            'title' => $request->title,

            'description' => $request->description,

            'github_link' => $request->github_link,

            'technologies' => $request->technologies,

            'image' => $imageName,

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

    public function update(Request $request, $id)
    {

        $project = Project::findOrFail($id);

        $project->update([

            'title' => $request->title,

            'description' => $request->description,

            'github_link' => $request->github_link,

            'technologies' => $request->technologies,

        ]);

        return redirect('/admin/projects')
            ->with('success', 'Project Updated Successfully');

    }

}