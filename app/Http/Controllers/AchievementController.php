<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{

    // Show all achievements
    public function index()
    {

        $achievements = Achievement::latest()->get();

        return view('admin.achievements.index',
            compact('achievements'));

    }


    // Show create form
    public function create()
    {

        return view('admin.achievements.create');

    }


    // Store achievement
    public function store(Request $request)
    {

        Achievement::create([

            'title' => $request->title,

            'description' => $request->description,

        ]);

        return redirect('/admin/achievements');

    }


    // Edit achievement
    public function edit($id)
    {

        $achievement = Achievement::findOrFail($id);

        return view('admin.achievements.edit',
            compact('achievement'));

    }


    // Update achievement
    public function update(Request $request, $id)
    {

        $achievement = Achievement::findOrFail($id);

        $achievement->update([

            'title' => $request->title,

            'description' => $request->description,

        ]);

        return redirect('/admin/achievements');

    }


    // Delete achievement
    public function destroy($id)
    {

        $achievement = Achievement::findOrFail($id);

        $achievement->delete();

        return redirect('/admin/achievements');

    }

}