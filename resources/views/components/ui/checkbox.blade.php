@props([
'label' => '',
'name',
'checked' => false,
'value' => 1,
])

<div style="margin-bottom: 1rem;">
    <label>
        <input
            type="checkbox"
            name="{{ $name }}"
            value="{{ $value }}"
            @checked(old($name, $checked))
        >
        {{ $label }}
    </label>
</div>
