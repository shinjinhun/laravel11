@props(['title', 'icon' => null])

<div class="card" style="border:1px solid #ccc; padding: 1rem; margin-bottom: 1rem;">
    <div class="card-header" style="font-weight: bold;">
        @if ($icon)
            <span style="margin-right: 0.5rem;">{!! $icon !!}</span>
        @endif
        {{ $title }}
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
