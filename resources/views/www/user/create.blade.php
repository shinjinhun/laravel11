<!-- resources/views/www/user/create.blade.php -->
@extends('layouts.app')

@section('title', 'PC 홈페이지')

{{-- 페이지별 CSS 추가 --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endpush

@section('content')
    <h2>기본 폼 작성 테스트 페이지입니다.</h2>

    {{-- 🔴 전체 에러 목록 출력 --}}
    @if ($errors->any())
        <div style="color:red; margin-bottom: 1em;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label>이름</label>
        <input type="text" name="name">
        @error('name') <div>{{ $message }}</div> @enderror

        <label>이메일</label>
        <input type="email" name="email">
        @error('email') <div>{{ $message }}</div> @enderror

        <button type="submit">저장</button>
    </form>



@endsection

{{-- 페이지별 JS 추가 --}}
@push('scripts')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endpush
