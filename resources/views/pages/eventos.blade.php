@extends('layouts.app')
@section('title', 'Actividades y Eventos - Parroquia Cristo Resucitado')
@section('content')
{{-- Page header --}}
<div class="w-full bg-white dark:bg-background-dark py-14 px-4 sm:px-6 lg:px-8 border-b border-gray-100 dark:border-gray-800">
    <div class="max-w-[1200px] mx-auto">
        <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">Agenda parroquial</p>
        <h1 class="text-text-dark dark:text-white text-4xl md:text-5xl font-black leading-tight mb-4">Actividades y Eventos</h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl leading-relaxed">
            Manténgase informado sobre todas las actividades, celebraciones y eventos de nuestra comunidad parroquial.
        </p>
    </div>
</div>
{{-- Lista de eventos --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto">
        @if($eventos->isEmpty())
        <div class="text-center py-20 flex flex-col items-center gap-4">
            <span class="material-symbols-outlined text-muted text-6xl">event</span>
            <p class="text-xl font-bold text-text-dark dark:text-white">No hay eventos próximos</p>
            <p class="text-gray-500 dark:text-gray-400">Vuelva a revisarnos pronto. Siempre tenemos actividades nuevas.</p>
            <a href="{{ route('home') }}" class="mt-4 px-6 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors">Volver al inicio</a>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @foreach($eventos as $evento)
            <article class="group bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-secondary/20 to-primary/10 relative">
                    @if($evento->imagen)
                    <img src="{{ asset('storage/'.$evento->imagen) }}" alt="{{ $evento->titulo }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <div class="w-full h-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-secondary/40" style="font-size:5rem;">event</span>
                    </div>
                    @endif
                    {{-- Fecha badge --}}
                    <div class="absolute top-4 left-4 bg-secondary text-white text-center rounded-xl px-3 py-2 shadow-lg">
                        <p class="text-2xl font-black leading-none">{{ \Carbon\Carbon::parse($evento->inicio_en)->format('d') }}</p>
                        <p class="text-xs font-bold uppercase tracking-wider">{{ \Carbon\Carbon::parse($evento->inicio_en)->translatedFormat('M') }}</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-muted text-xs mb-3">
                        <span class="material-symbols-outlined text-xs">schedule</span>
                        <span>{{ \Carbon\Carbon::parse($evento->inicio_en)->format('g:i A') }}</span>
                        @if($evento->ubicacion)
                        <span>·</span>
                        <span class="material-symbols-outlined text-xs">location_on</span>
                        <span class="truncate">{{ $evento->ubicacion }}</span>
                        @endif
                    </div>
                    <h2 class="text-lg font-bold text-text-dark dark:text-white mb-3 leading-snug group-hover:text-primary transition-colors line-clamp-2">
                        {{ $evento->titulo }}
                    </h2>
                    @if($evento->descripcion)
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-5 line-clamp-2">
                        {{ Str::limit($evento->descripcion, 100) }}
                    </p>
                    @endif
                    <a href="{{ route('evento', $evento->slug) }}"
                       class="inline-flex items-center gap-2 text-secondary font-bold text-sm hover:gap-3 transition-all">
                        Ver detalles
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        {{-- Pagination --}}
        <div class="flex justify-center">
            {{ $eventos->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
