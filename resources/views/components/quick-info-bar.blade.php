@props([
    'items' => [],
])

<section {{ $attributes->merge(['class' => 'bg-white dark:bg-zinc-900 border-y border-border-light dark:border-border-dark']) }}>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:divide-x divide-border-light dark:divide-border-dark">
            @foreach($items as $item)
                <div class="flex items-center gap-4 {{ $loop->index > 0 ? 'md:pl-6' : '' }}">
                    <span class="material-symbols-outlined text-3xl text-primary">
                        {{ $item['icon'] ?? 'info' }}
                    </span>
                    <div>
                        <h3 class="font-bold text-text-dark dark:text-text-light">{{ $item['title'] ?? '' }}</h3>
                        <p class="text-sm text-text-muted">{{ $item['description'] ?? '' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
