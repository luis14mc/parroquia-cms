@extends('layouts.app')
@section('title', 'Donaciones - Parroquia Cristo Resucitado')
@section('content')
{{-- Hero --}}
<div class="relative w-full overflow-hidden bg-background-dark">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] rounded-full bg-primary blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full bg-secondary blur-3xl"></div>
    </div>
    <div class="relative z-10 max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 py-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <p class="text-primary text-sm font-bold uppercase tracking-[0.2em] mb-4">Tu apoyo es nuestra fuerza</p>
            <h1 class="text-white text-4xl md:text-5xl font-black leading-tight mb-6">Apoya a tu<br><span class="text-primary">Parroquia</span></h1>
            <p class="text-gray-300 text-lg leading-relaxed mb-8">
                Tu generosidad nos permite mantener los templos, apoyar a familias en necesidad y continuar con la formación cristiana de nuestra comunidad.
            </p>
            <div class="flex gap-4 flex-wrap">
                <a href="#donar-ahora" class="px-6 py-3 bg-primary hover:bg-yellow-500 text-black font-bold rounded-lg transition-colors">Donar Ahora</a>
                <a href="#transferencia" class="px-6 py-3 border border-white/20 hover:bg-white/10 text-white font-bold rounded-lg transition-colors">Transferencia Bancaria</a>
            </div>
        </div>
        <div class="flex justify-center lg:justify-end">
            <div class="relative w-64 h-64 lg:w-96 lg:h-96">
                <div class="absolute inset-0 bg-primary/20 rounded-full blur-2xl"></div>
                <div class="relative w-full h-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary" style="font-size:10rem;">volunteer_activism</span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Impacto --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto">
        <div class="text-center mb-12">
            <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">¿A dónde va tu donación?</p>
            <h2 class="text-text-dark dark:text-white text-3xl font-black">Tu impacto en la comunidad</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 group hover:shadow-lg transition-all">
                <div class="aspect-[4/3] bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary" style="font-size:5rem;">church</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-text-dark dark:text-white mb-2">Mantenimiento del Templo</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Conservar y mejorar los espacios sagrados donde la comunidad se reúne a orar y celebrar.</p>
                </div>
            </div>
            <div class="bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 group hover:shadow-lg transition-all">
                <div class="aspect-[4/3] bg-gradient-to-br from-secondary/20 to-secondary/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary" style="font-size:5rem;">favorite</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-text-dark dark:text-white mb-2">Caridad y Apoyo Social</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Atender a las familias más vulnerables con canastas básicas, medicamentos y atención pastoral.</p>
                </div>
            </div>
            <div class="bg-white dark:bg-surface-dark rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 group hover:shadow-lg transition-all">
                <div class="aspect-[4/3] bg-gradient-to-br from-primary/20 to-primary/5 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary" style="font-size:5rem;">school</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-text-dark dark:text-white mb-2">Formación Cristiana</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Financiar materiales, retiros y cursos de formación para niños, jóvenes y adultos en la fe.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Formulario de donación --}}
<div id="donar-ahora" class="w-full px-4 sm:px-6 lg:px-8 py-20 bg-white dark:bg-surface-dark scroll-mt-16">
    <div class="max-w-[700px] mx-auto">
        <div class="text-center mb-10">
            <p class="text-primary text-sm font-bold uppercase tracking-wider mb-2">Donación segura</p>
            <h2 class="text-text-dark dark:text-white text-3xl font-black">Realice su donación</h2>
        </div>
        <div class="bg-background-light dark:bg-background-dark rounded-2xl p-8 border border-gray-100 dark:border-gray-700 shadow-sm">
            {{-- Toggle --}}
            <div x-data="{ tipo: 'unica' }" class="flex flex-col gap-8">
                <div class="flex gap-2 p-1 bg-gray-100 dark:bg-gray-800 rounded-xl">
                    <button @click="tipo = 'unica'" :class="tipo === 'unica' ? 'bg-white dark:bg-gray-700 shadow text-text-dark dark:text-white' : 'text-muted'" class="flex-1 py-2.5 rounded-lg text-sm font-semibold transition-all">Donación Única</button>
                    <button @click="tipo = 'mensual'" :class="tipo === 'mensual' ? 'bg-white dark:bg-gray-700 shadow text-text-dark dark:text-white' : 'text-muted'" class="flex-1 py-2.5 rounded-lg text-sm font-semibold transition-all">Mensual</button>
                </div>
                {{-- Montos --}}
                <div x-data="{ monto: '300' }">
                    <p class="text-sm font-bold text-text-dark dark:text-white mb-3">Seleccione el monto (Lempiras)</p>
                    <div class="grid grid-cols-4 gap-3 mb-4">
                        @foreach(['100','300','500','1000'] as $m)
                        <button @click="monto = '{{ $m }}'"
                                :class="monto === '{{ $m }}' ? 'bg-secondary text-white border-secondary' : 'bg-white dark:bg-gray-800 text-text-dark dark:text-white border-gray-200 dark:border-gray-600 hover:border-secondary'"
                                class="py-3 rounded-xl border-2 font-bold text-sm transition-all">
                            L{{ $m }}
                        </button>
                        @endforeach
                    </div>
                    <div x-show="monto === 'otro'" class="mb-4">
                        <input type="number" placeholder="Ingrese monto en Lempiras" class="w-full h-12 px-4 rounded-xl border-2 border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary outline-none transition-colors">
                    </div>
                    <button @click="monto = 'otro'"
                            :class="monto === 'otro' ? 'bg-secondary text-white border-secondary' : 'bg-white dark:bg-gray-800 text-text-dark dark:text-white border-gray-200 dark:border-gray-600 hover:border-secondary'"
                            class="w-full py-3 rounded-xl border-2 font-bold text-sm transition-all mb-6">
                        Otro monto
                    </button>
                    {{-- Datos personales --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                        <input type="text" placeholder="Su nombre" class="h-12 px-4 rounded-xl border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary outline-none transition-colors">
                        <input type="email" placeholder="Su correo electrónico" class="h-12 px-4 rounded-xl border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary outline-none transition-colors">
                    </div>
                    <button type="button" class="w-full py-4 bg-secondary hover:bg-red-800 text-white font-bold rounded-xl transition-all transform hover:scale-[1.01] text-lg shadow-lg">
                        Donar Ahora
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Transferencia bancaria --}}
<div id="transferencia" class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark scroll-mt-16">
    <div class="max-w-[900px] mx-auto">
        <div class="text-center mb-10">
            <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">Transferencia bancaria</p>
            <h2 class="text-text-dark dark:text-white text-3xl font-black">Datos para transferencia</h2>
            <p class="text-gray-600 dark:text-gray-400 mt-3">Puede realizar su donación directamente a nuestras cuentas bancarias</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-surface-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-lg">
                        <span class="material-symbols-outlined text-blue-600">account_balance</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-white">Banco Atlántida</h3>
                </div>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between py-2 border-b border-dashed border-gray-100 dark:border-gray-700">
                        <span class="text-muted">Cuenta Corriente:</span>
                        <span class="font-mono font-bold text-text-dark dark:text-white">1234-5678-90</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-dashed border-gray-100 dark:border-gray-700">
                        <span class="text-muted">A nombre de:</span>
                        <span class="font-medium text-text-dark dark:text-white">Parroquia Cristo Resucitado</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-muted">RTN:</span>
                        <span class="font-mono font-bold text-text-dark dark:text-white">XXXX-XXXX-XXXXXX</span>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-surface-dark p-6 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-green-100 dark:bg-green-900/30 p-2 rounded-lg">
                        <span class="material-symbols-outlined text-green-600">account_balance</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-white">BAC Credomatic</h3>
                </div>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between py-2 border-b border-dashed border-gray-100 dark:border-gray-700">
                        <span class="text-muted">Cuenta de Ahorros:</span>
                        <span class="font-mono font-bold text-text-dark dark:text-white">0987-6543-21</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-dashed border-gray-100 dark:border-gray-700">
                        <span class="text-muted">A nombre de:</span>
                        <span class="font-medium text-text-dark dark:text-white">Parroquia Cristo Resucitado</span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-muted">RTN:</span>
                        <span class="font-mono font-bold text-text-dark dark:text-white">XXXX-XXXX-XXXXXX</span>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center text-sm text-muted mt-6">
            Después de realizar su transferencia, envíenos el comprobante vía WhatsApp al
            <a href="https://wa.me/50494306883" class="text-primary font-bold hover:underline">+504 9430-6883</a>
        </p>
    </div>
</div>
{{-- Cita bíblica --}}
<div class="w-full bg-background-dark text-white py-16 px-4 text-center">
    <div class="max-w-[700px] mx-auto">
        <span class="material-symbols-outlined text-primary text-4xl mb-4 block">format_quote</span>
        <blockquote class="text-xl md:text-2xl font-light text-gray-200 italic leading-relaxed mb-4">
            "Cada uno dé como propuso en su corazón, no con tristeza ni por obligación, porque Dios ama al dador alegre."
        </blockquote>
        <cite class="text-muted text-sm not-italic">2 Corintios 9:7</cite>
    </div>
</div>
@endsection
