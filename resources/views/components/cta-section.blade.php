@props([
    'title',
    'description' => '',
    'ctaText' => '',
    'ctaUrl' => '#',
    'secondaryCtaText' => '',
    'secondaryCtaUrl' => '#',
    'variant' => 'primary', // primary, secondary, gradient
])

@php
    $bgClasses = match($variant) {
        'primary' => 'bg-primary text-background-dark',
        'secondary' => 'bg-secondary text-white',
        'gradient' => 'bg-gradient-to-r from-secondary to-primary text-white',
        default => 'bg-primary text-background-dark',
    };
@endphp

<section {{ $attributes->merge(['class' => "$bgClasses py-16 lg:py-20"]) }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
            <div class="max-w-2xl">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">{{ $title }}</h2>
                @if($description)
                    <p class="text-lg opacity-90">{{ $description }}</p>
                @endif
                {{ $slot }}
            </div>

            @if($ctaText || $secondaryCtaText)
                <div class="flex flex-wrap gap-4 shrink-0">
                    @if($ctaText)
                        <a href="{{ $ctaUrl }}" class="{{ $variant === 'primary' ? 'btn-secondary' : 'bg-white text-secondary hover:bg-white/90 px-6 py-3 rounded-full font-semibold inline-flex items-center gap-2 transition-colors' }}">
                            {{ $ctaText }}
                        </a>
                    @endif
                    @if($secondaryCtaText)
                        <a href="{{ $secondaryCtaUrl }}" class="btn-outline {{ $variant !== 'primary' ? 'border-white text-white hover:bg-white hover:text-background-dark' : '' }}">
                            {{ $secondaryCtaText }}
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
