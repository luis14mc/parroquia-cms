@props(['active' => false])

@php
$classes = $active
    ? 'text-sm font-medium text-primary'
    : 'text-sm font-medium text-text-dark transition-colors hover:text-primary dark:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
