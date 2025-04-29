@extends('layouts.app')

@section('title', 'Card 컴포넌트 테스트')

@section('content')
    <x-layouts.card title="테스트 카드입니다">
        <p>이것은 카드 컴포넌트의 슬롯으로 들어간 내용입니다.</p>
    </x-layouts.card>

    <x-layouts.card title="두 번째 카드">
        <ul>
            <li>항목 1</li>
            <li>항목 2</li>
        </ul>
    </x-layouts.card>
@endsection
