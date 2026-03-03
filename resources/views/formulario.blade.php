<x-layouts.app title="{{ $formulario->titulo }} | Parroquia Cristo Resucitado" description="{{ $formulario->descripcion }}">

    {{-- ═══════════════════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[280px] sm:h-[340px] flex items-center justify-center overflow-hidden bg-gradient-to-br from-primary/90 to-secondary/80">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent"></div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-secondary/80 rounded-full">Formulario</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                {{ $formulario->titulo }}
            </h1>
            @if($formulario->descripcion)
                <p class="mt-3 text-white/80 text-lg max-w-2xl mx-auto">{{ $formulario->descripcion }}</p>
            @endif
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         FORMULARIO DINÁMICO
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-16 sm:py-20">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Mensaje de éxito --}}
            @if(session('success'))
                <div class="mb-8 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-xl text-green-700 dark:text-green-300 text-sm font-medium flex items-center gap-3">
                    <span class="material-symbols-outlined text-green-500">check_circle</span>
                    {{ session('success') }}
                </div>
            @endif

            {{-- Errores de validación --}}
            @if($errors->any())
                <div class="mb-8 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl text-red-700 dark:text-red-300 text-sm">
                    <div class="flex items-center gap-2 font-bold mb-2">
                        <span class="material-symbols-outlined text-red-500">error</span>
                        Por favor corrija los siguientes errores:
                    </div>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('formulario.store', $formulario->slug) }}" method="POST" class="space-y-6">
                @csrf

                @foreach($formulario->campos as $campo)
                    <div>
                        <label for="campo_{{ $campo['nombre'] }}" class="block text-sm font-semibold text-text-dark dark:text-text-light mb-2">
                            {{ $campo['etiqueta'] }}
                            @if(!empty($campo['requerido']))
                                <span class="text-red-500">*</span>
                            @endif
                        </label>

                        @switch($campo['tipo'] ?? 'texto')
                            @case('textarea')
                                <textarea
                                    id="campo_{{ $campo['nombre'] }}"
                                    name="{{ $campo['nombre'] }}"
                                    rows="4"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    {{ !empty($campo['requerido']) ? 'required' : '' }}
                                >{{ old($campo['nombre']) }}</textarea>
                                @break

                            @case('email')
                                <input
                                    type="email"
                                    id="campo_{{ $campo['nombre'] }}"
                                    name="{{ $campo['nombre'] }}"
                                    value="{{ old($campo['nombre']) }}"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    {{ !empty($campo['requerido']) ? 'required' : '' }}
                                >
                                @break

                            @case('numero')
                                <input
                                    type="number"
                                    id="campo_{{ $campo['nombre'] }}"
                                    name="{{ $campo['nombre'] }}"
                                    value="{{ old($campo['nombre']) }}"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    {{ !empty($campo['requerido']) ? 'required' : '' }}
                                >
                                @break

                            @case('select')
                                <select
                                    id="campo_{{ $campo['nombre'] }}"
                                    name="{{ $campo['nombre'] }}"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    {{ !empty($campo['requerido']) ? 'required' : '' }}
                                >
                                    <option value="">— Seleccione —</option>
                                    @foreach(explode(',', $campo['opciones'] ?? '') as $opcion)
                                        <option value="{{ trim($opcion) }}" {{ old($campo['nombre']) == trim($opcion) ? 'selected' : '' }}>
                                            {{ trim($opcion) }}
                                        </option>
                                    @endforeach
                                </select>
                                @break

                            @default
                                <input
                                    type="text"
                                    id="campo_{{ $campo['nombre'] }}"
                                    name="{{ $campo['nombre'] }}"
                                    value="{{ old($campo['nombre']) }}"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 dark:border-zinc-600 bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    {{ !empty($campo['requerido']) ? 'required' : '' }}
                                >
                        @endswitch

                        @error($campo['nombre'])
                            <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach

                <div class="pt-4">
                    <button type="submit" class="w-full py-3.5 px-6 bg-primary hover:bg-primary-hover text-white font-bold rounded-xl shadow-lg shadow-primary/25 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                        Enviar Formulario
                    </button>
                </div>
            </form>
        </div>
    </section>

</x-layouts.app>
