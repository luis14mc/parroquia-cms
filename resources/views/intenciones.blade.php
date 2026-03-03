<x-layouts.app title="Intenciones de Misa | Parroquia Cristo Resucitado" description="Envíe sus peticiones para ser ofrecidas en el altar durante nuestras celebraciones eucarísticas">

    {{-- Hero Section --}}
    <div class="relative w-full bg-text-dark text-white overflow-hidden py-16 md:py-24">
        <div class="absolute inset-0 z-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black"></div>
        {{-- Cross Pattern Overlay --}}
        <div class="absolute inset-0 z-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="relative z-10 flex flex-col items-center justify-center px-4 md:px-10 text-center max-w-[1200px] mx-auto">
            <span class="mb-4 inline-flex items-center gap-1 rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white backdrop-blur-sm">
                <span class="material-symbols-outlined text-[16px]">edit_calendar</span>
                Solicitudes en línea
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tight mb-6 max-w-3xl">
                Intenciones de Misa
            </h1>
            <p class="text-gray-300 text-lg md:text-xl font-normal max-w-2xl leading-relaxed">
                Envíe sus peticiones para ser ofrecidas en el altar durante nuestras próximas celebraciones eucarísticas. Unimos nuestra fe a la suya.
            </p>
        </div>
    </div>

    {{-- Main Content Grid --}}
    <div class="max-w-[1200px] mx-auto px-4 py-12 md:py-16 grid grid-cols-1 lg:grid-cols-12 gap-12">

        @php
            $horariosLectura = json_decode($contenidos['intenciones.horarios_lectura'] ?? '{}', true) ?: [];
        @endphp

        {{-- Left Column: Information --}}
        <div class="lg:col-span-5 flex flex-col gap-8 order-2 lg:order-1">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-[0_4px_20px_-2px_rgba(0,0,0,0.05)]">
                <h3 class="text-text-dark text-2xl font-bold mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary">info</span>
                    ¿Cómo funciona?
                </h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Las intenciones recibidas serán presentadas durante las misas dominicales y celebraciones especiales. Por favor, considere los siguientes puntos:
                </p>
                <ul class="space-y-4">
                    <li class="flex gap-3 items-start">
                        <div class="mt-1 min-w-5 h-5 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                        </div>
                        <span class="text-sm text-gray-700">Envíe su petición con al menos 24 horas de antelación.</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <div class="mt-1 min-w-5 h-5 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                        </div>
                        <span class="text-sm text-gray-700">Se leerá un máximo de 3 nombres por familia para mantener la solemnidad.</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <div class="mt-1 min-w-5 h-5 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined text-[14px] font-bold">check</span>
                        </div>
                        <span class="text-sm text-gray-700">La ofrenda es voluntaria y ayuda al sostenimiento de la parroquia.</span>
                    </li>
                </ul>
            </div>

            <div class="bg-primary/10 rounded-2xl p-8 border border-primary/20">
                <h4 class="text-primary text-lg font-bold mb-2">Horarios de Lectura</h4>
                <div class="space-y-3">
                    <div class="flex justify-between items-center border-b border-primary/20 pb-2">
                        <span class="text-text-dark font-medium">Lunes a Sábado</span>
                        <span class="text-gray-600">{{ $horariosLectura['lunes_sabado'] ?? '6:00 PM' }}</span>
                    </div>
                    <div class="flex justify-between items-center border-b border-primary/20 pb-2">
                        <span class="text-text-dark font-medium">Domingos (Mañana)</span>
                        <span class="text-gray-600">{{ $horariosLectura['domingo_manana'] ?? '8:00 AM & 10:00 AM' }}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-text-dark font-medium">Domingos (Tarde)</span>
                        <span class="text-gray-600">{{ $horariosLectura['domingo_tarde'] ?? '5:00 PM' }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right Column: Form --}}
        <div class="lg:col-span-7 order-1 lg:order-2">

            {{-- Mensaje de éxito --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start gap-3 dark:bg-green-900/20 dark:border-green-800">
                    <span class="material-symbols-outlined text-green-600 dark:text-green-400 mt-0.5">check_circle</span>
                    <div>
                        <p class="text-green-800 dark:text-green-300 font-medium text-sm">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            {{-- Errores de validación --}}
            @if($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl dark:bg-red-900/20 dark:border-red-800">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-red-600 dark:text-red-400 mt-0.5">error</span>
                        <div>
                            <p class="text-red-800 dark:text-red-300 font-medium text-sm mb-2">Por favor corrija los siguientes errores:</p>
                            <ul class="list-disc list-inside text-sm text-red-700 dark:text-red-400 space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('intenciones.store') }}" method="POST" class="bg-white rounded-2xl shadow-[0_4px_20px_-2px_rgba(0,0,0,0.05)] p-6 md:p-10 border border-gray-100 flex flex-col gap-6 dark:bg-white/5 dark:border-white/10">
                @csrf
                <div>
                    <h2 class="text-2xl font-bold text-text-dark dark:text-white mb-2">Nueva Petición</h2>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Complete el formulario a continuación para enviar su intención.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Intention Type Selection --}}
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-text-dark dark:text-white mb-3">Tipo de Intención</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <label class="cursor-pointer group">
                                <input {{ old('tipo', 'salud') === 'salud' ? 'checked' : '' }} class="peer sr-only" name="tipo" type="radio" value="salud" />
                                <div class="flex flex-col items-center justify-center p-4 rounded-xl border-2 border-gray-100 bg-gray-50 hover:bg-white hover:border-gray-200 peer-checked:border-secondary peer-checked:bg-secondary/5 transition-all dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                                    <span class="material-symbols-outlined mb-2 text-gray-400 peer-checked:text-secondary">cardiology</span>
                                    <span class="text-sm font-medium text-gray-600 peer-checked:text-secondary dark:text-gray-300">Salud</span>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input {{ old('tipo') === 'difuntos' ? 'checked' : '' }} class="peer sr-only" name="tipo" type="radio" value="difuntos" />
                                <div class="flex flex-col items-center justify-center p-4 rounded-xl border-2 border-gray-100 bg-gray-50 hover:bg-white hover:border-gray-200 peer-checked:border-text-dark peer-checked:bg-gray-100 transition-all dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                                    <span class="material-symbols-outlined mb-2 text-gray-400 peer-checked:text-text-dark dark:peer-checked:text-white">filter_vintage</span>
                                    <span class="text-sm font-medium text-gray-600 peer-checked:text-text-dark dark:text-gray-300 dark:peer-checked:text-white">Difuntos</span>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input {{ old('tipo') === 'accion_gracias' ? 'checked' : '' }} class="peer sr-only" name="tipo" type="radio" value="accion_gracias" />
                                <div class="flex flex-col items-center justify-center p-4 rounded-xl border-2 border-gray-100 bg-gray-50 hover:bg-white hover:border-gray-200 peer-checked:border-primary peer-checked:bg-primary/5 transition-all dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                                    <span class="material-symbols-outlined mb-2 text-gray-400 peer-checked:text-primary">volunteer_activism</span>
                                    <span class="text-sm font-medium text-gray-600 peer-checked:text-primary dark:text-gray-300">Acción de Gracias</span>
                                </div>
                            </label>
                        </div>
                        @error('tipo')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Personal Details --}}
                    <div class="flex flex-col gap-2">
                        <label for="nombre_completo" class="text-sm font-semibold text-text-dark dark:text-white">Su Nombre Completo</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">person</span>
                            </div>
                            <input id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white @error('nombre_completo') border-red-500 @enderror" placeholder="Ej. María González" type="text" required />
                        </div>
                        @error('nombre_completo')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="telefono" class="text-sm font-semibold text-text-dark dark:text-white">Teléfono / WhatsApp</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">call</span>
                            </div>
                            <input id="telefono" name="telefono" value="{{ old('telefono') }}" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="+504 9999-9999" type="tel" />
                        </div>
                        @error('telefono')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="intencion" class="text-sm font-semibold text-text-dark dark:text-white">Nombre de la persona o intención</label>
                        <input id="intencion" name="intencion" value="{{ old('intencion') }}" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white @error('intencion') border-red-500 @enderror" placeholder="Escriba por quién o qué desea pedir..." type="text" required />
                        <p class="text-xs text-gray-500 dark:text-gray-400">Si es por difuntos, indique la fecha de aniversario si aplica.</p>
                        @error('intencion')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="fecha_deseada" class="text-sm font-semibold text-text-dark dark:text-white">Fecha deseada para la mención</label>
                        <input id="fecha_deseada" name="fecha_deseada" value="{{ old('fecha_deseada') }}" min="{{ date('Y-m-d') }}" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white @error('fecha_deseada') border-red-500 @enderror" type="date" required />
                        @error('fecha_deseada')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Sector --}}
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="sector_id" class="text-sm font-semibold text-text-dark dark:text-white">Sector / Comunidad</label>
                        <select id="sector_id" name="sector_id" required class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white @error('sector_id') border-red-500 @enderror">
                            <option value="">— Seleccione su sector —</option>
                            @foreach($sectores as $sector)
                                <option value="{{ $sector->id }}" {{ old('sector_id') == $sector->id ? 'selected' : '' }}>{{ $sector->nombre }}</option>
                            @endforeach
                        </select>
                        @error('sector_id')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="mensaje" class="text-sm font-semibold text-text-dark dark:text-white">Mensaje adicional (Opcional)</label>
                        <textarea id="mensaje" name="mensaje" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 resize-none dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Cualquier detalle extra que el padre deba saber..." rows="3">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100 dark:border-white/10 flex flex-col md:flex-row gap-4 items-center justify-between">
                    <p class="text-xs text-gray-500 dark:text-gray-400 max-w-xs text-center md:text-left">
                        Al enviar, usted acepta que la intención sea leída públicamente en la misa.
                    </p>
                    <button class="w-full md:w-auto flex items-center justify-center gap-2 bg-secondary hover:bg-secondary/90 text-white font-bold py-3 px-8 rounded-lg shadow-lg shadow-secondary/20 transform transition-all hover:-translate-y-0.5" type="submit">
                        <span>Enviar Intención</span>
                        <span class="material-symbols-outlined text-[20px]">send</span>
                    </button>
                </div>
            </form>
        </div>

    </div>

</x-layouts.app>
