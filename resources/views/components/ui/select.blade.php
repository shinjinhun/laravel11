@props([
'label' => '',
'name',
'options' => [],
'selected' => '',
'required' => false,
])

<div style="margin-bottom: 1rem;">
    @if($label)
        <label for="{{ $name }}" style="display:block; margin-bottom: 5px;">
            {{ $label }}{{ $required ? ' *' : '' }}
        </label>
    @endif

    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $required ? 'required' : '' }}
        style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;"
    >
        @foreach($options as $key => $text)
            <option value="{{ $key }}" @selected(old($name, $selected) == $key)>
                {{ $text }}
            </option>
        @endforeach
    </select>
</div>
