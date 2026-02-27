@extends('layouts.app')

@section('title', $evento->titulo . ' - Parroquia Cristo Resucitado')

@section('content')
<article class="py-16 px-6">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-4 text-parroquia-brown dark:text-parroquia-gold">
            {{ $evento->titulo }}
        </h1>
        <p class="text-gray-500 dark:text-gray-400 mb-4">
            {{ $evento->inicio_en->translatedFormat('l d \d\e F \d\e Y \a \l\a\s H:i') }}
            @if($evento->fin_en)
                — {{ $evento->fin_en->translatedFormat('H:i') }}
            @endif
        </p>
        @if($evento->ubicacion)
            <p class="text-parroquia-gold mb-6">📍 {{ $evento->ubicacion }}</p>
        @endif

        @if($evento->imagen)
            <img src="{{ asset('storage/' . $evento->imagen) }}" alt="{{ $evento->titulo }}"
                 class="w-full rounded-lg shadow mb-8">
        @endif

        @if($evento->descripcion)
            <div class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-parroquia-darkText">
                {!! nl2br(e($evento->descripcion)) !!}
            </div>
        @endif

        <a href="{{ route('eventos') }}" class="inline-block mt-8 text-parroquia-gold hover:underline">
            ← Volver a eventos
        </a>
    </div>
</article>
@endsection
