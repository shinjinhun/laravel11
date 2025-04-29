<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\WebController;
/*
    Route::get('/', function () {
        return view('www.home');
    });

    Route::get('/about', function () {
        return view('www.about');
    });

    Route::get('/contact', function () {
        return view('www.contact');
    });
*/

//    Route::get('/', [WebController::class, 'home']);
//    Route::get('/about', [WebController::class, 'about']);
//    Route::get('/contact', [WebController::class, 'contact']);
/*
    Route::controller(WebController::class)->group(function () {
        Route::get('/','home');
        Route::get('/about','about');
        Route::get('/contact','contact');
    });
*/

    /*
    // 메인 홈페이지 라우트
    Route::get('/', [WebController::class, 'home'])->name('www.home');

    // 회사소개 라우트
    Route::get('/about', [WebController::class, 'about'])->name('www.about');

    // 문의하기 라우트
    Route::get('/contact', [WebController::class, 'contact'])->name('www.contact');
    */

/* 정상
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'home')->name('www.home');
        Route::get('/about', 'about')->name('www.about');
        Route::get('/contact', 'contact')->name('www.contact');
    });
    */

    /*
    // 정상
    Route::controller(WebController::class)
        ->name('www.')   // route('web.home')처럼 쓰기
        ->group(function () {
            Route::get('/', 'home')->name('home');
            Route::get('/about', 'about')->name('about');
            Route::get('/contact', 'contact')->name('contact');
        });
    */

    Route::prefix('/')        // 기본 경로
    ->name('www.')         // 이름 접두사
    ->controller(WebController::class)
        ->group(function () {
            Route::get('/', 'home')->name('home');
            Route::get('about', 'about')->name('about');
            Route::get('contact', 'contact')->name('contact');
        });
