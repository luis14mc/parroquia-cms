@extends('layouts.app')

@section('title', 'Inicio - Parroquia Cristo Resucitado')

@section('content')
<section class="relative bg-parroquia-darkBg text-white py-24 px-6 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-parroquia-gold">
            Parroquia Cristo Resucitado
        </h1>
        <p class="text-lg md:text-xl text-parroquia-darkText mb-8">
            Comunidad de fe en Tegucigalpa, Honduras
        </p>
        <a href="{{ route('contacto') }}"
           class="inline-block bg-parroquia-gold text-parroquia-darkBg font-semibold px-8 py-3 rounded-lg hover:opacity-90 transition-opacity">
            Contáctanos
        </a>
    </div>
</section>

<section class="py-16 px-6 bg-parroquia-cream dark:bg-gray-900">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12 text-parroquia-brown dark:text-parroquia-gold">
            Bienvenidos
        </h2>
        <p class="text-center text-lg max-w-3xl mx-auto mb-12 text-gray-700 dark:text-parroquia-darkText">
            Somos una comunidad parroquial comprometida con la evangelización, el servicio y el
            acompañamiento espiritual. Te invitamos a conocer nuestras actividades y a ser parte de
            nuestra familia.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="{{ route('sacramentos') }}"
               class="block bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow border border-gray-100 dark:border-gray-700">
                <h3 class="text-xl font-semibold mb-2 text-parroquia-brown dark:text-parroquia-gold">Sacramentos</h3>
                <p class="text-gray-600 dark:text-parroquia-darkText">Bautismo, Confirmación, Eucaristía, Matrimonio y más.</p>
            </a>
            <a href="{{ route('pastorales') }}"
               class="block bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow border border-gray-100 dark:border-gray-700">
                <h3 class="text-xl font-semibold mb-2 text-parroquia-brown dark:text-parroquia-gold">Pastorales</h3>
                <p class="text-gray-600 dark:text-parroquia-darkText">Pastoral infantil, juvenil, familiar y de enfermos.</p>
            </a>
            <a href="{{ route('eventos') }}"
               class="block bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition-shadow border border-gray-100 dark:border-gray-700">
                <h3 class="text-xl font-semibold mb-2 text-parroquia-brown dark:text-parroquia-gold">Actividades</h3>
                <p class="text-gray-600 dark:text-parroquia-darkText">Eventos, retiros, celebraciones y encuentros comunitarios.</p>
            </a>
        </div>
    </div>
</section>

<section class="py-16 px-6 dark:bg-parroquia-darkBg">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Horarios de Misa
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="font-semibold text-lg text-parroquia-gold mb-2">Entre semana</h3>
                <p class="text-gray-700 dark:text-parroquia-darkText">Lunes a Viernes: 6:00 AM y 6:00 PM</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="font-semibold text-lg text-parroquia-gold mb-2">Fin de semana</h3>
                <p class="text-gray-700 dark:text-parroquia-darkText">Sábado: 6:00 PM</p>
                <p class="text-gray-700 dark:text-parroquia-darkText">Domingo: 7:00 AM, 9:00 AM y 11:00 AM</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 px-6 bg-parroquia-gold text-parroquia-darkBg text-center">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-4">Apoya nuestra parroquia</h2>
        <p class="text-lg mb-8">
            Tu donación nos ayuda a mantener nuestras actividades pastorales y obras de caridad.
        </p>
        <a href="{{ route('donaciones') }}"
           class="inline-block bg-parroquia-darkBg text-parroquia-gold font-semibold px-8 py-3 rounded-lg hover:opacity-90 transition-opacity">
            Donar ahora
        </a>
    </div>
</section>
@endsection
