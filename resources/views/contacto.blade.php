<x-layouts.app title="Contacto | Parroquia Cristo Resucitado" description="Visítenos en nuestra parroquia o póngase en contacto con nosotros a través de nuestros canales digitales.">

    @php
        $horarios = ['lunes_viernes' => '8:00 AM - 5:00 PM', 'sabado' => '9:00 AM - 12:00 PM', 'domingo' => 'Cerrado'];
        $whatsapp = '50494306883';
        $telefono = '+504 9430-6883';
        $email = 'cristohnresucitado@gmail.com';
        $direccion = 'Colonia Loarque, Salida al Sur, Tegucigalpa, Honduras';
        $mapaSrc = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.5!2d-87.24!3d14.05!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDAzJzAwLjAiTiA4N8KwMTQnMjQuMCJX!5e0!3m2!1ses!2shn!4v1';
    @endphp

    {{-- ═══════════════════════════════════════════════════════
         1. HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[340px] sm:h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDOlhLyttzJxaZDSbptJZKeoJyNYirI_6HsbrWUsatwyn_rgpGw7faf4b8GCMhtV_BeEBsjUhnYu2gFevpyDhTswr_GoRH8X8_K1MdXqfR-ubfEpA0SjPvymNUvViehfwgzqKM8VRmaZ461M9kFSqf_YkadXP55tKzXfId5aFhud6y_WPZwVc0eGRFlN7bvG3Fv2rztCwJzuN9VKrO-UXNeWFTK5graHRw_xXLiembqVZt1G9KUt84KImTjmWL0F8tZSyiYpGsWigQ');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-secondary/80 rounded-full">Estamos para servirle</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                Contacto
            </h1>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         2. TARJETAS DE CONTACTO RÁPIDO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative z-10 -mt-16 pb-12">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                {{-- WhatsApp --}}
                <a href="https://wa.me/{{ $whatsapp }}?text=Hola%2C%20necesito%20informaci%C3%B3n." target="_blank" rel="noopener noreferrer"
                   class="group bg-white dark:bg-zinc-800 rounded-xl p-5 shadow-lg border border-gray-100 dark:border-zinc-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-green-500/10 flex items-center justify-center group-hover:bg-green-500 transition-colors">
                        <span class="material-symbols-outlined text-green-500 group-hover:text-white transition-colors">chat</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-white text-sm">WhatsApp</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $telefono }}</p>
                </a>

                {{-- Teléfono --}}
                <a href="tel:+{{ preg_replace('/[^0-9]/', '', $telefono) }}"
                   class="group bg-white dark:bg-zinc-800 rounded-xl p-5 shadow-lg border border-gray-100 dark:border-zinc-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors">
                        <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors">call</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-white text-sm">Teléfono</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $telefono }}</p>
                </a>

                {{-- Ubicación --}}
                <a href="https://maps.app.goo.gl/YourMapLink" target="_blank" rel="noopener noreferrer"
                   class="group bg-white dark:bg-zinc-800 rounded-xl p-5 shadow-lg border border-gray-100 dark:border-zinc-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-secondary/10 flex items-center justify-center group-hover:bg-secondary transition-colors">
                        <span class="material-symbols-outlined text-secondary group-hover:text-white transition-colors">location_on</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-white text-sm">Dirección</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ Str::limit($direccion, 40) }}</p>
                </a>

                {{-- Horario --}}
                <div class="group bg-white dark:bg-zinc-800 rounded-xl p-5 shadow-lg border border-gray-100 dark:border-zinc-700 text-center">
                    <div class="w-12 h-12 mx-auto mb-3 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-white text-sm">Horario Oficina</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $horarios['lunes_viernes'] ?? 'Lun-Vie 8AM-5PM' }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         3. CONTENIDO: FORMULARIO + INFO
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-12 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">

                {{-- Formulario de Contacto --}}
                <div class="lg:col-span-3">
                    <div class="bg-white dark:bg-zinc-800 rounded-2xl p-8 shadow-sm border border-gray-100 dark:border-zinc-700">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">edit_note</span>
                            </div>
                            <h2 class="text-2xl font-bold text-text-dark dark:text-white">Envíenos un mensaje</h2>
                        </div>
                        <form x-data="{ nombre: '', email: '', asunto: '', mensaje: '' }" 
                              @submit.prevent="window.open('https://wa.me/50494306883?text=' + encodeURIComponent('Hola, mi nombre es ' + nombre + ' (' + email + ').\nAsunto: ' + asunto + '\n\n' + mensaje), '_blank')"
                              class="space-y-5">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label for="nombre_completo" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Nombre Completo</label>
                                    <input type="text" id="nombre_completo" x-model="nombre" placeholder="Juan Pérez" required class="w-full rounded-lg border border-gray-200 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-900 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors" />
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Correo Electrónico</label>
                                    <input type="email" id="email" x-model="email" placeholder="juan@ejemplo.com" required class="w-full rounded-lg border border-gray-200 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-900 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors" />
                                </div>
                            </div>
                            <div>
                                <label for="asunto" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Asunto</label>
                                <input type="text" id="asunto" x-model="asunto" placeholder="Motivo de su mensaje" required class="w-full rounded-lg border border-gray-200 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-900 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors" />
                            </div>
                            <div>
                                <label for="mensaje" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Mensaje</label>
                                <textarea id="mensaje" x-model="mensaje" placeholder="Escriba su mensaje aquí..." required class="w-full rounded-lg border border-gray-200 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-900 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary min-h-[150px] p-4 resize-y outline-none transition-colors"></textarea>
                            </div>
                            <button type="submit" class="inline-flex items-center gap-2 px-8 py-3 bg-green-500 hover:bg-green-600 text-white font-bold rounded-lg transition-all shadow-md hover:shadow-lg">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                <span>Enviar por WhatsApp</span>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Panel de Información --}}
                <div class="lg:col-span-2 flex flex-col gap-6">

                    {{-- Horario de Oficina --}}
                    <div class="bg-white dark:bg-zinc-800 rounded-2xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                        <h3 class="text-lg font-bold text-text-dark dark:text-white mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">calendar_clock</span>
                            Horario de Oficina
                        </h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex justify-between text-gray-600 dark:text-gray-400 border-b border-dashed border-gray-200 dark:border-zinc-700 pb-2">
                                <span>Lunes - Viernes</span>
                                <span class="font-semibold text-text-dark dark:text-white">{{ $horarios['lunes_viernes'] ?? '8:00 AM - 5:00 PM' }}</span>
                            </li>
                            <li class="flex justify-between text-gray-600 dark:text-gray-400 border-b border-dashed border-gray-200 dark:border-zinc-700 pb-2">
                                <span>Sábados</span>
                                <span class="font-semibold text-text-dark dark:text-white">{{ $horarios['sabado'] ?? '9:00 AM - 12:00 PM' }}</span>
                            </li>
                            <li class="flex justify-between text-gray-600 dark:text-gray-400">
                                <span>Domingos</span>
                                <span class="font-semibold text-text-dark dark:text-white">{{ $horarios['domingo'] ?? 'Cerrado' }}</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Datos de Contacto --}}
                    <div class="bg-white dark:bg-zinc-800 rounded-2xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700 space-y-5">
                        <div class="flex gap-4 items-start">
                            <div class="bg-primary/10 p-2.5 rounded-full text-primary shrink-0">
                                <span class="material-symbols-outlined text-xl">location_on</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark dark:text-white text-sm">Dirección</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-sm mt-1 leading-relaxed">
                                    {{ $direccion }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="bg-primary/10 p-2.5 rounded-full text-primary shrink-0">
                                <span class="material-symbols-outlined text-xl">call</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark dark:text-white text-sm">Teléfono / WhatsApp</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">
                                    <a class="hover:text-primary transition-colors" href="tel:+{{ preg_replace('/[^0-9]/', '', $telefono) }}">{{ $telefono }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4 items-start">
                            <div class="bg-primary/10 p-2.5 rounded-full text-primary shrink-0">
                                <span class="material-symbols-outlined text-xl">mail</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-text-dark dark:text-white text-sm">Correo Electrónico</h4>
                                <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">
                                    <a class="hover:text-primary transition-colors" href="mailto:{{ $email }}">{{ $email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Redes Sociales --}}
                    <div class="bg-white dark:bg-zinc-800 rounded-2xl p-6 shadow-sm border border-gray-100 dark:border-zinc-700">
                        <h3 class="text-sm font-bold text-text-dark dark:text-white mb-3">Síguenos en redes</h3>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/ParroquiaCristoResucitado" class="h-11 w-11 flex items-center justify-center rounded-xl bg-gray-100 dark:bg-zinc-700 text-gray-500 dark:text-gray-400 hover:bg-[#1877F2] hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/parroquiacristoresucitado" class="h-11 w-11 flex items-center justify-center rounded-xl bg-gray-100 dark:bg-zinc-700 text-gray-500 dark:text-gray-400 hover:bg-gradient-to-br hover:from-[#f09433] hover:via-[#e6683c] hover:to-[#bc1888] hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            <a href="https://wa.me/{{ $whatsapp }}" target="_blank" rel="noopener noreferrer" class="h-11 w-11 flex items-center justify-center rounded-xl bg-gray-100 dark:bg-zinc-700 text-gray-500 dark:text-gray-400 hover:bg-[#25D366] hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         4. MAPA
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-12 bg-white dark:bg-zinc-900">
        <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-text-dark dark:text-white">Encuéntranos</h2>
                <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">{{ $direccion }}</p>
            </div>
            <div class="w-full h-80 rounded-2xl overflow-hidden shadow-lg border border-gray-200 dark:border-zinc-700">
                <iframe
                    src="{{ $mapaSrc }}"
                    class="w-full h-full border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         5. CTA PRE-FOOTER
    ═══════════════════════════════════════════════════════ --}}
    <section class="bg-secondary text-white py-16">
        <div class="max-w-[960px] mx-auto px-4 text-center flex flex-col items-center gap-6">
            <span class="material-symbols-outlined text-4xl text-white/30">church</span>
            <h2 class="text-3xl font-bold">¿Desea solicitar una Misa?</h2>
            <p class="text-white/70 max-w-lg">
                Puede realizar sus intenciones de misa o solicitar información sobre sacramentos directamente contactando a secretaría.
            </p>
            <div class="flex gap-4 flex-wrap justify-center">
                <a href="https://wa.me/50494306883?text=Hola%2C%20quiero%20solicitar%20una%20intenci%C3%B3n%20de%20misa." target="_blank" rel="noopener noreferrer"
                   class="px-8 py-3 bg-white text-secondary hover:bg-gray-100 font-bold rounded-lg transition-colors shadow-md inline-flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg">chat</span>
                    Contactar Secretaría
                </a>
                <a href="{{ route('home') }}" class="px-8 py-3 bg-transparent border-2 border-white/30 hover:bg-white/10 text-white font-bold rounded-lg transition-colors inline-flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg">schedule</span>
                    Ver Horarios de Misa
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
