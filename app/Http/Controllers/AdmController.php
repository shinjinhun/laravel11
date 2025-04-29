<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function dashboard()
    {
        return view('adm.dashboard');
    }

    public function user_list()
    {
        return view('adm.user_list');
    }

    public function settings()
    {
        return view('adm.settings');
    }
}
