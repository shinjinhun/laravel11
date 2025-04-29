<!-- resources/views/www/home.blade.php -->
@extends('layouts.app')

@section('title', '메인 페이지')

@section('content')
    <h2>contact.blade 홈페이지입니다.</h2>
    <ul>
        <li><a href="{{ route('www.home') }}">메인</a></li>
        <li><a href="{{ route('www.about') }}">회사소개</a></li>
        <li><a href="{{ route('www.contact') }}">문의하기</a></li>
    </ul>
@endsection
