@extends('layouts.app')
@section('title', 'Noticias - Parroquia Cristo Resucitado')
@section('content')
<div class="w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col gap-10">
    {{-- Titulo --}}
    <div>
        <h1 class="text-text-dark dark:text-white text-4xl sm:text-5xl font-black leading-tight tracking-tight">Noticias y Blog Parroquial</h1>
        <p class="text-muted dark:text-gray-400 text-lg mt-2 max-w-2xl">
            Mantente informado sobre las últimas actividades, reflexiones espirituales y anuncios de nuestra comunidad.
        </p>
    </div>
    {{-- Grid de noticias --}}
    @if($noticias->count())
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-8">
        @foreach($noticias as $noticia)
        <article class="flex flex-col gap-4 group cursor-pointer">
            <a href="{{ route('noticia', $noticia) }}" class="block relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-gray-100 dark:bg-gray-800">
                @if($noticia->imagen)
                    <img src="{{ asset('storage/'.$noticia->imagen) }}" alt="{{ $noticia->titulo }}"
                         class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                @else
                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary/10 to-secondary/10">
                        <span class="material-symbols-outlined text-primary/30" style="font-size:3rem">church</span>
                    </div>
                @endif
                <div class="absolute top-4 left-4">
                    <span class="bg-primary text-text-dark text-xs font-bold px-3 py-1 rounded-full shadow-sm">Parroquia</span>
                </div>
            </a>
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2 text-xs text-muted font-medium uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    {{ $noticia->publicado_en?->isoFormat('D [de] MMMM, YYYY') ?? $noticia->created_at->isoFormat('D [de] MMMM, YYYY') }}
                </div>
                <h3 class="text-xl font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors leading-tight">
                    <a href="{{ route('noticia', $noticia) }}">{{ $noticia->titulo }}</a>
                </h3>
                @if($noticia->resumen)
                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">{{ $noticia->resumen }}</p>
                @endif
                <a href="{{ route('noticia', $noticia) }}" class="inline-flex items-center text-primary text-sm font-bold mt-1 hover:underline">
                    Leer Más <span class="material-symbols-outlined text-base ml-1">arrow_right_alt</span>
                </a>
            </div>
        </article>
        @endforeach
    </div>
    {{-- Paginacion --}}
    <div class="flex justify-center pb-12">
        {{ $noticias->links() }}
    </div>
    @else
    <div class="text-center py-24">
        <span class="material-symbols-outlined text-gray-300 dark:text-gray-600 block mb-4" style="font-size:4rem">newspaper</span>
        <p class="text-muted dark:text-gray-400 text-lg">Próximamente publicaremos noticias de nuestra comunidad.</p>
    </div>
    @endif
</div>
@endsection
