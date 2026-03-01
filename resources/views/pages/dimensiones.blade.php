@extends('layouts.app')
@section('title', 'Dimensiones Pastorales - Parroquia Cristo Resucitado')
@section('content')
{{-- Hero --}}
<div class="relative w-full h-[420px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-background-dark"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-background-dark/95"></div>
    <div class="relative z-10 text-center px-4 max-w-3xl mx-auto">
        <p class="text-primary text-sm font-bold uppercase tracking-[0.2em] mb-3">Nuestra misión</p>
        <h1 class="text-white text-4xl md:text-6xl font-black leading-tight mb-6">Dimensiones Pastorales</h1>
        <p class="text-gray-300 text-xl leading-relaxed">
            Los cuatro pilares que guían el caminar de nuestra comunidad parroquial
        </p>
    </div>
</div>
{{-- Intro --}}
<div class="w-full bg-white dark:bg-surface-dark py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[900px] mx-auto text-center">
        <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
            La Parroquia Cristo Resucitado organiza su vida y misión pastoral en cuatro dimensiones fundamentales que buscan dar respuesta al llamado del Evangelio en nuestra comunidad local.
        </p>
    </div>
</div>
{{-- Cards de dimensiones --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-12 pb-24 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

        {{-- Pascual --}}
        <div class="group bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-all duration-300">
            <div class="h-2 bg-primary w-full"></div>
            <div class="p-8">
                <div class="flex items-start gap-6 mb-6">
                    <div class="bg-primary/10 p-4 rounded-xl shrink-0 group-hover:bg-primary/20 transition-colors">
                        <span class="material-symbols-outlined text-primary text-3xl">brightness_high</span>
                    </div>
                    <div>
                        <p class="text-primary text-xs font-bold uppercase tracking-wider mb-1">01 / Pascual</p>
                        <h2 class="text-2xl font-black text-text-dark dark:text-white leading-tight">Dimensión Pascual</h2>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                    La dimensión pascual celebra la muerte y resurrección de Cristo como el corazón de nuestra fe. Se expresa en la liturgia, los sacramentos y la vida de oración que nutren a toda la comunidad parroquial.
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach(['Celebración de los sacramentos','Liturgia de las Horas','Grupos de oración','Adoración al Santísimo'] as $item)
                    <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                        <span class="material-symbols-outlined text-primary text-xs">chevron_right</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:gap-3 transition-all group-hover:underline">
                    Conocer más
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        {{-- Samaritana --}}
        <div class="group bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-all duration-300">
            <div class="h-2 bg-secondary w-full"></div>
            <div class="p-8">
                <div class="flex items-start gap-6 mb-6">
                    <div class="bg-secondary/10 p-4 rounded-xl shrink-0 group-hover:bg-secondary/20 transition-colors">
                        <span class="material-symbols-outlined text-secondary text-3xl">volunteer_activism</span>
                    </div>
                    <div>
                        <p class="text-secondary text-xs font-bold uppercase tracking-wider mb-1">02 / Samaritana</p>
                        <h2 class="text-2xl font-black text-text-dark dark:text-white leading-tight">Dimensión Samaritana</h2>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                    Inspirados en el buen samaritano, esta dimensión nos impulsa a salir al encuentro del que sufre. Atendemos las necesidades materiales y espirituales de los más vulnerables de nuestra comunidad.
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach(['Cáritas parroquial','Visita a enfermos y ancianos','Banco de alimentos','Apoyo a familias en crisis'] as $item)
                    <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                        <span class="material-symbols-outlined text-secondary text-xs">chevron_right</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 text-secondary font-bold text-sm hover:gap-3 transition-all group-hover:underline">
                    Conocer más
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        {{-- Misionera --}}
        <div class="group bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-all duration-300">
            <div class="h-2 bg-primary w-full"></div>
            <div class="p-8">
                <div class="flex items-start gap-6 mb-6">
                    <div class="bg-primary/10 p-4 rounded-xl shrink-0 group-hover:bg-primary/20 transition-colors">
                        <span class="material-symbols-outlined text-primary text-3xl">travel_explore</span>
                    </div>
                    <div>
                        <p class="text-primary text-xs font-bold uppercase tracking-wider mb-1">03 / Misionera</p>
                        <h2 class="text-2xl font-black text-text-dark dark:text-white leading-tight">Dimensión Misionera</h2>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                    Toda la parroquia es misionera por vocación. Esta dimensión nos impulsa a anunciar el Evangelio a quienes aún no lo conocen, a través de la evangelización puerta a puerta y medios digitales.
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach(['Evangelización en sectores','Misiones populares','Presencia en redes sociales','Formación de agentes de pastoral'] as $item)
                    <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                        <span class="material-symbols-outlined text-primary text-xs">chevron_right</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:gap-3 transition-all group-hover:underline">
                    Conocer más
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        {{-- Comunidades --}}
        <div class="group bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-lg transition-all duration-300">
            <div class="h-2 bg-secondary w-full"></div>
            <div class="p-8">
                <div class="flex items-start gap-6 mb-6">
                    <div class="bg-secondary/10 p-4 rounded-xl shrink-0 group-hover:bg-secondary/20 transition-colors">
                        <span class="material-symbols-outlined text-secondary text-3xl">groups</span>
                    </div>
                    <div>
                        <p class="text-secondary text-xs font-bold uppercase tracking-wider mb-1">04 / Comunidades</p>
                        <h2 class="text-2xl font-black text-text-dark dark:text-white leading-tight">Comunidades de Base</h2>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                    Las Comunidades Eclesiales de Base son el corazón vivo de nuestra parroquia. Pequeños grupos que se reúnen en los barrios para rezar, compartir la Palabra y apoyarse mutuamente.
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach(['Reuniones semanales en sectores','Lectura compartida del Evangelio','Acompañamiento fraterno','Coordinación con el equipo parroquial'] as $item)
                    <li class="flex items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                        <span class="material-symbols-outlined text-secondary text-xs">chevron_right</span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 text-secondary font-bold text-sm hover:gap-3 transition-all group-hover:underline">
                    Conocer más
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- CTA Banner --}}
<div class="w-full bg-background-dark relative overflow-hidden py-20 px-4 sm:px-6 lg:px-8">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full bg-primary blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-64 h-64 rounded-full bg-secondary blur-3xl"></div>
    </div>
    <div class="relative z-10 max-w-[960px] mx-auto text-center flex flex-col items-center gap-6">
        <h2 class="text-white text-3xl md:text-4xl font-black">Únase a nuestra comunidad</h2>
        <p class="text-gray-300 text-lg max-w-xl">Encontrará un lugar donde crecer en la fe y servir al prójimo.</p>
        <div class="flex gap-4 flex-wrap justify-center">
            <a href="{{ route('pastorales') }}" class="px-6 py-3 bg-primary hover:bg-yellow-500 text-black font-bold rounded-lg transition-colors">Ver Pastorales</a>
            <a href="{{ route('contacto') }}" class="px-6 py-3 border border-white/20 hover:bg-white/10 text-white font-bold rounded-lg transition-colors">Contactarnos</a>
        </div>
    </div>
</div>
@endsection
