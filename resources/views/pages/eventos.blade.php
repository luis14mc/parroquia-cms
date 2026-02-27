@extends('layouts.app')

@section('title', 'Actividades y Eventos - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Actividades y Eventos
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Descubre los retiros, celebraciones y encuentros comunitarios que tenemos preparados.
        </p>

        @if($eventos->isEmpty())
            <p class="text-center text-gray-500 dark:text-gray-400 py-12">
                No hay eventos programados.
            </p>
        @else
            <div class="space-y-6">
                @foreach($eventos as $evento)
                    <a href="{{ route('eventos.show', $evento) }}"
                       class="block bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                        <div class="flex flex-col md:flex-row gap-4">
                            @if($evento->imagen)
                                <img src="{{ asset('storage/' . $evento->imagen) }}" alt="{{ $evento->titulo }}"
                                     class="w-full md:w-48 h-32 object-cover rounded-lg flex-shrink-0">
                            @endif
                            <div class="flex-1">
                                <h2 class="text-xl font-semibold text-parroquia-brown dark:text-parroquia-gold mb-2">
                                    {{ $evento->titulo }}
                                </h2>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                                    {{ $evento->inicio_en->translatedFormat('l d \d\e F \d\e Y \a \l\a\s H:i') }}
                                    @if($evento->ubicacion)
                                        · {{ $evento->ubicacion }}
                                    @endif
                                </p>
                                @if($evento->descripcion)
                                    <p class="text-gray-600 dark:text-parroquia-darkText line-clamp-2">
                                        {{ Str::limit($evento->descripcion, 150) }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $eventos->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
