@props([
'tabs' => ['탭1', '탭2'],
])

@php $tabId = uniqid('tab_'); @endphp

<div id="{{ $tabId }}">
    <ul style="display: flex; list-style: none; padding: 0; margin-bottom: 10px;">
        @foreach ($tabs as $i => $label)
            <li style="margin-right: 10px;">
                <a href="#" onclick="showTab{{ $tabId }}({{ $i }})" style="text-decoration: underline;">{{ $label }}</a>
            </li>
        @endforeach
    </ul>

    <div>
        {{ $slot }}
    </div>
</div>

<script>
    function showTab{{ $tabId }}(index) {
        const container = document.getElementById('{{ $tabId }}');
        const children = container.querySelectorAll('[data-tab-content]');
        children.forEach((el, i) => {
            el.style.display = i === index ? 'block' : 'none';
        });
    }

    // 초기 탭
    document.addEventListener('DOMContentLoaded', () => {
        showTab{{ $tabId }}(0);
    });
</script>
