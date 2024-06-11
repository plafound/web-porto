<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class portofolio extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }

    public function resume()
    {
        return view('resume');
    }

    public function project()
    {
        return view('projects');
    }

    public function maintenance()
    {
        return view('maintenance');
    }
    
}
