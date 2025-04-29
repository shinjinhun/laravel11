@extends('layouts.app')

@section('title', 'Card 컴포넌트 테스트')

@section('content')
    <x-layouts.card title="공지사항" :icon="'📢'">
        <p>최신 공지사항을 확인하세요.</p>
    </x-layouts.card>

    <x-layouts.card title="문의하기" :icon="'✉️'">
        <p>궁금한 점이 있으면 문의해주세요.</p>
    </x-layouts.card>

    {{--    반복문으로 카드 여러 개 렌더링하기--}}
    @php
        $posts = [
            ['title' => 'Laravel 11 출시', 'body' => '최신 버전은 많은 변화가 있습니다.', 'icon' => '🚀'],
            ['title' => 'Blade 컴포넌트 소개', 'body' => '재사용 가능한 UI를 만들어보세요.', 'icon' => '🧩'],
            ['title' => '컨트롤러 정리법', 'body' => 'RESTful 방식으로 깔끔하게 구성하세요.', 'icon' => '🗂️'],
        ];
    @endphp

    @foreach ($posts as $post)
        <x-layouts.card :title="$post['title']" :icon="$post['icon']">
            {{ $post['body'] }}
        </x-layouts.card>
    @endforeach


@endsection

