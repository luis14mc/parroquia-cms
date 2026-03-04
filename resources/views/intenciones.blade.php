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
            $horariosLectura = [
                'lunes_sabado' => '6:00 PM',
                'domingo_manana' => '8:00 AM & 10:00 AM',
                'domingo_tarde' => '5:00 PM',
            ];
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

            <form x-data="{ tipo: 'salud', nombre: '', telefono: '', intencion: '', fecha: '', sector: '', mensaje: '' }"
                  @submit.prevent="window.open('https://wa.me/50494306883?text=' + encodeURIComponent('*Intención de Misa*\n\nTipo: ' + tipo + '\nNombre: ' + nombre + '\nTeléfono: ' + telefono + '\nIntención: ' + intencion + '\nFecha deseada: ' + fecha + '\nSector: ' + sector + (mensaje ? '\nMensaje: ' + mensaje : '')), '_blank')"
                  class="bg-white rounded-2xl shadow-[0_4px_20px_-2px_rgba(0,0,0,0.05)] p-6 md:p-10 border border-gray-100 flex flex-col gap-6 dark:bg-white/5 dark:border-white/10">
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
                                <input x-model="tipo" class="peer sr-only" name="tipo" type="radio" value="salud" checked />
                                <div class="flex flex-col items-center justify-center p-4 rounded-xl border-2 border-gray-100 bg-gray-50 hover:bg-white hover:border-gray-200 peer-checked:border-secondary peer-checked:bg-secondary/5 transition-all dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                                    <span class="material-symbols-outlined mb-2 text-gray-400 peer-checked:text-secondary">cardiology</span>
                                    <span class="text-sm font-medium text-gray-600 peer-checked:text-secondary dark:text-gray-300">Salud</span>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input x-model="tipo" class="peer sr-only" name="tipo" type="radio" value="difuntos" />
                                <div class="flex flex-col items-center justify-center p-4 rounded-xl border-2 border-gray-100 bg-gray-50 hover:bg-white hover:border-gray-200 peer-checked:border-text-dark peer-checked:bg-gray-100 transition-all dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                                    <span class="material-symbols-outlined mb-2 text-gray-400 peer-checked:text-text-dark dark:peer-checked:text-white">filter_vintage</span>
                                    <span class="text-sm font-medium text-gray-600 peer-checked:text-text-dark dark:text-gray-300 dark:peer-checked:text-white">Difuntos</span>
                                </div>
                            </label>
                            <label class="cursor-pointer group">
                                <input x-model="tipo" class="peer sr-only" name="tipo" type="radio" value="accion_gracias" />
                                <div class="flex flex-col items-center justify-center p-4 rounded-xl border-2 border-gray-100 bg-gray-50 hover:bg-white hover:border-gray-200 peer-checked:border-primary peer-checked:bg-primary/5 transition-all dark:border-white/10 dark:bg-white/5 dark:hover:bg-white/10">
                                    <span class="material-symbols-outlined mb-2 text-gray-400 peer-checked:text-primary">volunteer_activism</span>
                                    <span class="text-sm font-medium text-gray-600 peer-checked:text-primary dark:text-gray-300">Acción de Gracias</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    {{-- Personal Details --}}
                    <div class="flex flex-col gap-2">
                        <label for="nombre_completo" class="text-sm font-semibold text-text-dark dark:text-white">Su Nombre Completo</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">person</span>
                            </div>
                            <input id="nombre_completo" x-model="nombre" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Ej. María González" type="text" required />
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="telefono" class="text-sm font-semibold text-text-dark dark:text-white">Teléfono / WhatsApp</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                                <span class="material-symbols-outlined text-[20px]">call</span>
                            </div>
                            <input id="telefono" x-model="telefono" class="w-full pl-10 pr-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="+504 9999-9999" type="tel" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="intencion" class="text-sm font-semibold text-text-dark dark:text-white">Nombre de la persona o intención</label>
                        <input id="intencion" x-model="intencion" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Escriba por quién o qué desea pedir..." type="text" required />
                        <p class="text-xs text-gray-500 dark:text-gray-400">Si es por difuntos, indique la fecha de aniversario si aplica.</p>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="fecha_deseada" class="text-sm font-semibold text-text-dark dark:text-white">Fecha deseada para la mención</label>
                        <input id="fecha_deseada" x-model="fecha" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white" type="date" required />
                    </div>

                    {{-- Sector --}}
                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="sector_id" class="text-sm font-semibold text-text-dark dark:text-white">Sector / Comunidad</label>
                        <select id="sector_id" x-model="sector" required class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all dark:bg-white/5 dark:border-white/10 dark:text-white">
                            <option value="">— Seleccione su sector —</option>
                            <option value="Sector 1 - Centro">Sector 1 - Centro</option>
                            <option value="Sector 2 - Norte">Sector 2 - Norte</option>
                            <option value="Sector 3 - Sur">Sector 3 - Sur</option>
                            <option value="Sector 4 - Este">Sector 4 - Este</option>
                            <option value="Sector 5 - Oeste">Sector 5 - Oeste</option>
                            <option value="Visitante">Visitante</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <label for="mensaje" class="text-sm font-semibold text-text-dark dark:text-white">Mensaje adicional (Opcional)</label>
                        <textarea id="mensaje" x-model="mensaje" class="w-full px-4 py-3 rounded-lg border-gray-200 bg-gray-50 text-text-dark focus:ring-2 focus:ring-secondary focus:border-transparent transition-all placeholder-gray-400 resize-none dark:bg-white/5 dark:border-white/10 dark:text-white" placeholder="Cualquier detalle extra que el padre deba saber..." rows="3"></textarea>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100 dark:border-white/10 flex flex-col md:flex-row gap-4 items-center justify-between">
                    <p class="text-xs text-gray-500 dark:text-gray-400 max-w-xs text-center md:text-left">
                        Al enviar, usted acepta que la intención sea leída públicamente en la misa.
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
