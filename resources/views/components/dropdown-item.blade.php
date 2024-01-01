@props(["active" => false])

@php
    $classes = 'block text-left px-3 py-2 text-sm leading-5 hover:bg-gray-500 focus:bg-gray-300';
    if ($active) $classes .= " bg-blue-500 text-white"
@endphp

<a
    {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}
</a>
