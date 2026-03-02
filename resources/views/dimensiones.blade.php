<x-layouts.app title="Dimensiones | Parroquia Cristo Resucitado" description="Las dimensiones pastorales que guían nuestra vida parroquial: Liturgia, Formación, Comunión y Misión.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="<span class='text-primary'>Dimensiones</span> Pastorales"
        subtitle="Las cuatro dimensiones que guían y estructuran la vida de nuestra comunidad parroquial, en comunión con la Iglesia universal."
        image="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=1920&q=80"
        size="md"
    />

    {{-- Dimensions Grid --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-16">
                {{-- Liturgia --}}
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=800&q=80" 
                                 alt="Dimensión Litúrgica" 
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-primary/20 rounded-full -z-10"></div>
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
                            <span class="material-symbols-outlined text-lg">church</span>
                            Dimensión 1
                        </div>
                        <h2 class="text-3xl font-bold text-text-dark dark:text-text-light mb-4">Liturgia</h2>
                        <p class="text-text-muted mb-6">
                            La dimensión litúrgica es el corazón de nuestra vida parroquial. A través de la celebración de los sacramentos, 
                            especialmente la Eucaristía, nos encontramos con Cristo y somos alimentados para nuestra misión.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Celebración diaria de la Eucaristía</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Administración de los Sacramentos</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Adoración al Santísimo</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Liturgia de las Horas</span>
                            </li>
                        </ul>
                        <a href="{{ route('sacramentos') }}" class="btn-primary">
                            Ver Sacramentos
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>

                {{-- Formación --}}
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 text-secondary text-sm font-medium mb-4">
                            <span class="material-symbols-outlined text-lg">school</span>
                            Dimensión 2
                        </div>
                        <h2 class="text-3xl font-bold text-text-dark dark:text-text-light mb-4">Formación</h2>
                        <p class="text-text-muted mb-6">
                            La formación permanente es esencial para crecer en el conocimiento y amor de Dios. Ofrecemos diversos 
                            programas para todas las edades, desde catequesis infantil hasta formación de adultos.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Catequesis de iniciación cristiana</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Escuela de la Palabra</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Formación de agentes pastorales</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Retiros y ejercicios espirituales</span>
                            </li>
                        </ul>
                        <a href="{{ route('contacto') }}" class="btn-secondary">
                            Más Información
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80" 
                                 alt="Dimensión Formativa" 
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-secondary/20 rounded-full -z-10"></div>
                    </div>
                </div>

                {{-- Comunión --}}
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=800&q=80" 
                                 alt="Dimensión de Comunión" 
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-primary/20 rounded-full -z-10"></div>
                    </div>
                    <div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
                            <span class="material-symbols-outlined text-lg">groups</span>
                            Dimensión 3
                        </div>
                        <h2 class="text-3xl font-bold text-text-dark dark:text-text-light mb-4">Comunión</h2>
                        <p class="text-text-muted mb-6">
                            Somos una familia de fe que vive en comunión fraterna. Esta dimensión nos llama a fortalecer los lazos 
                            entre los miembros de nuestra comunidad y con toda la Iglesia.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Pequeñas comunidades de fe</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Encuentros y convivencias</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Pastoral del enfermo</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <span class="text-text-muted">Acogida a las familias</span>
                            </li>
                        </ul>
                        <a href="{{ route('pastorales') }}" class="btn-primary">
                            Ver Pastorales
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>

                {{-- Misión --}}
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-secondary/10 text-secondary text-sm font-medium mb-4">
                            <span class="material-symbols-outlined text-lg">public</span>
                            Dimensión 4
                        </div>
                        <h2 class="text-3xl font-bold text-text-dark dark:text-text-light mb-4">Misión</h2>
                        <p class="text-text-muted mb-6">
                            Somos enviados a anunciar el Evangelio con palabras y obras. La dimensión misionera nos impulsa a salir 
                            al encuentro de los alejados y a transformar la sociedad desde los valores del Reino.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Misiones parroquiales</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Cáritas y acción social</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Evangelización de los alejados</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-text-muted">Compromiso con la justicia social</span>
                            </li>
                        </ul>
                        <a href="{{ route('donaciones') }}" class="btn-secondary">
                            Apoyar la Misión
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                            <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=800&q=80" 
                                 alt="Dimensión Misionera" 
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                        </div>
                        <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-secondary/20 rounded-full -z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-section 
        variant="primary"
        title="Vive las Dimensiones en Comunidad"
        description="Únete a nuestra parroquia y participa activamente en la vida de la Iglesia."
        cta-text="Contáctanos"
        cta-url="{{ route('contacto') }}"
    />

</x-layouts.app>
