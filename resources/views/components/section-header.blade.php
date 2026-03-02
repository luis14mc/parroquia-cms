@props([
    'label' => '',
    'title',
    'description' => '',
    'centered' => true,
])

<div {{ $attributes->merge(['class' => $centered ? 'text-center max-w-3xl mx-auto mb-12' : 'mb-12']) }}>
    @if($label)
        <span class="section-label">{{ $label }}</span>
    @endif
    
    <h2 class="section-title">{{ $title }}</h2>
    
    @if($description)
        <p class="text-text-muted text-lg mt-4">{{ $description }}</p>
    @endif

    {{ $slot }}
</div>
