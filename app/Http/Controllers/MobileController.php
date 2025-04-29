<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function home()
    {
        return view('mobile.home');
    }

    public function menu()
    {
        return view('mobile.menu');
    }

    public function profile()
    {
        return view('mobile.profile');
    }
}
