<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function edit()
    {
        $profile = Profile::first();

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = \App\Models\Profile::first();

        $imageName = $profile->image;
        $resumeName = $profile->resume;

        if ($request->hasFile('image')) {

            $imageName = time() . '.' .
                        $request->image->extension();

            $request->image->move(
                public_path('uploads/profile'),
                $imageName
            );
        }

        if ($request->hasFile('resume')) {

            $resumeName = time() . '.' .
                        $request->resume->extension();

            $request->resume->move(
                public_path('uploads/resume'),
                $resumeName
            );
        }

        $profile->update([

            'name' => $request->name,

            'title' => $request->title,

            'typing_roles' => $request->typing_roles,

            'about' => $request->about,

            'image' => $imageName,

            'resume' => $resumeName,

        ]);

        return redirect('/admin/profile');
    }
}