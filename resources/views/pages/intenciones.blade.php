@extends('layouts.app')
@section('title', 'Intenciones de Misa - Parroquia Cristo Resucitado')
@section('content')
{{-- Hero Oscuro --}}
<div class="relative w-full min-h-[360px] flex items-center overflow-hidden bg-background-dark">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, #e3a822 0px, #e3a822 1px, transparent 0px, transparent 50%); background-size: 20px 20px;"></div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-background-dark via-background-dark/90 to-transparent"></div>
    <div class="relative z-10 max-w-[1200px] mx-auto w-full px-4 sm:px-6 lg:px-8 py-16">
        <p class="text-primary text-sm font-bold uppercase tracking-[0.2em] mb-4">Oración por los demás</p>
        <h1 class="text-white text-4xl md:text-5xl font-black leading-tight mb-6 max-w-xl">Intenciones de Misa</h1>
        <p class="text-gray-300 text-lg leading-relaxed max-w-lg">
            Solicite que el Párroco ofrezca la Santa Misa por una persona, familia o intención especial de su corazón.
        </p>
    </div>
</div>
{{-- Contenido principal --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
        {{-- Info + Horario --}}
        <div class="lg:col-span-5 flex flex-col gap-6">
            <div class="bg-white dark:bg-surface-dark rounded-2xl p-6 border-l-4 border-primary shadow-sm">
                <h3 class="text-xl font-bold text-text-dark dark:text-white mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">info</span>
                    ¿Qué es una intención de misa?
                </h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Es una petición especial que el sacerdote eleva a Dios durante la celebración de la Eucaristía. Se puede ofrecer por la salud, el descanso eterno, la acción de gracias u otras necesidades.
                </p>
            </div>
            {{-- Horario de Misas --}}
            <div class="bg-white dark:bg-surface-dark rounded-2xl p-6 shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-lg font-bold text-text-dark dark:text-white mb-5 flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary">calendar_today</span>
                    Horario de Misas
                </h3>
                <div class="space-y-4">
                    <div class="p-4 bg-background-light dark:bg-background-dark rounded-xl">
                        <p class="text-xs font-bold uppercase tracking-wider text-muted mb-2">Lunes a Sábado</p>
                        <div class="flex gap-3 flex-wrap">
                            <span class="px-3 py-1 bg-secondary/10 text-secondary text-sm font-bold rounded-full">7:00 AM</span>
                            <span class="px-3 py-1 bg-secondary/10 text-secondary text-sm font-bold rounded-full">6:00 PM</span>
                        </div>
                    </div>
                    <div class="p-4 bg-background-light dark:bg-background-dark rounded-xl">
                        <p class="text-xs font-bold uppercase tracking-wider text-muted mb-2">Domingos</p>
                        <div class="flex gap-3 flex-wrap">
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-bold rounded-full">8:00 AM</span>
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-bold rounded-full">10:00 AM</span>
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-bold rounded-full">5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Info adicional --}}
            <div class="bg-white dark:bg-surface-dark rounded-2xl p-6 shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-lg font-bold text-text-dark dark:text-white mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">help_outline</span>
                    Información importante
                </h3>
                <ul class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                    @foreach(['La intención se celebra según disponibilidad del calendario litúrgico','Puede solicitar misa por: Salud, Difuntos o Acción de Gracias','Nos comunicaremos para confirmar la fecha exacta','El ofertorio es libre y según posibilidades'] as $info)
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary text-xs mt-0.5 shrink-0">check_circle</span>
                        {{ $info }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- Formulario --}}
        <div class="lg:col-span-7">
            <div class="bg-white dark:bg-surface-dark rounded-2xl p-8 shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-2">Solicitar Intención</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm mb-8">Complete el formulario y nos pondremos en contacto para confirmar.</p>
                @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-700 rounded-xl flex items-start gap-3">
                    <span class="material-symbols-outlined text-green-600 shrink-0">check_circle</span>
                    <p class="text-green-700 dark:text-green-400 text-sm font-medium">{{ session('success') }}</p>
                </div>
                @endif
                <form action="{{ route('intenciones.store') }}" method="POST" class="flex flex-col gap-6">
                    @csrf
                    {{-- Tipo de intención --}}
                    <div>
                        <p class="text-sm font-bold text-text-dark dark:text-white mb-3">Tipo de Intención</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            @foreach(['enfermo' => 'Por Salud', 'difunto' => 'Por Difuntos', 'gratitud' => 'Acción de Gracias'] as $val => $label)
                            <label class="relative cursor-pointer">
                                <input type="radio" name="tipo" value="{{ $val }}" class="sr-only peer" {{ old('tipo') === $val ? 'checked' : ($val === 'enfermo' && !old('tipo') ? 'checked' : '') }}>
                                <div class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-gray-200 dark:border-gray-600 peer-checked:border-secondary peer-checked:bg-secondary/5 dark:peer-checked:bg-secondary/10 transition-all text-center hover:border-secondary/50">
                                    <span class="material-symbols-outlined text-gray-400 peer-checked:text-secondary text-2xl">
                                        @if($val === 'enfermo') health_and_safety
                                        @elseif($val === 'difunto') local_florist
                                        @else sentiment_very_satisfied
                                        @endif
                                    </span>
                                    <span class="text-sm font-semibold text-text-dark dark:text-white">{{ $label }}</span>
                                </div>
                            </label>
                            @endforeach
                        </div>
                        @error('tipo')<p class="mt-2 text-xs text-red-500">{{ $message }}</p>@enderror
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <label class="flex flex-col gap-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Su nombre (solicitante)</span>
                            <input type="text" name="solicitante" value="{{ old('solicitante') }}" placeholder="Juan Pérez"
                                   class="h-12 px-4 rounded-xl border @error('solicitante') border-red-400 @else border-gray-200 dark:border-gray-600 @enderror bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-secondary outline-none transition-colors">
                            @error('solicitante')<p class="text-xs text-red-500">{{ $message }}</p>@enderror
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Teléfono de contacto</span>
                            <input type="tel" name="telefono" value="{{ old('telefono') }}" placeholder="+504 9999-9999"
                                   class="h-12 px-4 rounded-xl border border-gray-200 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-secondary outline-none transition-colors">
                        </label>
                    </div>
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Nombre del beneficiario</span>
                        <input type="text" name="nombre_beneficiario" value="{{ old('nombre_beneficiario') }}" placeholder="Nombre de la persona por quien se ofrecerá la Misa"
                               class="h-12 px-4 rounded-xl border @error('nombre_beneficiario') border-red-400 @else border-gray-200 dark:border-gray-600 @enderror bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-secondary outline-none transition-colors">
                        @error('nombre_beneficiario')<p class="text-xs text-red-500">{{ $message }}</p>@enderror
                    </label>
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Fecha preferida para la Misa</span>
                        <input type="date" name="fecha_misa" value="{{ old('fecha_misa') }}" min="{{ date('Y-m-d') }}"
                               class="h-12 px-4 rounded-xl border @error('fecha_misa') border-red-400 @else border-gray-200 dark:border-gray-600 @enderror bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-secondary outline-none transition-colors">
                        @error('fecha_misa')<p class="text-xs text-red-500">{{ $message }}</p>@enderror
                    </label>
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Comentario adicional <span class="text-muted font-normal">(opcional)</span></span>
                        <textarea name="comentario" placeholder="Escriba cualquier detalle adicional sobre la intención..." rows="3"
                                  class="px-4 py-3 rounded-xl border border-gray-200 dark:border-gray-600 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-secondary outline-none resize-none transition-colors">{{ old('comentario') }}</textarea>
                    </label>
                    <button type="submit" class="w-full py-4 bg-secondary hover:bg-red-800 text-white font-bold rounded-xl transition-all transform hover:scale-[1.01] shadow-md text-lg flex items-center justify-center gap-2">
                        <span>Enviar Solicitud</span>
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
