<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MobileController;
/*
    Route::get('/', function () {
        return view('mobile.home');
    });

    Route::get('/menu', function () {
        return view('mobile.menu');
    });

    Route::get('/profile', function () {
        return view('mobile.profile');
    });
*/

//    Route::get('/', [MainController::class, 'mobile']);

    Route::controller(MobileController::class)->group(function () {
        Route::get('/','home');
        Route::get('/menu','menu');
        Route::get('/profile','profile');
    });
