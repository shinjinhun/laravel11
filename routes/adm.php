<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AdmController;

/*
    Route::get('/', function () {
        return view('adm.dashboard');
    });

    Route::get('/users', function () {
        return view('adm.user_list');
    });

    Route::get('/settings', function () {
        return view('adm.settings');
    });
*/

//    Route::get('/', [MainController::class, 'adm']);

    Route::controller(AdmController::class)->group(function () {
        Route::get('/','dashboard');
        Route::get('/user_list','user_list');
        Route::get('/settings','settings');
    });

