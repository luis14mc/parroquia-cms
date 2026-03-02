<x-layouts.app title="Contacto | Parroquia Cristo Resucitado" description="Ponte en contacto con nosotros. Estamos aquí para ayudarte en tu camino de fe.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="<span class='text-primary'>Contáctanos</span>"
        subtitle="Estamos aquí para servirte. No dudes en comunicarte con nosotros para cualquier consulta o necesidad espiritual."
        size="sm"
    />

    {{-- Contact Section --}}
    <section class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Contact Info --}}
                <div class="lg:col-span-1">
                    <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-6">Información de Contacto</h2>
                    
                    <div class="space-y-6">
                        {{-- Address --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light mb-1">Dirección</h3>
                                <p class="text-text-muted">
                                    Colonia Kennedy, Bloque A,<br>
                                    Tegucigalpa, Honduras
                                </p>
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary">phone</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light mb-1">Teléfono</h3>
                                <a href="tel:+50422001234" class="text-text-muted hover:text-primary transition-colors">
                                    +504 2200-1234
                                </a>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary">mail</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light mb-1">Correo Electrónico</h3>
                                <a href="mailto:info@cristoresucitado.hn" class="text-text-muted hover:text-primary transition-colors">
                                    info@cristoresucitado.hn
                                </a>
                            </div>
                        </div>

                        {{-- Hours --}}
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-primary">schedule</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light mb-1">Horario de Oficina</h3>
                                <p class="text-text-muted">
                                    Lunes a Viernes: 8:00 AM - 6:00 PM<br>
                                    Sábados: 8:00 AM - 12:00 PM
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Social Links --}}
                    <div class="mt-8 pt-8 border-t border-border-light dark:border-border-dark">
                        <h3 class="font-semibold text-text-dark dark:text-text-light mb-4">Síguenos en Redes</h3>
                        <div class="flex items-center gap-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-primary/10 hover:bg-primary hover:text-white flex items-center justify-center transition-colors" aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-primary/10 hover:bg-primary hover:text-white flex items-center justify-center transition-colors" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-primary/10 hover:bg-primary hover:text-white flex items-center justify-center transition-colors" aria-label="YouTube">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-primary/10 hover:bg-primary hover:text-white flex items-center justify-center transition-colors" aria-label="WhatsApp">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:col-span-2">
                    <div class="card p-8">
                        <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-6">Envíanos un Mensaje</h2>
                        
                        <form class="space-y-6">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="nombre" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                        Nombre Completo *
                                    </label>
                                    <input type="text" 
                                           id="nombre" 
                                           name="nombre" 
                                           required
                                           class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                           placeholder="Tu nombre">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                        Correo Electrónico *
                                    </label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           required
                                           class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                           placeholder="tu@email.com">
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="telefono" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                        Teléfono
                                    </label>
                                    <input type="tel" 
                                           id="telefono" 
                                           name="telefono"
                                           class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                           placeholder="+504 0000-0000">
                                </div>
                                <div>
                                    <label for="asunto" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                        Asunto *
                                    </label>
                                    <select id="asunto" 
                                            name="asunto" 
                                            required
                                            class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                                        <option value="">Selecciona un asunto</option>
                                        <option value="informacion">Información General</option>
                                        <option value="sacramentos">Sacramentos</option>
                                        <option value="horarios">Horarios de Misa</option>
                                        <option value="pastoral">Unirse a una Pastoral</option>
                                        <option value="donacion">Donaciones</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="mensaje" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                    Mensaje *
                                </label>
                                <textarea id="mensaje" 
                                          name="mensaje" 
                                          rows="5" 
                                          required
                                          class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors resize-none"
                                          placeholder="¿En qué podemos ayudarte?"></textarea>
                            </div>

                            <button type="submit" class="btn-primary">
                                <span class="material-symbols-outlined">send</span>
                                Enviar Mensaje
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="h-96 bg-gray-200 dark:bg-zinc-800">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.7!2d-87.2!3d14.1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDA2JzAwLjAiTiA4N8KwMTInMDAuMCJX!5e0!3m2!1sen!2sus!4v1234567890"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Ubicación de la Parroquia Cristo Resucitado">
        </iframe>
    </section>

</x-layouts.app>
