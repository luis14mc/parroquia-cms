<x-layouts.app title="Donaciones | Parroquia Cristo Resucitado" description="Apoya nuestra misión pastoral y obras de caridad. Tu generosidad hace posible nuestra labor.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="Apoya Nuestra <span class='text-primary'>Misión</span>"
        subtitle="Tu generosidad hace posible continuar con nuestra labor pastoral, obras de caridad y el mantenimiento de nuestra parroquia."
        image="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=1920&q=80"
        size="md"
    />

    {{-- Impact Section --}}
    <section class="py-16 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Tu Impacto"
                title="¿Cómo Usamos tu Donación?"
            />

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-3xl text-primary">volunteer_activism</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-text-light mb-2">Cáritas</h3>
                    <p class="text-sm text-text-muted">Ayuda a familias necesitadas con alimentos y medicinas</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-3xl text-primary">home_repair_service</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-text-light mb-2">Mantenimiento</h3>
                    <p class="text-sm text-text-muted">Conservación y mejoras del templo parroquial</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-3xl text-primary">school</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-text-light mb-2">Formación</h3>
                    <p class="text-sm text-text-muted">Programas de catequesis y formación en la fe</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-3xl text-primary">diversity_3</span>
                    </div>
                    <h3 class="font-bold text-text-dark dark:text-text-light mb-2">Pastorales</h3>
                    <p class="text-sm text-text-muted">Apoyo a los diferentes grupos pastorales</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Donation Options --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Formas de Donar"
                title="Elige tu Método de Donación"
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Online Donation --}}
                <div class="card p-8 border-t-4 border-primary">
                    <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl text-primary">credit_card</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-4">Donación en Línea</h3>
                    <p class="text-text-muted mb-6">
                        Realiza tu donación de forma segura con tarjeta de crédito o débito.
                    </p>
                    <a href="#form-donacion" class="btn-primary w-full justify-center">
                        Donar Ahora
                    </a>
                </div>

                {{-- Bank Transfer --}}
                <div class="card p-8 border-t-4 border-secondary">
                    <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl text-secondary">account_balance</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-4">Transferencia Bancaria</h3>
                    <p class="text-text-muted mb-4">
                        Realiza una transferencia a nuestra cuenta bancaria:
                    </p>
                    <div class="bg-background-light dark:bg-zinc-800 rounded-lg p-4 text-sm">
                        <p class="text-text-muted"><strong class="text-text-dark dark:text-text-light">Banco:</strong> Banco Atlántida</p>
                        <p class="text-text-muted"><strong class="text-text-dark dark:text-text-light">Cuenta:</strong> 123-456789-0</p>
                        <p class="text-text-muted"><strong class="text-text-dark dark:text-text-light">Nombre:</strong> Parroquia Cristo Resucitado</p>
                    </div>
                </div>

                {{-- In Person --}}
                <div class="card p-8 border-t-4 border-primary md:col-span-2 lg:col-span-1">
                    <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl text-primary">storefront</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-4">En Persona</h3>
                    <p class="text-text-muted mb-4">
                        Visítanos en la oficina parroquial o deposita tu donación en los cestillos durante la misa.
                    </p>
                    <div class="bg-background-light dark:bg-zinc-800 rounded-lg p-4 text-sm">
                        <p class="text-text-muted"><strong class="text-text-dark dark:text-text-light">Horario:</strong></p>
                        <p class="text-text-muted">Lun-Vie: 8:00 AM - 6:00 PM</p>
                        <p class="text-text-muted">Sábados: 8:00 AM - 12:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Online Donation Form --}}
    <section id="form-donacion" class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="card p-8 lg:p-12">
                <div class="text-center mb-8">
                    <span class="material-symbols-outlined text-5xl text-primary mb-4">volunteer_activism</span>
                    <h2 class="text-2xl lg:text-3xl font-bold text-text-dark dark:text-text-light">Realizar Donación</h2>
                    <p class="text-text-muted mt-2">Tu aporte es muy valioso para nuestra comunidad</p>
                </div>

                <form class="space-y-6">
                    @csrf
                    {{-- Amount Selection --}}
                    <div>
                        <label class="block text-sm font-medium text-text-dark dark:text-text-light mb-3">
                            Selecciona un Monto
                        </label>
                        <div class="grid grid-cols-3 sm:grid-cols-6 gap-3">
                            @foreach([100, 200, 500, 1000, 2000, 5000] as $amount)
                                <label class="relative">
                                    <input type="radio" name="monto_preset" value="{{ $amount }}" class="sr-only peer">
                                    <div class="flex items-center justify-center p-3 rounded-lg border-2 border-border-light dark:border-border-dark cursor-pointer hover:border-primary transition-colors peer-checked:border-primary peer-checked:bg-primary/10 text-center">
                                        <span class="text-sm font-bold text-text-dark dark:text-text-light">L.{{ number_format($amount) }}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Custom Amount --}}
                    <div>
                        <label for="monto_custom" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                            O ingresa otro monto
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-muted font-medium">L.</span>
                            <input type="number" 
                                   id="monto_custom" 
                                   name="monto_custom"
                                   min="10"
                                   class="w-full pl-10 pr-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
                                   placeholder="0.00">
                        </div>
                    </div>

                    {{-- Donation Purpose --}}
                    <div>
                        <label for="proposito" class="block text-sm font-medium text-text-dark dark:text-text-light mb-2">
                            Destino de la Donación
                        </label>
                        <select id="proposito" 
                                name="proposito"
                                class="w-full px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                            <option value="general">Fondo General de la Parroquia</option>
                            <option value="caritas">Cáritas - Ayuda a Familias</option>
                            <option value="mantenimiento">Mantenimiento del Templo</option>
                            <option value="catequesis">Programa de Catequesis</option>
                            <option value="juventud">Pastoral Juvenil</option>
                        </select>
                    </div>

                    {{-- Personal Info --}}
                    <div class="border-t border-border-light dark:border-border-dark pt-6">
                        <h3 class="font-semibold text-text-dark dark:text-text-light mb-4">Información del Donante</h3>
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
                        <div class="mt-4">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" name="anonimo" class="w-5 h-5 rounded border-border-light dark:border-border-dark text-primary focus:ring-primary">
                                <span class="text-sm text-text-muted">Deseo que mi donación sea anónima</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn-primary w-full justify-center text-lg py-4">
                        <span class="material-symbols-outlined">lock</span>
                        Proceder al Pago Seguro
                    </button>

                    <p class="text-center text-xs text-text-muted">
                        <span class="material-symbols-outlined text-sm align-middle">verified_user</span>
                        Transacción 100% segura. Tus datos están protegidos.
                    </p>
                </form>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-16 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Testimonios"
                title="Lo que Dicen Nuestros Donantes"
            />

            <div class="grid md:grid-cols-3 gap-8">
                <blockquote class="card p-6">
                    <div class="flex items-center gap-1 text-primary mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <span class="material-symbols-outlined text-lg">star</span>
                        @endfor
                    </div>
                    <p class="text-text-muted italic mb-4">
                        "Es gratificante saber que mi pequeño aporte ayuda a tantas familias necesitadas a través de Cáritas."
                    </p>
                    <footer class="text-sm">
                        <strong class="text-text-dark dark:text-text-light">María Elena R.</strong>
                        <span class="text-text-muted"> - Feligresa desde 2015</span>
                    </footer>
                </blockquote>

                <blockquote class="card p-6">
                    <div class="flex items-center gap-1 text-primary mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <span class="material-symbols-outlined text-lg">star</span>
                        @endfor
                    </div>
                    <p class="text-text-muted italic mb-4">
                        "La parroquia ha sido fundamental en la formación de mis hijos. Donar es mi forma de agradecer."
                    </p>
                    <footer class="text-sm">
                        <strong class="text-text-dark dark:text-text-light">José Luis M.</strong>
                        <span class="text-text-muted"> - Feligrés desde 2010</span>
                    </footer>
                </blockquote>

                <blockquote class="card p-6">
                    <div class="flex items-center gap-1 text-primary mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <span class="material-symbols-outlined text-lg">star</span>
                        @endfor
                    </div>
                    <p class="text-text-muted italic mb-4">
                        "El proceso de donación en línea es muy fácil y seguro. Lo recomiendo completamente."
                    </p>
                    <footer class="text-sm">
                        <strong class="text-text-dark dark:text-text-light">Ana Patricia C.</strong>
                        <span class="text-text-muted"> - Feligresa desde 2018</span>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

</x-layouts.app>
