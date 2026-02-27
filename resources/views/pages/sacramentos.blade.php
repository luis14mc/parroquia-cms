@extends('layouts.app')

@section('title', 'Sacramentos - Parroquia Cristo Resucitado')

@section('content')
<section class="py-16 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6 text-parroquia-brown dark:text-parroquia-gold">
            Sacramentos
        </h1>
        <p class="text-lg text-gray-700 dark:text-parroquia-darkText mb-8">
            Los sacramentos son signos visibles de la gracia de Dios. En nuestra parroquia celebramos
            cada uno con la preparación y el acompañamiento que necesitas.
        </p>

        <div class="space-y-6">
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Bautismo</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">El primer sacramento que nos introduce en la vida cristiana.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Confirmación</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">Fortalece la gracia bautismal y nos une más a Cristo.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Eucaristía</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">El sacramento del Cuerpo y la Sangre de Cristo.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Matrimonio</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">La unión sacramental entre un hombre y una mujer.</p>
            </div>
            <div class="bg-parroquia-cream dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-parroquia-gold mb-2">Reconciliación</h2>
                <p class="text-gray-700 dark:text-parroquia-darkText">El sacramento del perdón y la misericordia de Dios.</p>
            </div>
        </div>
    </div>
</section>
@endsection
