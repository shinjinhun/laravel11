@props([
'type' => 'text',
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

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"
    >
</div>
