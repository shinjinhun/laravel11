@props([
'label' => '',
'name',
'options' => [], // ['male' => '남자', 'female' => '여자']
'checked' => '',
])

<div style="margin-bottom: 1rem;">
    @if($label)
        <p style="margin-bottom: 5px;">{{ $label }}</p>
    @endif

    @foreach($options as $value => $text)
        <label style="margin-right: 10px;">
            <input
                type="radio"
                name="{{ $name }}"
                value="{{ $value }}"
                @checked(old($name, $checked) == $value)
            >
            {{ $text }}
        </label>
    @endforeach
</div>
