<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        // Temporary implementation
        return redirect()->back()->with('success', 'Message received!');
    }
}
