<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function achievements()
    {
        return view('achievements');
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
}