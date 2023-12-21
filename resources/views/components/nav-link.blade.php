@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center hover:text-violet-900 text-semibold text-violet-500 border-b border-violet-500'
            : 'inline-flex items-center hover:text-violet-900 hover:border-b border-violet-900 text-md text-gray-500';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
