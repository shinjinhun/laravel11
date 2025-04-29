@extends('layouts.app')

@section('title', '폼 컴포넌트 테스트')

@section('content')
    <form method="POST" action="#">
        @csrf

        <x-ui.input name="title" label="제목" required placeholder="제목 입력"/>
        <x-ui.textarea name="content" label="내용"/>
        <x-ui.select name="category" label="카테고리"
                     :options="['news' => '뉴스', 'notice' => '공지', 'event' => '이벤트']"/>
        <x-ui.radio name="gender" label="성별"
                    :options="['male' => '남자', 'female' => '여자']"/>
        <x-ui.checkbox name="agree" label="약관 동의"/>
        <x-ui.button type="submit" color="primary">제출</x-ui.button>
    </form>

    <hr>

    <h3>🔖 뱃지</h3>
    <x-ui.badge type="primary">기본</x-ui.badge>
    <x-ui.badge type="success">성공</x-ui.badge>
    <x-ui.badge type="danger">위험</x-ui.badge>
    <x-ui.badge type="warning">주의</x-ui.badge>

    <hr>

    <h3>📌 탭</h3>
    <x-ui.tab :tabs="['설명', '상세정보', '후기']">
        <div data-tab-content>설명 내용입니다.</div>
        <div data-tab-content>상세정보입니다.</div>
        <div data-tab-content>후기 목록입니다.</div>
    </x-ui.tab>

    <hr>

    <h3>💬 모달</h3>
    <button onclick="document.getElementById('testModal').style.display='block'">모달 열기</button>

    <x-ui.modal id="testModal" title="모달 제목">
        <p>모달 내용입니다.</p>
    </x-ui.modal>
@endsection
