@extends('layouts.app')

@section('title', 'Input 컴포넌트 테스트')

@section('content')
    <form method="POST" action="#">
        @csrf

        <x-ui.input
            name="username"
            label="아이디"
            placeholder="아이디를 입력하세요"
            required="true"
        />

        <x-ui.input
            type="password"
            name="password"
            label="비밀번호"
            placeholder="비밀번호를 입력하세요"
            required="true"
        />

        <x-ui.input
            type="email"
            name="email"
            label="이메일"
            placeholder="email@example.com"
        />

        <x-ui.button type="submit" color="primary">
            로그인
        </x-ui.button>
    </form>
@endsection
