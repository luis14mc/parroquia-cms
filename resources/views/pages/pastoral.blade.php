@extends('layouts.app')

@section('title', $pastoral->nombre . ' - Parroquia Cristo Resucitado')

@section('content')
<article class="py-16 px-6">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            {{ $pastoral->nombre }}
        </h1>

        @if($pastoral->imagen)
            <img src="{{ asset('storage/' . $pastoral->imagen) }}" alt="{{ $pastoral->nombre }}"
                 class="w-full rounded-lg shadow mb-8">
        @endif

        @if($pastoral->descripcion)
            <div class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-parroquia-darkText">
                {!! nl2br(e($pastoral->descripcion)) !!}
            </div>
        @endif

        <a href="{{ route('pastorales') }}" class="inline-block mt-8 text-parroquia-gold hover:underline">
            ← Volver a pastorales
        </a>
    </div>
</article>
@endsection
