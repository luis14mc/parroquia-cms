@extends('layouts.app')

@section('title', 'Contacto - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Contacto
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Estamos aquí para acompañarte. No dudes en comunicarte con nosotros.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-4">Ubicación</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Parroquia Cristo Resucitado</p>
                <p class="text-gray-700 dark:text-parroquia-darkText">Tegucigalpa, Honduras</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-4">Horario de oficina</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Lunes a Viernes: 8:00 AM - 12:00 PM / 2:00 PM - 5:00 PM</p>
            </div>
        </div>

        <div class="mt-12 bg-parroquia-cream dark:bg-gray-800 p-8 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-parroquia-gold mb-4">Envíanos un mensaje</h2>
            <p class="text-gray-500 dark:text-gray-400">
                El formulario de contacto se conectará con el backend cuando el CMS esté configurado.
            </p>
        </div>
    </div>
</section>
@endsection
