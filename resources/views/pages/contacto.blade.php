@extends('layouts.app')
@section('title', 'Contacto y Ubicación - Parroquia Cristo Resucitado')
@section('content')
{{-- Hero --}}
<div class="w-full bg-white dark:bg-background-dark py-12 px-4 sm:px-6 lg:px-8 border-b border-gray-100 dark:border-gray-800">
    <div class="max-w-[1200px] mx-auto">
        <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">Estamos para servirle</p>
        <h1 class="text-text-dark dark:text-white text-4xl md:text-5xl font-black leading-tight mb-4">Contacto y Ubicación</h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl leading-relaxed">
            Visítenos en nuestra parroquia para la oración y comunión, o póngase en contacto con nosotros a través de nuestros canales digitales.
        </p>
    </div>
</div>
{{-- Content Grid --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="max-w-[1200px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
        {{-- Formulario --}}
        <div class="lg:col-span-7">
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800">
                <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-6">Envíenos un mensaje</h3>
                <form class="flex flex-col gap-6" action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <label class="flex flex-col gap-2">
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-semibold">Nombre Completo</span>
                            <input type="text" name="nombre" placeholder="Juan Pérez"
                                   class="w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 transition-colors outline-none">
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-gray-700 dark:text-gray-300 text-sm font-semibold">Correo Electrónico</span>
                            <input type="email" name="email" placeholder="juan@ejemplo.com"
                                   class="w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 transition-colors outline-none">
                        </label>
                    </div>
                    <label class="flex flex-col gap-2">
                        <span class="text-gray-700 dark:text-gray-300 text-sm font-semibold">Asunto</span>
                        <input type="text" name="asunto" placeholder="Motivo de su mensaje"
                               class="w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 transition-colors outline-none">
                    </label>
                    <label class="flex flex-col gap-2">
                        <span class="text-gray-700 dark:text-gray-300 text-sm font-semibold">Mensaje</span>
                        <textarea name="mensaje" placeholder="Escriba su mensaje aquí..."
                                  class="w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary min-h-[160px] p-4 resize-y transition-colors outline-none"></textarea>
                    </label>
                    <button type="submit"
                            class="self-start px-8 py-3 bg-secondary hover:bg-red-800 text-white font-bold rounded-lg transition-all transform hover:scale-[1.02] shadow-md flex items-center gap-2">
                        <span>Enviar Mensaje</span>
                        <span class="material-symbols-outlined text-sm">send</span>
                    </button>
                </form>
            </div>
        </div>
        {{-- Info y Mapa --}}
        <div class="lg:col-span-5 flex flex-col gap-6">
            {{-- Horarios --}}
            <div class="relative bg-white dark:bg-surface-dark p-6 rounded-xl shadow-sm border-l-4 border-primary">
                <h3 class="text-xl font-bold text-text-dark dark:text-white mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">calendar_clock</span>
                    Horario de Oficina
                </h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between text-gray-600 dark:text-gray-400 border-b border-dashed border-gray-200 dark:border-gray-700 pb-2">
                        <span>Lunes - Viernes</span>
                        <span class="font-medium text-text-dark dark:text-white">8:00 AM – 5:00 PM</span>
                    </li>
                    <li class="flex justify-between text-gray-600 dark:text-gray-400 border-b border-dashed border-gray-200 dark:border-gray-700 pb-2">
                        <span>Sábados</span>
                        <span class="font-medium text-text-dark dark:text-white">9:00 AM – 12:00 MD</span>
                    </li>
                    <li class="flex justify-between text-gray-600 dark:text-gray-400">
                        <span>Domingos</span>
                        <span class="font-medium text-text-dark dark:text-white">Solo Misas</span>
                    </li>
                </ul>
            </div>
            {{-- Datos --}}
            <div class="bg-white dark:bg-surface-dark p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col gap-5">
                <div class="flex gap-4 items-start">
                    <div class="bg-gray-100 dark:bg-gray-800 p-2.5 rounded-full text-secondary shrink-0">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-text-dark dark:text-white">Dirección</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">Colonia Loarque, Salida al Sur<br>Tegucigalpa, Honduras</p>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="bg-gray-100 dark:bg-gray-800 p-2.5 rounded-full text-secondary shrink-0">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-text-dark dark:text-white">Teléfono</h4>
                        <a href="tel:+50494306883" class="text-gray-600 dark:text-gray-400 text-sm mt-1 hover:text-primary block">+504 9430-6883</a>
                    </div>
                </div>
                <div class="flex gap-4 items-start">
                    <div class="bg-gray-100 dark:bg-gray-800 p-2.5 rounded-full text-secondary shrink-0">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-text-dark dark:text-white">Misas</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">
                            Lun – Sáb: 7:00 AM y 6:00 PM<br>
                            Domingos: 8:00 AM, 10:00 AM y 5:00 PM
                        </p>
                    </div>
                </div>
                {{-- Redes sociales --}}
                <div class="pt-4 border-t border-gray-100 dark:border-gray-700">
                    <p class="text-xs font-semibold uppercase tracking-wider text-muted mb-3">Síguenos</p>
                    <div class="flex gap-3">
                        <a href="#" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 hover:bg-[#1877F2] hover:text-white transition-all duration-300">
                            <span class="material-symbols-outlined text-sm">public</span>
                        </a>
                        <a href="https://wa.me/50494306883" class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 hover:bg-[#25D366] hover:text-white transition-all duration-300">
                            <span class="material-symbols-outlined text-sm">chat</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Mapa placeholder --}}
            <div class="h-56 w-full rounded-xl overflow-hidden shadow-sm border border-gray-200 dark:border-gray-700 bg-gray-200 dark:bg-gray-800 flex items-center justify-center">
                <a href="https://maps.google.com/?q=Colonia+Loarque+Tegucigalpa+Honduras" target="_blank"
                   class="flex flex-col items-center gap-2 text-muted hover:text-primary transition-colors">
                    <span class="material-symbols-outlined text-4xl">map</span>
                    <span class="text-sm font-medium">Ver en Google Maps</span>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- CTA pre-footer --}}
<div class="w-full bg-background-dark text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[960px] mx-auto text-center flex flex-col items-center gap-6">
        <h2 class="text-3xl font-bold">¿Desea solicitar una Misa?</h2>
        <p class="text-gray-300 max-w-lg">Puede realizar sus intenciones de misa o solicitar información sobre sacramentos directamente.</p>
        <div class="flex gap-4 flex-wrap justify-center">
            <a href="{{ route('intenciones') }}" class="px-6 py-3 bg-secondary hover:bg-red-700 text-white font-bold rounded-lg transition-colors">Solicitar Intención</a>
            <a href="{{ route('sacramentos') }}" class="px-6 py-3 border border-white/20 hover:bg-white/10 text-white font-bold rounded-lg transition-colors">Ver Sacramentos</a>
        </div>
    </div>
</div>
@endsection
