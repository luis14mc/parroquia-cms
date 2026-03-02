<x-layouts.app title="Inscripciones | Parroquia Cristo Resucitado" description="Inscríbete en los sacramentos, catequesis y programas pastorales de nuestra parroquia">

    {{-- Hero Section --}}
    <div class="relative w-full bg-text-dark text-white overflow-hidden py-16 md:py-24">
        <div class="absolute inset-0 z-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black"></div>
        <div class="absolute inset-0 z-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="relative z-10 flex flex-col items-center justify-center px-4 md:px-10 text-center max-w-[1200px] mx-auto">
            <span class="mb-4 inline-flex items-center gap-1 rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white backdrop-blur-sm">
                <span class="material-symbols-outlined text-[16px]">how_to_reg</span>
                Formulario en línea
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tight mb-6 max-w-3xl">
                Inscripciones
            </h1>
            <p class="text-gray-300 text-lg md:text-xl font-normal max-w-2xl leading-relaxed">
                Inscríbete en los distintos sacramentos, catequesis y programas pastorales de nuestra parroquia. Te acompañamos en cada etapa de tu camino de fe.
            </p>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="max-w-[1200px] mx-auto px-4 py-12 md:py-16 grid grid-cols-1 lg:grid-cols-12 gap-12">

        {{-- Left Column: Programs --}}
        <div class="lg:col-span-5 flex flex-col gap-6 order-2 lg:order-1">

            <div class="bg-white dark:bg-white/5 rounded-2xl p-8 border border-gray-100 dark:border-white/10 shadow-[0_4px_20px_-2px_rgba(0,0,0,0.05)]">
                <h3 class="text-text-dark dark:text-white text-2xl font-bold mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">info</span>
                    Programas Disponibles
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                    Selecciona el programa o sacramento al que deseas inscribirte. Te contactaremos para los siguientes pasos.
                </p>
                <div class="space-y-3">
                    @foreach($programas as $key => $label)
                        <a href="{{ route('inscripciones', ['programa' => $key]) }}"
                           class="flex items-center gap-4 p-4 rounded-xl border border-gray-100 dark:border-white/10 hover:border-primary/30 hover:bg-primary/5 transition-all group
                                  {{ request('programa') === $key ? 'border-primary bg-primary/5' : '' }}">
                            <div class="w-10 h-10 rounded-lg bg-{{ $colores[$key] ?? 'primary' }}/10 flex items-center justify-center text-{{ $colores[$key] ?? 'primary' }} shrink-0">
                                <span class="material-symbols-outlined">{{ $iconos[$key] ?? 'star' }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-text-dark dark:text-white text-sm group-hover:text-primary transition-colors">{{ $label }}</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 truncate">{{ $descripciones[$key] ?? '' }}</p>
                            </div>
                            <span class="material-symbols-outlined text-gray-300 group-hover:text-primary transition-colors text-[18px]">arrow_forward</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="bg-primary/10 dark:bg-primary/5 rounded-2xl p-8 border border-primary/20">
                <h4 class="text-primary text-lg font-bold mb-2">¿Necesitas ayuda?</h4>
                <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                    Si tienes dudas sobre los requisitos o el proceso de inscripción, no dudes en contactarnos.
                </p>
                <a href="{{ route('contacto') }}" class="inline-flex items-center gap-1 text-sm font-bold text-primary hover:text-secondary transition-colors">
                    Ir a Contacto
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        {{-- Right Column: Form --}}
        <div class="lg:col-span-7 order-1 lg:order-2">

            {{-- Mensaje de éxito --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start gap-3 dark:bg-green-900/20 dark:border-green-800">
                    <span class="material-symbols-outlined text-green-600 dark:text-green-400 mt-0.5">check_circle</span>
                    <p class="text-green-800 dark:text-green-300 font-medium text-sm">{{ session('success') }}</p>
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

            <form action="{{ route('inscripciones.store') }}" method="POST" class="bg-white dark:bg-white/5 rounded-2xl shadow-[0_4px_20px_-2px_rgba(0,0,0,0.05)] p-6 md:p-10 border border-gray-100 dark:border-white/10 flex flex-col gap-6">
                @csrf
                <div>
                    <h2 class="text-2xl font-bold text-text-dark dark:text-white mb-2">Formulario de Inscripción</h2>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Complete sus datos y seleccione el programa de su interés.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Programa --}}
                    <div class="md:col-span-2">
                        <label for="programa" class="block text-sm font-semibold text-text-dark dark:text-white mb-2">Programa / Sacramento</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">school</span>
                            </div>
                            <select id="programa" name="programa" required class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white @error('programa') border-red-500 @enderror">
                                <option value="">Seleccione un programa...</option>
                                @foreach($programas as $key => $label)
                                    <option value="{{ $key }}" {{ old('programa', request('programa')) === $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('programa')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nombre Completo --}}
                    <div class="flex flex-col gap-2">
                        <label for="nombre_completo" class="text-sm font-semibold text-text-dark dark:text-white">Nombre Completo</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">person</span>
                            </div>
                            <input id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white @error('nombre_completo') border-red-500 @enderror" placeholder="Ej. María González" type="text" required />
                        </div>
                        @error('nombre_completo')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Teléfono --}}
                    <div class="flex flex-col gap-2">
                        <label for="telefono" class="text-sm font-semibold text-text-dark dark:text-white">Teléfono / WhatsApp</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">call</span>
                            </div>
                            <input id="telefono" name="telefono" value="{{ old('telefono') }}" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="+504 9999-9999" type="tel" />
                        </div>
                        @error('telefono')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-semibold text-text-dark dark:text-white">Correo Electrónico</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                            <input id="email" name="email" value="{{ old('email') }}" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="correo@ejemplo.com" type="email" />
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Fecha de Nacimiento --}}
                    <div class="flex flex-col gap-2">
                        <label for="fecha_nacimiento" class="text-sm font-semibold text-text-dark dark:text-white">Fecha de Nacimiento</label>
                        <input id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" max="{{ date('Y-m-d') }}" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white" type="date" />
                        @error('fecha_nacimiento')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Padre/Madre (para menores) --}}
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="nombre_padre_madre" class="text-sm font-semibold text-text-dark dark:text-white">Padre / Madre / Responsable <span class="font-normal text-gray-400">(si es menor de edad)</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">family_restroom</span>
                            </div>
                            <input id="nombre_padre_madre" name="nombre_padre_madre" value="{{ old('nombre_padre_madre') }}" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Nombre del padre, madre o tutor" type="text" />
                        </div>
                        @error('nombre_padre_madre')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Mensaje --}}
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="mensaje" class="text-sm font-semibold text-text-dark dark:text-white">Notas adicionales <span class="font-normal text-gray-400">(Opcional)</span></label>
                        <textarea id="mensaje" name="mensaje" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 resize-none dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="¿Algún detalle que debamos saber?" rows="3">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100 dark:border-white/10 flex flex-col md:flex-row gap-4 items-center justify-between">
                    <p class="text-xs text-gray-500 dark:text-gray-400 max-w-xs text-center md:text-left">
                        Le contactaremos para confirmar los requisitos y coordinar los siguientes pasos.
                    </p>
                    <button class="w-full md:w-auto flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-white font-bold py-3 px-8 rounded-lg shadow-lg shadow-primary/20 transform transition-all hover:-translate-y-0.5" type="submit">
                        <span>Enviar Inscripción</span>
                        <span class="material-symbols-outlined text-[20px]">how_to_reg</span>
                    </button>
                </div>
            </form>
        </div>

    </div>

</x-layouts.app>
