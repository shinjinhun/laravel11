<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', '기본 제목')</title>

    <!-- 공통 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- 페이지별 추가 CSS -->
    @stack('styles')
</head>
<body>

{{--@include('layouts.partials.header')--}}
<x-layouts.header /> <!-- 이렇게 컴포넌트 호출 -->

<main>
    @yield('content')
</main>

{{--@include('layouts.partials.footer')--}}
<x-layouts.footer /> <!-- 이렇게 컴포넌트 호출 -->

<!-- 공통 JS -->
<script src="{{ asset('assets/js/script.js') }}"></script>

<!-- 페이지별 추가 JS -->
@stack('scripts')
</body>
</html>
