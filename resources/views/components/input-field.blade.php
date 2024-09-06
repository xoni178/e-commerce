@props(['name' => '', 'value' => '', 'type' => 'text'])
<div class="flex flex-col">
    <label for="{{ $name }}" class="text-sm">{{ $slot }}</label>
    <input {{ $attributes->merge() }} type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        value="{{ $value }}" class="border rounded w-80 p-1 text-sm">
</div>
