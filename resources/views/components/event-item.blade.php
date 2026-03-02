@props([
    'icon' => 'event',
    'title',
    'date' => '',
    'time' => '',
    'location' => '',
    'url' => '#',
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'flex gap-4 p-4 rounded-xl hover:bg-primary/5 transition-colors group']) }}>
    {{-- Icon --}}
    <div class="w-12 h-12 shrink-0 rounded-lg bg-primary/10 flex items-center justify-center group-hover:bg-primary group-hover:text-background-dark transition-colors">
        <span class="material-symbols-outlined text-xl text-primary group-hover:text-background-dark transition-colors">
            {{ $icon }}
        </span>
    </div>

    {{-- Content --}}
    <div class="flex-grow min-w-0">
        <h4 class="font-bold text-text-dark dark:text-text-light group-hover:text-primary transition-colors line-clamp-1">
            {{ $title }}
        </h4>
        
        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-text-muted mt-1">
            @if($date)
                <span class="inline-flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    {{ $date }}
                </span>
            @endif
            @if($time)
                <span class="inline-flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">schedule</span>
                    {{ $time }}
                </span>
            @endif
            @if($location)
                <span class="inline-flex items-center gap-1">
                    <span class="material-symbols-outlined text-sm">location_on</span>
                    {{ $location }}
                </span>
            @endif
        </div>

        {{ $slot }}
    </div>

    {{-- Arrow --}}
    <span class="material-symbols-outlined text-text-muted group-hover:text-primary transition-colors self-center">
        chevron_right
    </span>
</a>
