<x-layouts.app title="Intenciones de Misa | Parroquia Cristo Resucitado" description="Solicita una intención de misa para tus seres queridos. Estamos aquí para acompañarte en oración.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="Intenciones de <span class='text-primary'>Misa</span>"
        subtitle="Solicita una intención de misa para tus seres queridos, ya sea en acción de gracias, por la salud, o en sufragio por los difuntos."
        image="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1920&q=80"
        size="md"
    />

    {{-- Intention Form Section --}}
    <section class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Info Side --}}
                <div class="lg:col-span-1">
                    <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-6">¿Qué es una Intención de Misa?</h2>
                    
                    <p class="text-text-muted mb-6">
                        Una intención de misa es una oración especial que se ofrece durante la celebración eucarística por una persona o intención particular.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-0.5">church</span>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light">Por los Vivos</h3>
                                <p class="text-sm text-text-muted">Salud, trabajo, familia, acción de gracias</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-0.5">candle</span>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light">Por los Difuntos</h3>
                                <p class="text-sm text-text-muted">En sufragio del eterno descanso</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-0.5">favorite</span>
                            <div>
                                <h3 class="font-semibold text-text-dark dark:text-text-light">Acción de Gracias</h3>
                                <p class="text-sm text-text-muted">Agradecimiento por favores recibidos</p>
                            </div>
                        </div>
                    </div>

                    <div class="card p-6 bg-primary/5 dark:bg-primary/10 border-primary/20">
                        <h3 class="font-semibold text-text-dark dark:text-text-light mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">info</span>
                            Información Importante
                        </h3>
                        <ul class="text-sm text-text-muted space-y-2">
                            <li>• Las intenciones se programan según disponibilidad</li>
                            <li>• Ofrenda sugerida: L. 100.00</li>
                            <li>• Puedes solicitar la fecha y horario de preferencia</li>
                            <li>• Te confirmaremos la fecha asignada</li>
                        </ul>
                    </div>
                </div>

                {{-- Form Side --}}
                <div class="lg:col-span-2">
                    <div class="card p-8">
                        <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-6">Solicitar Intención de Misa</h2>
                        
                        <form class="space-y-6">
                            @csrf
                            {{-- Type of Intention --}}
                            <div>
                                <label class="block text-sm font-medium text-text-dark dark:text-text-light mb-3">
                                    Tipo de Intención *
                                </label>
                                <div class="grid sm:grid-cols-3 gap-4">
                                    <label class="relative flex items-center justify-center p-4 rounded-lg border-2 border-border-light dark:border-border-dark cursor-pointer hover:border-primary transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                        <input type="radio" name="tipo" value="vivos" class="sr-only" required>
                                        <div class="text-center">
                                            <span class="material-symbols-outlined text-2xl text-primary mb-2 block">favorite</span>
                                            <span class="text-sm font-medium text-text-dark dark:text-text-light">Por los Vivos</span>
                                        </div>
                                    </label>
                                    <label class="relative flex items-center justify-center p-4 rounded-lg border-2 border-border-light dark:border-border-dark cursor-pointer hover:border-primary transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                        <input type="radio" name="tipo" value="difuntos" class="sr-only">
                                        <div class="text-center">
                                            <span class="material-symbols-outlined text-2xl text-primary mb-2 block">candle</span>
                                            <span class="text-sm font-medium text-text-dark dark:text-text-light">Por Difuntos</span>
                                        </div>
                                    </label>
                                    <label class="relative flex items-center justify-center p-4 rounded-lg border-2 border-border-light dark:border-border-dark cursor-pointer hover:border-primary transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                        <input type="radio" name="tipo" value="gracias" class="sr-only">
                                        <div class="text-center">
                                            <span class="material-symbols-outlined text-2xl text-primary mb-2 block">celebration</span>
                                            <span class="text-sm font-medium text-text-dark dark:text-text-light">Acción de Gracias</span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            {{-- Person Name --}}
                            <div>
                                <label for="persona" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                    Nombre de la Persona *
                                </label>
                                <input type="text" 
                                       id="persona" 
                                       name="persona" 
                                       required
                                       class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                       placeholder="Por quién se ofrece la misa">
                            </div>

                            {{-- Intention Details --}}
                            <div>
                                <label for="intencion" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                    Intención Específica
                                </label>
                                <textarea id="intencion" 
                                          name="intencion" 
                                          rows="3"
                                          class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors resize-none"
                                          placeholder="Describe brevemente la intención (opcional)"></textarea>
                            </div>

                            {{-- Date Preference --}}
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="fecha" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                        Fecha Preferida
                                    </label>
                                    <input type="date" 
                                           id="fecha" 
                                           name="fecha"
                                           min="{{ date('Y-m-d') }}"
                                           class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                                </div>
                                <div>
                                    <label for="horario" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                        Horario Preferido
                                    </label>
                                    <select id="horario" 
                                            name="horario"
                                            class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                                        <option value="">Sin preferencia</option>
                                        <option value="6:30">6:30 AM (Lun-Sáb)</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="18:00">6:00 PM</option>
                                        <option value="domingo-8">Domingo 8:00 AM</option>
                                        <option value="domingo-10">Domingo 10:00 AM</option>
                                        <option value="domingo-12">Domingo 12:00 PM</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Contact Info --}}
                            <div class="border-t border-border-light dark:border-border-dark pt-6">
                                <h3 class="font-semibold text-text-dark dark:text-text-light mb-4">Datos de Contacto</h3>
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div>
                                        <label for="nombre" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                            Tu Nombre *
                                        </label>
                                        <input type="text" 
                                               id="nombre" 
                                               name="nombre" 
                                               required
                                               class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                               placeholder="Tu nombre completo">
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
                                    <div class="sm:col-span-2">
                                        <label for="telefono" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                                            Teléfono
                                        </label>
                                        <input type="tel" 
                                               id="telefono" 
                                               name="telefono"
                                               class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                               placeholder="+504 0000-0000">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-primary">
                                <span class="material-symbols-outlined">send</span>
                                Enviar Solicitud
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-section 
        variant="primary"
        title="¿Prefieres solicitar tu intención en persona?"
        description="Visítanos en la oficina parroquial de lunes a sábado."
        cta-text="Ver Ubicación"
        cta-url="{{ route('contacto') }}"
    />

</x-layouts.app>
