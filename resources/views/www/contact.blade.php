<!-- resources/views/www/home.blade.php -->
@extends('layouts.app')

@section('title', 'PC 홈페이지')

@section('content')
    <h2>문의하기 페이지입니다.</h2>
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
