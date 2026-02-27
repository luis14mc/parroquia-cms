@extends('layouts.app')

@section('title', 'Noticias - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Noticias
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Mantente informado sobre las últimas novedades y actividades de nuestra parroquia.
        </p>

        @if($noticias->isEmpty())
            <p class="text-center text-gray-500 dark:text-gray-400 py-12">
                No hay noticias publicadas aún.
            </p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($noticias as $noticia)
                    <a href="{{ route('noticias.show', $noticia) }}"
                       class="block bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                        @if($noticia->imagen)
                            <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}"
                                 class="w-full h-40 object-cover rounded-lg mb-4">
                        @endif
                        <h2 class="text-xl font-semibold text-parroquia-brown dark:text-parroquia-gold mb-2">
                            {{ $noticia->titulo }}
                        </h2>
                        <p class="text-gray-600 dark:text-parroquia-darkText text-sm line-clamp-2">
                            {{ $noticia->resumen ?? \Illuminate\Support\Str::limit(strip_tags($noticia->contenido), 120) }}
                        </p>
                        <p class="text-xs text-gray-500 mt-2">
                            {{ $noticia->publicado_en?->translatedFormat('d \d\e F \d\e Y') ?? $noticia->created_at->translatedFormat('d \d\e F \d\e Y') }}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $noticias->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
