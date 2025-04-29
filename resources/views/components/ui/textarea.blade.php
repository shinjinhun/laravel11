@props([
'label' => '',
'name',
'value' => '',
'placeholder' => '',
'required' => false,
])

<div style="margin-bottom: 1rem;">
    @if($label)
        <label for="{{ $name }}" style="display:block; margin-bottom: 5px;">
            {{ $label }}{{ $required ? ' *' : '' }}
        </label>
    @endif

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;"
        rows="5"
    >{{ old($name, $value) }}</textarea>
</div>
