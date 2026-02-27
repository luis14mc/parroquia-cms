@extends('layouts.app')

@section('title', 'Intenciones de Misa - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Intenciones de Misa
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Puedes solicitar que se celebre una misa por una intención especial: por un difunto,
            por una persona enferma, en acción de gracias o por cualquier otra necesidad.
        </p>

        <div class="bg-parroquia-cream dark:bg-gray-800 p-8 rounded-lg shadow max-w-2xl mx-auto mb-12">
            <h2 class="text-xl font-semibold text-parroquia-gold mb-4">¿Cómo solicitar una intención?</h2>
            <p class="text-gray-700 dark:text-parroquia-darkText mb-4">
                Acércate a la oficina parroquial o comunícate con nosotros para reservar la fecha
                y registrar tu intención.
            </p>
            <a href="{{ route('contacto') }}"
               class="inline-block bg-parroquia-gold text-parroquia-darkBg font-semibold px-6 py-2 rounded-lg hover:opacity-90 transition-opacity">
                Contactar
            </a>
        </div>

        @if($intenciones->isEmpty())
            <p class="text-center text-gray-500 dark:text-gray-400 py-8">
                No hay intenciones programadas para mostrar.
            </p>
        @else
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold text-parroquia-brown dark:text-parroquia-gold mb-4">
                    Intenciones programadas
                </h2>
                @foreach($intenciones as $intencion)
                    <div class="bg-parroquia-cream dark:bg-gray-800 p-4 rounded-lg shadow">
                        <div class="flex flex-wrap justify-between items-start gap-2">
                            <div>
                                <span class="inline-block px-2 py-1 text-xs rounded bg-parroquia-gold/20 text-parroquia-gold capitalize">
                                    {{ $intencion->tipo }}
                                </span>
                                <p class="font-semibold mt-2 text-parroquia-brown dark:text-parroquia-gold">
                                    Por {{ $intencion->nombre_beneficiario }}
                                </p>
                                <p class="text-sm text-gray-600 dark:text-parroquia-darkText">
                                    Solicitado por: {{ $intencion->solicitante }}
                                </p>
                            </div>
                            <p class="text-sm font-medium text-parroquia-gold">
                                {{ $intencion->fecha_misa->translatedFormat('d/m/Y') }}
                            </p>
                        </div>
                        @if($intencion->comentario)
                            <p class="text-sm text-gray-500 mt-2">{{ $intencion->comentario }}</p>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $intenciones->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
