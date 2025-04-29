<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('www.home');
    }

    public function about()
    {
        return view('www.about');
    }

    public function contact()
    {
        return view('www.contact');
    }
}
