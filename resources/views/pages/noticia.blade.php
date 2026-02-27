@extends('layouts.app')

@section('title', $noticia->titulo . ' - Parroquia Cristo Resucitado')

@section('content')
<article class="py-16 px-6">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-4 text-parroquia-brown dark:text-parroquia-gold">
            {{ $noticia->titulo }}
        </h1>
        <p class="text-gray-500 dark:text-gray-400 mb-8">
            {{ $noticia->publicado_en?->translatedFormat('l d \d\e F \d\e Y') ?? $noticia->created_at->translatedFormat('l d \d\e F \d\e Y') }}
        </p>

        @if($noticia->imagen)
            <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}"
                 class="w-full rounded-lg shadow mb-8">
        @endif

        <div class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-parroquia-darkText">
            {!! $noticia->contenido !!}
        </div>

        <a href="{{ route('noticias') }}" class="inline-block mt-8 text-parroquia-gold hover:underline">
            ← Volver a noticias
        </a>
    </div>
</article>
@endsection
