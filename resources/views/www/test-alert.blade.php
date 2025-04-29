@extends('layouts.app')

@section('title', 'Alert 컴포넌트 테스트')

@section('content')
    <x-ui.alert type="info">
        이건 정보 알림입니다.
    </x-ui.alert>

    <x-ui.alert type="success">
        성공적으로 처리되었습니다!
    </x-ui.alert>

    <x-ui.alert type="warning">
        주의가 필요합니다.
    </x-ui.alert>

    <x-ui.alert type="danger">
        오류가 발생했습니다!
    </x-ui.alert>
@endsection
