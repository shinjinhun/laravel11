<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return '메인 홈페이지입니다.';
    }

    public function adm()
    {
        return '관리자 페이지입니다.';
    }

    public function mobile()
    {
        return '모바일 홈페이지입니다.';
    }
}
