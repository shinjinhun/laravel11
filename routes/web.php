<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    $host = request()->getHost();

    if ($host === 'adm.jhshin.com') {
        require base_path('routes/adm.php');
    } else if ($host === 'mobile.jhshin.com') {
        require base_path('routes/mobile.php');
    } else {
        require base_path('routes/www.php');
    }
