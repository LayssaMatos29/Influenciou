<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function blog()
    {
        return view('blog');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function careers()
    {
        return view('careers');
    }

    public function press()
    {
        return view('press');
    }

    public function help()
    {
        return view('help');
    }
    
    public function contatUs()
    {
        return view('contact-us');
    }

    public function termsOfUse()
    {
        return view('terms-of-use');
    }

    public function courseDetails($uuid)
    {
        return view('course-details', [
            'uuid' => $uuid
        ]);
    }
}
