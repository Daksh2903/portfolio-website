<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Achievement;
use App\Models\Profile;

class PortfolioController extends Controller
{
    public function home()
    {
        $projects = Project::latest()->get();

        $achievements = Achievement::latest()->get();

        $profile = Profile::first();

        return view('home', compact(
            'projects',
            'achievements',
            'profile'
        ));
    }
      
    public function about()
    {
        return view('about');
    }

    public function projects()
    {

        $projects = Project::latest()->get();

        return view('projects', compact('projects'));

    }

    public function achievements()
    {

        $achievements = Achievement::latest()->get();

        return view('achievements',
            compact('achievements'));

    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect('/contact')->with('success', 'Message saved successfully!');
    }

    public function messages()
    {
        $messages = Contact::latest()->get();

        return view('messages', compact('messages'));
    }

    public function deleteMessage($id)
    {

        $message = Contact::findOrFail($id);

        $message->delete();

        return redirect('/messages')
            ->with('success', 'Message Deleted Successfully');

    }

}