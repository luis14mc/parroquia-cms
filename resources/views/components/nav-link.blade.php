@props(['active' => false])

@php
$classes = $active
    ? 'px-4 py-2 text-sm font-medium text-primary'
    : 'px-4 py-2 text-sm font-medium text-text-dark transition-colors hover:text-primary dark:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
