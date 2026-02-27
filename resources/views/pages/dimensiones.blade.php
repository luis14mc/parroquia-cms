@extends('layouts.app')

@section('title', 'Dimensiones - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Dimensiones Pastorales
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Nuestra parroquia se organiza en distintas dimensiones para atender las necesidades
            espirituales y comunitarias de todos los fieles.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Dimensión Misionera</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Anunciar el Evangelio y llevar la Buena Nueva a todos.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Dimensión Litúrgica</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Celebrar los sacramentos y la vida litúrgica de la comunidad.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Dimensión Caritativa</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Servir a los más necesitados con amor y solidaridad.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Dimensión Comunitaria</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Fortalecer los lazos y la vida en comunidad.</p>
            </div>
        </div>
    </div>
</section>
@endsection
