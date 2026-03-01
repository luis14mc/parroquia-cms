@extends('layouts.app')
@section('title', 'Pastorales y Ministerios - Parroquia Cristo Resucitado')
@section('content')
{{-- Page header --}}
<div class="w-full bg-white dark:bg-background-dark py-14 px-4 sm:px-6 lg:px-8 border-b border-gray-100 dark:border-gray-800">
    <div class="max-w-[1200px] mx-auto">
        <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">Servicio y comunidad</p>
        <h1 class="text-text-dark dark:text-white text-4xl md:text-5xl font-black leading-tight mb-4">Pastorales y Ministerios</h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl leading-relaxed">
            Conozca los distintos grupos y ministerios que conforman la vida activa de nuestra comunidad parroquial.
        </p>
    </div>
</div>
{{-- Grid de pastorales --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto">
        @if($pastorales->isEmpty())
        <div class="text-center py-20 flex flex-col items-center gap-4">
            <span class="material-symbols-outlined text-muted text-6xl">groups</span>
            <p class="text-xl font-bold text-text-dark dark:text-white">Próximamente</p>
            <p class="text-gray-500 dark:text-gray-400">La información de pastorales estará disponible muy pronto.</p>
        </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($pastorales as $pastoral)
            <article class="group bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="aspect-[4/3] overflow-hidden bg-gradient-to-br from-primary/20 to-secondary/10">
                    @if($pastoral->imagen)
                    <img src="{{ asset('storage/'.$pastoral->imagen) }}" alt="{{ $pastoral->nombre }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <div class="w-full h-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary/40" style="font-size:5rem;">groups</span>
                    </div>
                    @endif
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold text-text-dark dark:text-white mb-3 leading-snug group-hover:text-primary transition-colors">
                        {{ $pastoral->nombre }}
                    </h2>
                    @if($pastoral->descripcion)
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-5 line-clamp-3">
                        {{ Str::limit($pastoral->descripcion, 140) }}
                    </p>
                    @endif
                    <a href="{{ route('pastoral', $pastoral->slug) }}"
                       class="inline-flex items-center gap-2 text-secondary font-bold text-sm hover:gap-3 transition-all">
                        Conocer más
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        @endif
    </div>
</div>
{{-- CTA --}}
<div class="w-full bg-background-dark text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[960px] mx-auto text-center flex flex-col items-center gap-6">
        <h2 class="text-3xl font-bold">¿Desea participar?</h2>
        <p class="text-gray-300 max-w-lg">Acérquese a la oficina parroquial o contáctenos para integrarse a cualquiera de nuestros grupos.</p>
        <a href="{{ route('contacto') }}" class="px-8 py-4 bg-primary hover:bg-yellow-500 text-black font-bold rounded-lg transition-colors">Contáctenos</a>
    </div>
</div>
@endsection
