@props([
'id',
'title' => '모달 제목',
'show' => false,
])

<div
    id="{{ $id }}"
    style="display: {{ $show ? 'block' : 'none' }}; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0,0,0,0.6); z-index: 1000;"
>
    <div style="background: #fff; margin: 10% auto; padding: 20px; width: 400px; position: relative;">
        <h3>{{ $title }}</h3>
        <div>{{ $slot }}</div>
        <button onclick="document.getElementById('{{ $id }}').style.display='none'">닫기</button>
    </div>
</div>
