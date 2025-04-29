<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $host = request()->getHost();

        Log::info("현재 도메인: " . $host);  // 도메인 로그 찍기

        // 정확한 도메인에 맞춰서 분기하기
        if ($host === 'adm.jhshin.com') {
            Log::info('관리자 도메인 접근');
        } elseif ($host === 'mobile.jhshin.com') {
            Log::info('모바일 도메인 접근');
        } else {
            Log::info('기본 도메인 접근');
        }
    }
}
