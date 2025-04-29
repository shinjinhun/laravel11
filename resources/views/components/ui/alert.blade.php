@props(['type' => 'info'])  {{-- 기본값은 info --}}

@php
    $colors = [
        'info' => '#d9edf7',
        'success' => '#d4edda',
        'warning' => '#fff3cd',
        'danger' => '#f8d7da',
    ];
@endphp

<div style="background-color: {{ $colors[$type] ?? $colors['info'] }}; padding: 1rem; margin-bottom: 1rem; border-radius: 5px;">
    {{ $slot }}
</div>
