@extends('layouts.app')

@section('title', 'Button 컴포넌트 테스트')

@section('content')
    <x-ui.button color="primary">
        기본 버튼
    </x-ui.button>

    <x-ui.button color="secondary">
        보조 버튼
    </x-ui.button>

    <x-ui.button color="success">
        성공 버튼
    </x-ui.button>

    <x-ui.button color="danger">
        삭제 버튼
    </x-ui.button>

    <br><br>

    <x-ui.button type="submit" color="success">
        제출하기
    </x-ui.button>
@endsection
