@props([
    'image' => '',
    'category' => '',
    'categoryColor' => 'primary',
    'title',
    'excerpt' => '',
    'date' => '',
    'url' => '#',
])

<article {{ $attributes->merge(['class' => 'card group']) }}>
    {{-- Image --}}
    @if($image)
        <div class="relative overflow-hidden aspect-video">
            <img src="{{ $image }}" 
                 alt="{{ $title }}" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                 loading="lazy">
            @if($category)
                <span class="absolute top-4 left-4 px-3 py-1 text-xs font-bold uppercase tracking-wider rounded-full 
                    {{ $categoryColor === 'secondary' ? 'bg-secondary text-white' : 'bg-primary text-background-dark' }}">
                    {{ $category }}
                </span>
            @endif
        </div>
    @endif

    {{-- Content --}}
    <div class="p-6">
        @if($date)
            <time class="text-sm text-text-muted mb-2 block">{{ $date }}</time>
        @endif

        <h3 class="text-lg font-bold text-text-dark dark:text-text-light mb-3 group-hover:text-primary transition-colors line-clamp-2">
            <a href="{{ $url }}" class="hover:underline">
                {{ $title }}
            </a>
        </h3>

        @if($excerpt)
            <p class="text-text-muted text-sm line-clamp-3 mb-4">
                {{ $excerpt }}
            </p>
        @endif

        {{ $slot }}

        <a href="{{ $url }}" class="inline-flex items-center gap-1 text-sm font-medium text-primary hover:text-secondary transition-colors">
            Leer más
            <span class="material-symbols-outlined text-base">arrow_forward</span>
        </a>
    </div>
</article>
