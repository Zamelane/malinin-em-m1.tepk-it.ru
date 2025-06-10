@props([
    'label' => '',
    'name',
    'options' => [],
    'selected' => null,
])

<div class="form-item">
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}">
        @foreach($options as $option)
            <option value="{{ $option->id }}" @selected(old($name, $selected) == $option->id)>
                {{ $option->name }}
            </option>
        @endforeach
    </select>
    @error($name)<p class="p-error">{{ $message }}</p>@enderror
</div>
