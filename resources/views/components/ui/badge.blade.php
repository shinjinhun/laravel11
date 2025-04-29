@props([
'type' => 'primary', // primary, success, danger, warning 등
])

@php
    $colors = [
        'primary' => '#3490dc',
        'success' => '#38c172',
        'danger' => '#e3342f',
        'warning' => '#f6993f',
        'default' => '#6c757d',
    ];
@endphp

<span style="padding: 3px 8px; background-color: {{ $colors[$type] ?? $colors['default'] }};
    color: white; border-radius: 12px; font-size: 0.75rem;">
    {{ $slot }}
</span>
