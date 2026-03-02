@props([
    'title',
    'subtitle' => '',
    'image' => '',
    'ctaText' => '',
    'ctaUrl' => '#',
    'secondaryCtaText' => '',
    'secondaryCtaUrl' => '#',
    'centered' => true,
    'size' => 'lg',
])

@php
    $heightClasses = match($size) {
        'sm' => 'min-h-[300px] py-16',
        'md' => 'min-h-[400px] py-20',
        'lg' => 'min-h-[500px] py-24',
        'xl' => 'min-h-[600px] py-32',
        default => 'min-h-[500px] py-24',
    };
@endphp

<section class="relative {{ $heightClasses }} flex items-center overflow-hidden">
    {{-- Background Image --}}
    @if($image)
        <div class="absolute inset-0 z-0">
            <img src="{{ $image }}" 
                 alt="" 
                 class="w-full h-full object-cover"
                 loading="eager">
            <div class="absolute inset-0 bg-gradient-to-r from-background-dark/90 via-background-dark/70 to-background-dark/50"></div>
        </div>
    @else
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-secondary via-secondary/90 to-primary/80"></div>
    @endif

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="{{ $centered ? 'text-center max-w-3xl mx-auto' : 'max-w-2xl' }}">
            {{-- Badge/Label Slot --}}
            @if(isset($badge))
                <div class="mb-4">
                    {{ $badge }}
                </div>
            @endif

            {{-- Title --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight mb-6">
                {!! $title !!}
            </h1>

            {{-- Subtitle --}}
            @if($subtitle)
                <p class="text-lg md:text-xl text-white/90 mb-8 leading-relaxed">
                    {{ $subtitle }}
                </p>
            @endif

            {{-- Custom Content Slot --}}
            {{ $slot }}

            {{-- CTA Buttons --}}
            @if($ctaText || $secondaryCtaText)
                <div class="flex flex-wrap {{ $centered ? 'justify-center' : '' }} gap-4 mt-8">
                    @if($ctaText)
                        <a href="{{ $ctaUrl }}" class="btn-primary">
                            {{ $ctaText }}
                        </a>
                    @endif
                    @if($secondaryCtaText)
                        <a href="{{ $secondaryCtaUrl }}" class="btn-outline border-white text-white hover:bg-white hover:text-background-dark">
                            {{ $secondaryCtaText }}
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
