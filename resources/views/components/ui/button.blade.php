@props([
'type' => 'button',   // button, submit, reset
'color' => 'primary', // primary, secondary, success, danger
])

@php
    $classes = [
        'primary' => 'background-color: #007bff; color: white;',
        'secondary' => 'background-color: #6c757d; color: white;',
        'success' => 'background-color: #28a745; color: white;',
        'danger' => 'background-color: #dc3545; color: white;',
    ];
@endphp

<button type="{{ $type }}" style="{{ $classes[$color] ?? $classes['primary'] }} padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    {{ $slot }}
</button>
