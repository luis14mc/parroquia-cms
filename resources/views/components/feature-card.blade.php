@props([
    'icon',
    'title',
    'description' => '',
    'url' => '#',
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'card p-6 text-center group hover:border-primary transition-colors']) }}>
    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary group-hover:text-background-dark transition-colors">
        <span class="material-symbols-outlined text-3xl text-primary group-hover:text-background-dark transition-colors">
            {{ $icon }}
        </span>
    </div>
    
    <h3 class="font-bold text-lg text-text-dark dark:text-text-light mb-2 group-hover:text-primary transition-colors">
        {{ $title }}
    </h3>
    
    @if($description)
        <p class="text-sm text-text-muted line-clamp-2">{{ $description }}</p>
    @endif

    {{ $slot }}
</a>
