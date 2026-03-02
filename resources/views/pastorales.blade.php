<x-layouts.app title="Pastorales | Parroquia Cristo Resucitado" description="Conoce los grupos pastorales de nuestra comunidad y únete a la misión evangelizadora.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="Nuestras <span class='text-primary'>Pastorales</span>"
        subtitle="Diversos grupos comprometidos con la misión evangelizadora de la Iglesia. Encuentra tu lugar para servir y crecer en la fe."
        image="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=1920&q=80"
        size="md"
    />

    {{-- Pastorals Grid --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Grupos de Servicio"
                title="Pastorales Activas"
                description="Cada pastoral tiene una misión específica dentro de nuestra comunidad. Te invitamos a conocerlas y participar."
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Cáritas --}}
                <article class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=600&q=80" 
                             alt="Cáritas Parroquial" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">volunteer_activism</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Cáritas Parroquial</h3>
                        <p class="text-text-muted mb-4">
                            Servicio a los más necesitados de nuestra comunidad a través de ayuda alimentaria, medicinas y acompañamiento.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-text-muted mb-4">
                            <span class="inline-flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">schedule</span>
                                Sábados 9:00 AM
                            </span>
                        </div>
                        <a href="{{ route('contacto') }}" class="btn-outline w-full justify-center">
                            Unirse
                        </a>
                    </div>
                </article>

                {{-- Pastoral Juvenil --}}
                <article class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&q=80" 
                             alt="Pastoral Juvenil" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">diversity_3</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Pastoral Juvenil</h3>
                        <p class="text-text-muted mb-4">
                            Espacio para jóvenes de 15 a 30 años que buscan crecer en su fe y compartir con otros jóvenes cristianos.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-text-muted mb-4">
                            <span class="inline-flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">schedule</span>
                                Viernes 7:00 PM
                            </span>
                        </div>
                        <a href="{{ route('contacto') }}" class="btn-outline w-full justify-center">
                            Unirse
                        </a>
                    </div>
                </article>

                {{-- Catequesis --}}
                <article class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&q=80" 
                             alt="Catequesis" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">auto_stories</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Catequesis</h3>
                        <p class="text-text-muted mb-4">
                            Formación en la fe para niños, jóvenes y adultos que se preparan para recibir los sacramentos.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-text-muted mb-4">
                            <span class="inline-flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">schedule</span>
                                Sábados 2:00 PM
                            </span>
                        </div>
                        <a href="{{ route('contacto') }}" class="btn-outline w-full justify-center">
                            Unirse
                        </a>
                    </div>
                </article>

                {{-- Coro --}}
                <article class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=600&q=80" 
                             alt="Coro Parroquial" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">music_note</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Coro Parroquial</h3>
                        <p class="text-text-muted mb-4">
                            Ministerio de música que anima las celebraciones litúrgicas con cantos y alabanzas al Señor.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-text-muted mb-4">
                            <span class="inline-flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">schedule</span>
                                Miércoles 7:00 PM
                            </span>
                        </div>
                        <a href="{{ route('contacto') }}" class="btn-outline w-full justify-center">
                            Unirse
                        </a>
                    </div>
                </article>

                {{-- Ministros --}}
                <article class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=600&q=80" 
                             alt="Ministros de la Eucaristía" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">church</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Ministros Extraordinarios</h3>
                        <p class="text-text-muted mb-4">
                            Laicos dedicados a llevar la Comunión a enfermos y ancianos que no pueden asistir a misa.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-text-muted mb-4">
                            <span class="inline-flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">schedule</span>
                                Domingos después de misa
                            </span>
                        </div>
                        <a href="{{ route('contacto') }}" class="btn-outline w-full justify-center">
                            Unirse
                        </a>
                    </div>
                </article>

                {{-- Pastoral Familiar --}}
                <article class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?w=600&q=80" 
                             alt="Pastoral Familiar" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">family_restroom</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Pastoral Familiar</h3>
                        <p class="text-text-muted mb-4">
                            Acompañamiento a matrimonios y familias para fortalecer los vínculos a la luz del Evangelio.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-text-muted mb-4">
                            <span class="inline-flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">schedule</span>
                                Sábados 4:00 PM
                            </span>
                        </div>
                        <a href="{{ route('contacto') }}" class="btn-outline w-full justify-center">
                            Unirse
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-section 
        variant="gradient"
        title="¿Listo para Servir?"
        description="Contáctanos para saber más sobre cómo puedes participar en nuestras pastorales."
        cta-text="Contáctanos"
        cta-url="{{ route('contacto') }}"
    />

</x-layouts.app>
