@extends('layouts.app')
@section('title', $noticia->titulo . ' - Parroquia Cristo Resucitado')
@section('meta_description', $noticia->resumen ?? '')
@section('content')
<article class="w-full max-w-[860px] mx-auto px-4 sm:px-6 py-10">
    {{-- Breadcrumb --}}
    <nav class="flex items-center gap-2 text-sm text-muted mb-8">
        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
        <span class="material-symbols-outlined text-sm">chevron_right</span>
        <a href="{{ route('noticias') }}" class="hover:text-primary transition-colors">Noticias</a>
        <span class="material-symbols-outlined text-sm">chevron_right</span>
        <span class="text-text-dark dark:text-white line-clamp-1">{{ $noticia->titulo }}</span>
    </nav>
    {{-- Header --}}
    <div class="mb-10">
        <div class="flex items-center gap-2 text-xs text-muted font-medium uppercase tracking-wider mb-4">
            <span class="material-symbols-outlined text-sm">calendar_today</span>
            {{ $noticia->publicado_en?->isoFormat('D [de] MMMM, YYYY') ?? $noticia->created_at->isoFormat('D [de] MMMM, YYYY') }}
        </div>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-text-dark dark:text-white leading-tight mb-6">{{ $noticia->titulo }}</h1>
        @if($noticia->resumen)
        <p class="text-lg text-muted dark:text-gray-400 leading-relaxed border-l-4 border-primary pl-4">{{ $noticia->resumen }}</p>
        @endif
    </div>
    {{-- Imagen --}}
    @if($noticia->imagen)
    <div class="w-full aspect-video rounded-2xl overflow-hidden mb-10 shadow-xl">
        <img src="{{ asset('storage/'.$noticia->imagen) }}" alt="{{ $noticia->titulo }}" class="w-full h-full object-cover">
    </div>
    @endif
    {{-- Contenido --}}
    <div class="prose prose-lg max-w-none dark:prose-invert text-text-dark dark:text-text-light">
        {!! nl2br(e($noticia->contenido)) !!}
    </div>
    {{-- Volver --}}
    <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
        <a href="{{ route('noticias') }}" class="inline-flex items-center gap-2 text-primary font-bold hover:text-secondary transition-colors">
            <span class="material-symbols-outlined">arrow_back</span>Volver a Noticias
        </a>
    </div>
</article>
@endsection
