<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class desController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
    public function contact()
    {
        return view('about.contact');
    }
    public function course()
    {
        return view('about.course');
    }
}
