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

    public function testCard()
    {
        return view('www.test-card');
    }

    public function testAlert()
    {
        return view('www.test-alert');
    }

    public function testButton()
    {
        return view('www.test-button');
    }

    public function testInput()
    {
        return view('www.test-input');
    }

}
