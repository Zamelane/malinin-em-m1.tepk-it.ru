@props([
    'label' => '',
    'name',
    'value' => '',
    'min' => null,
    'max' => null,
    'step' => null,
    'type' => 'text',
    'required' => false,
    'placeholder' => null,
])

@php
    $placeholder ??= $label;
@endphp

<div class="form-item">
    <label for="{{ $name }}">{{ $label }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($min !== null) min="{{ $min }}" @endif
        @if($max !== null) max="{{ $max }}" @endif
        @if($step !== null) step="{{ $step }}" @endif
        @if($required) required @endif
    >
    @error($name)<p class="p-error">{{ $message }}</p>@enderror
</div>
