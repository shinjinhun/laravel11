<!-- resources/views/www/home.blade.php -->
@extends('layouts.app')

@section('title', 'PC 홈페이지')

{{-- 페이지별 CSS 추가 --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endpush

@section('content')
    <h2>메인 페이지입니다.</h2>
    <ul>
        <li class="{{ request()->routeIs('www.home') ? 'active' : '' }}">
            <a href="{{ route('www.home') }}">메인</a>
        </li>
        <li class="{{ request()->routeIs('www.about') ? 'active' : '' }}">
            <a href="{{ route('www.about') }}">회사소개</a>
        </li>
        <li class="{{ request()->routeIs('www.contact') ? 'active' : '' }}">
            <a href="{{ route('www.contact') }}">문의하기</a>
        </li>
    </ul>
@endsection

{{-- 페이지별 JS 추가 --}}
@push('scripts')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endpush
