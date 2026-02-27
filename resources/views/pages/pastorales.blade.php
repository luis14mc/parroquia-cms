@extends('layouts.app')

@section('title', 'Pastorales - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Pastorales
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Cada pastoral está dedicada a acompañar a un grupo específico de nuestra comunidad
            en su camino de fe.
        </p>

        @if($pastorales->isEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Pastoral Infantil</h2>
                    <p class="text-gray-700 dark:text-parroquia-darkText">Formación y catequesis para los más pequeños.</p>
                </div>
                <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Pastoral Juvenil</h2>
                    <p class="text-gray-700 dark:text-parroquia-darkText">Acompañamiento espiritual para jóvenes.</p>
                </div>
                <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Pastoral Familiar</h2>
                    <p class="text-gray-700 dark:text-parroquia-darkText">Fortalecimiento de la familia como hogar de fe.</p>
                </div>
                <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Pastoral de Enfermos</h2>
                    <p class="text-gray-700 dark:text-parroquia-darkText">Visita y acompañamiento a enfermos y ancianos.</p>
                </div>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($pastorales as $pastoral)
                    <a href="{{ route('pastorales.show', $pastoral) }}"
                       class="block bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
                        @if($pastoral->imagen)
                            <img src="{{ asset('storage/' . $pastoral->imagen) }}" alt="{{ $pastoral->nombre }}"
                                 class="w-full h-40 object-cover rounded-lg mb-4">
                        @endif
                        <h2 class="text-xl font-semibold text-parroquia-brown dark:text-parroquia-gold mb-2">
                            {{ $pastoral->nombre }}
                        </h2>
                        <p class="text-gray-600 dark:text-parroquia-darkText">
                            {{ Str::limit($pastoral->descripcion, 120) }}
                        </p>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
