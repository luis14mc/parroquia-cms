@extends('layouts.app')
@section('title', $pastoral->nombre . ' - Parroquia Cristo Resucitado')
@section('content')
{{-- Breadcrumb --}}
<div class="w-full bg-white dark:bg-background-dark border-b border-gray-100 dark:border-gray-800 py-3 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[1200px] mx-auto flex items-center gap-2 text-sm text-muted">
        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <a href="{{ route('pastorales') }}" class="hover:text-primary transition-colors">Pastorales</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <span class="font-semibold text-text-dark dark:text-white truncate max-w-[200px]">{{ $pastoral->nombre }}</span>
    </div>
</div>
{{-- Content --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[900px] mx-auto">
        <div class="bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700">
            @if($pastoral->imagen)
            <div class="aspect-[16/6] overflow-hidden">
                <img src="{{ asset('storage/'.$pastoral->imagen) }}" alt="{{ $pastoral->nombre }}"
                     class="w-full h-full object-cover">
            </div>
            @else
            <div class="aspect-[16/5] bg-gradient-to-br from-primary/20 to-secondary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary/30" style="font-size:8rem;">groups</span>
            </div>
            @endif
            <div class="p-8 md:p-12">
                <h1 class="text-3xl md:text-4xl font-black text-text-dark dark:text-white mb-6 leading-tight">{{ $pastoral->nombre }}</h1>
                @if($pastoral->descripcion)
                <div class="prose prose-gray dark:prose-invert max-w-none">
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-lg">{!! nl2br(e($pastoral->descripcion)) !!}</p>
                </div>
                @endif
                <div class="mt-10 pt-8 border-t border-gray-100 dark:border-gray-700 flex flex-wrap gap-4">
                    <a href="{{ route('contacto') }}" class="px-6 py-3 bg-secondary hover:bg-red-800 text-white font-bold rounded-lg transition-colors flex items-center gap-2">
                        <span>¿Cómo participar?</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                    <a href="{{ route('pastorales') }}" class="px-6 py-3 border border-gray-200 dark:border-gray-600 text-text-dark dark:text-white hover:border-primary hover:text-primary font-bold rounded-lg transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                        <span>Volver a Pastorales</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
