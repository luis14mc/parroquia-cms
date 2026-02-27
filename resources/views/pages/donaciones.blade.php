@extends('layouts.app')

@section('title', 'Donaciones - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Donaciones
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Tu generosidad nos permite mantener nuestras actividades pastorales, obras de caridad
            y el mantenimiento de nuestra comunidad.
        </p>

        <div class="bg-parroquia-cream dark:bg-gray-800 p-8 rounded-lg shadow mb-8">
            <h2 class="text-xl font-semibold text-parroquia-gold mb-4">Formas de donar</h2>
            <ul class="space-y-2 text-gray-700 dark:text-parroquia-darkText">
                <li>• En la colecta durante las misas</li>
                <li>• En la oficina parroquial</li>
                <li>• Transferencia bancaria (información disponible en oficina)</li>
            </ul>
        </div>

        <div class="text-center">
            <a href="{{ route('contacto') }}"
               class="inline-block bg-parroquia-gold text-parroquia-darkBg font-semibold px-8 py-3 rounded-lg hover:opacity-90 transition-opacity">
                Más información
            </a>
        </div>
    </div>
</section>
@endsection
