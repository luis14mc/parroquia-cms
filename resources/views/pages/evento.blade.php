@extends('layouts.app')
@section('title', $evento->titulo . ' - Parroquia Cristo Resucitado')
@section('content')
{{-- Breadcrumb --}}
<div class="w-full bg-white dark:bg-background-dark border-b border-gray-100 dark:border-gray-800 py-3 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[1200px] mx-auto flex items-center gap-2 text-sm text-muted">
        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <a href="{{ route('eventos') }}" class="hover:text-primary transition-colors">Actividades</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <span class="font-semibold text-text-dark dark:text-white truncate max-w-[220px]">{{ $evento->titulo }}</span>
    </div>
</div>
{{-- Content --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[900px] mx-auto">
        <div class="bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700">
            @if($evento->imagen)
            <div class="aspect-video overflow-hidden">
                <img src="{{ asset('storage/'.$evento->imagen) }}" alt="{{ $evento->titulo }}"
                     class="w-full h-full object-cover">
            </div>
            @else
            <div class="aspect-[16/5] bg-gradient-to-br from-secondary/20 to-primary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-secondary/30" style="font-size:8rem;">event</span>
            </div>
            @endif
            <div class="p-8 md:p-12">
                {{-- Datos del evento --}}
                <div class="flex flex-wrap gap-4 mb-6">
                    <div class="flex items-center gap-2 text-sm text-muted">
                        <div class="bg-secondary/10 p-1.5 rounded-lg">
                            <span class="material-symbols-outlined text-secondary text-sm">calendar_today</span>
                        </div>
                        <span>{{ \Carbon\Carbon::parse($evento->inicio_en)->translatedFormat('l, d \d\e F \d\e Y') }}</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-muted">
                        <div class="bg-secondary/10 p-1.5 rounded-lg">
                            <span class="material-symbols-outlined text-secondary text-sm">schedule</span>
                        </div>
                        <span>{{ \Carbon\Carbon::parse($evento->inicio_en)->format('g:i A') }}</span>
                    </div>
                    @if($evento->ubicacion)
                    <div class="flex items-center gap-2 text-sm text-muted">
                        <div class="bg-secondary/10 p-1.5 rounded-lg">
                            <span class="material-symbols-outlined text-secondary text-sm">location_on</span>
                        </div>
                        <span>{{ $evento->ubicacion }}</span>
                    </div>
                    @endif
                </div>
                <h1 class="text-3xl md:text-4xl font-black text-text-dark dark:text-white mb-8 leading-tight">{{ $evento->titulo }}</h1>
                @if($evento->descripcion)
                <div class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg space-y-4">
                    {!! nl2br(e($evento->descripcion)) !!}
                </div>
                @endif
                <div class="mt-10 pt-8 border-t border-gray-100 dark:border-gray-700 flex flex-wrap gap-4">
                    <a href="{{ route('contacto') }}" class="px-6 py-3 bg-secondary hover:bg-red-800 text-white font-bold rounded-lg transition-colors flex items-center gap-2">
                        <span>Más información</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                    <a href="{{ route('eventos') }}" class="px-6 py-3 border border-gray-200 dark:border-gray-600 text-text-dark dark:text-white hover:border-primary hover:text-primary font-bold rounded-lg transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                        <span>Volver a Actividades</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
