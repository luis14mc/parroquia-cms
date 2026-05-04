<x-layouts.app title="Inscripciones | Parroquia Cristo Resucitado" description="Inscríbete en los sacramentos, catequesis y programas pastorales de nuestra parroquia">

    @php
        $programas = [
            'bautismo' => 'Bautismo',
            'primera_comunion' => 'Primera Comunión',
            'confirmacion' => 'Confirmación',
            'matrimonio' => 'Matrimonio',
            'catequesis_adultos' => 'Catequesis de Adultos',
            'monaguillos' => 'Monaguillos',
        ];
        $colores = [
            'bautismo' => 'blue-500',
            'primera_comunion' => 'amber-500',
            'confirmacion' => 'red-500',
            'matrimonio' => 'pink-500',
            'catequesis_adultos' => 'emerald-500',
            'monaguillos' => 'purple-500',
        ];
        $iconos = [
            'bautismo' => 'water_drop',
            'primera_comunion' => 'local_dining',
            'confirmacion' => 'local_fire_department',
            'matrimonio' => 'favorite',
            'catequesis_adultos' => 'menu_book',
            'monaguillos' => 'church',
        ];
        $descripciones = [
            'bautismo' => 'Sacramento de iniciación cristiana',
            'primera_comunion' => 'Preparación para recibir la Eucaristía',
            'confirmacion' => 'Fortalecimiento de la fe bautismal',
            'matrimonio' => 'Sacramento del amor conyugal',
            'catequesis_adultos' => 'Formación en la fe para adultos',
            'monaguillos' => 'Servicio al altar y la liturgia',
        ];
        $programaActual = request('programa', '');
    @endphp

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
                        <a href="{{ route('inscripciones') }}?programa={{ urlencode($key) }}"
                           class="flex items-center gap-4 p-4 rounded-xl border border-gray-100 dark:border-white/10 hover:border-primary/30 hover:bg-primary/5 transition-all group
                                  {{ $programaActual === $key ? 'border-primary bg-primary/5' : '' }}">
                            <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined">{{ $iconos[$key] }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4 class="font-bold text-text-dark dark:text-white text-sm group-hover:text-primary transition-colors">{{ $label }}</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 truncate">{{ $descripciones[$key] }}</p>
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

            <form x-data="{
                    programa: '{{ $programaActual }}',
                    nombre: '', telefono: '', email: '', fechaNac: '', padre: '', mensaje: ''
                  }"
                  @submit.prevent="window.open('https://wa.me/50494306883?text=' + encodeURIComponent('*Inscripción Parroquial*\n\nPrograma: ' + programa + '\nNombre: ' + nombre + '\nTeléfono: ' + telefono + '\nEmail: ' + email + '\nFecha Nac.: ' + fechaNac + (padre ? '\nPadre/Madre: ' + padre : '') + (mensaje ? '\nNotas: ' + mensaje : '')), '_blank')"
                  class="bg-white dark:bg-white/5 rounded-2xl shadow-[0_4px_20px_-2px_rgba(0,0,0,0.05)] p-6 md:p-10 border border-gray-100 dark:border-white/10 flex flex-col gap-6">
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
                            <select id="programa" x-model="programa" required class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white">
                                <option value="">Seleccione un programa...</option>
                                @foreach($programas as $key => $label)
                                    <option value="{{ $key }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Nombre Completo --}}
                    <div class="flex flex-col gap-2">
                        <label for="nombre_completo" class="text-sm font-semibold text-text-dark dark:text-white">Nombre Completo</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">person</span>
                            </div>
                            <input id="nombre_completo" x-model="nombre" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Ej. María González" type="text" required />
                        </div>
                    </div>

                    {{-- Teléfono --}}
                    <div class="flex flex-col gap-2">
                        <label for="telefono" class="text-sm font-semibold text-text-dark dark:text-white">Teléfono / WhatsApp</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">call</span>
                            </div>
                            <input id="telefono" x-model="telefono" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="+504 9999-9999" type="tel" />
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-semibold text-text-dark dark:text-white">Correo Electrónico</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                            </div>
                            <input id="email" x-model="email" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="correo@ejemplo.com" type="email" />
                        </div>
                    </div>

                    {{-- Fecha de Nacimiento --}}
                    <div class="flex flex-col gap-2">
                        <label for="fecha_nacimiento" class="text-sm font-semibold text-text-dark dark:text-white">Fecha de Nacimiento</label>
                        <input id="fecha_nacimiento" x-model="fechaNac" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white" type="date" />
                    </div>

                    {{-- Padre/Madre (para menores) --}}
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="nombre_padre_madre" class="text-sm font-semibold text-text-dark dark:text-white">Padre / Madre / Responsable <span class="font-normal text-gray-400">(si es menor de edad)</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">family_restroom</span>
                            </div>
                            <input id="nombre_padre_madre" x-model="padre" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Nombre del padre, madre o tutor" type="text" />
                        </div>
                    </div>

                    {{-- Mensaje --}}
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="mensaje" class="text-sm font-semibold text-text-dark dark:text-white">Notas adicionales <span class="font-normal text-gray-400">(Opcional)</span></label>
                        <textarea id="mensaje" x-model="mensaje" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-primary focus:border-transparent transition-all placeholder-gray-400 resize-none dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="¿Algún detalle que debamos saber?" rows="3"></textarea>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100 dark:border-white/10 flex flex-col md:flex-row gap-4 items-center justify-between">
                    <p class="text-xs text-gray-500 dark:text-gray-400 max-w-xs text-center md:text-left">
                        Le contactaremos para confirmar los requisitos y coordinar los siguientes pasos.
                    </p>
                    <button class="w-full md:w-auto flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg shadow-green-500/20 transform transition-all hover:-translate-y-0.5" type="submit">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        <span>Enviar por WhatsApp</span>
                    </button>
                </div>
            </form>
        </div>

    </div>

</x-layouts.app>
