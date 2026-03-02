<x-layouts.app title="Parroquia Cristo Resucitado | Inicio" description="Bienvenido a la Parroquia Cristo Resucitado - Comunidad de Fe y Esperanza en Honduras">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="Bienvenido a <span class='text-primary'>Cristo Resucitado</span>"
        subtitle="Una comunidad de fe comprometida con el amor, la esperanza y el servicio. Te invitamos a ser parte de nuestra familia parroquial."
        image="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1920&q=80"
        cta-text="Conoce Nuestros Horarios"
        cta-url="#horarios"
        secondary-cta-text="Ver Sacramentos"
        secondary-cta-url="{{ route('sacramentos') }}"
        size="xl"
    >
        <x-slot:badge>
            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm text-white text-sm">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                Próxima Misa: Domingo 10:00 AM
            </span>
        </x-slot:badge>
    </x-hero-section>

    {{-- Quick Info Bar --}}
    <x-quick-info-bar :items="[
        ['icon' => 'schedule', 'title' => 'Horarios de Misa', 'description' => 'Domingo: 8AM, 10AM, 12PM, 6PM'],
        ['icon' => 'calendar_month', 'title' => 'Confesiones', 'description' => 'Sábados de 4:00 PM a 5:30 PM'],
        ['icon' => 'groups', 'title' => 'Oficina Parroquial', 'description' => 'Lunes a Viernes: 8AM - 6PM'],
    ]" />

    {{-- Mensaje del Párroco --}}
    <section class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Image --}}
                <div class="relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=800&q=80" 
                             alt="Padre Juan Carlos" 
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-primary/20 rounded-full -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-secondary/20 rounded-full -z-10"></div>
                </div>

                {{-- Content --}}
                <div>
                    <x-section-header 
                        label="Mensaje del Párroco"
                        title="Un Saludo Fraterno"
                        :centered="false"
                    />

                    <blockquote class="text-lg text-text-muted leading-relaxed mb-6 italic border-l-4 border-primary pl-6">
                        "Les doy la más cordial bienvenida a nuestra parroquia. Aquí encontrarán un espacio de encuentro con Dios y con los hermanos. Los invito a participar activamente en nuestra comunidad de fe."
                    </blockquote>

                    <div class="mb-8">
                        <p class="font-bold text-text-dark dark:text-text-light">Padre Juan Carlos Martínez</p>
                        <p class="text-text-muted">Párroco de Cristo Resucitado</p>
                    </div>

                    <a href="{{ route('contacto') }}" class="btn-primary">
                        <span class="material-symbols-outlined">mail</span>
                        Contactar al Párroco
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Sacramentos Destacados --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Vida Sacramental"
                title="Nuestros Sacramentos"
                description="Los sacramentos son signos eficaces de la gracia, instituidos por Cristo y confiados a la Iglesia."
            />

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <x-feature-card 
                    icon="water_drop"
                    title="Bautismo"
                    description="El sacramento que nos hace hijos de Dios"
                    url="{{ route('sacramentos') }}#bautismo"
                />
                <x-feature-card 
                    icon="menu_book"
                    title="Primera Comunión"
                    description="Recibir por primera vez el Cuerpo de Cristo"
                    url="{{ route('sacramentos') }}#comunion"
                />
                <x-feature-card 
                    icon="spa"
                    title="Confirmación"
                    description="Fortalecimiento en la fe por el Espíritu"
                    url="{{ route('sacramentos') }}#confirmacion"
                />
                <x-feature-card 
                    icon="favorite"
                    title="Matrimonio"
                    description="Unión sagrada ante Dios"
                    url="{{ route('sacramentos') }}#matrimonio"
                />
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('sacramentos') }}" class="btn-secondary">
                    Ver Todos los Sacramentos
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Noticias y Eventos --}}
    <section class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Noticias --}}
                <div class="lg:col-span-2">
                    <x-section-header 
                        label="Actualidad"
                        title="Últimas Noticias"
                        :centered="false"
                    />

                    <div class="grid sm:grid-cols-2 gap-6">
                        <x-news-card 
                            image="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=600&q=80"
                            category="Liturgia"
                            title="Preparación para la Semana Santa 2025"
                            excerpt="Conoce el programa completo de actividades para vivir intensamente este tiempo de gracia."
                            date="15 de Marzo, 2025"
                            url="{{ route('noticias') }}"
                        />
                        <x-news-card 
                            image="https://images.unsplash.com/photo-1609234656388-0ff363383899?w=600&q=80"
                            category="Comunidad"
                            category-color="secondary"
                            title="Jornada de Voluntariado Comunitario"
                            excerpt="Únete a nuestra próxima jornada de servicio para ayudar a las familias necesitadas."
                            date="10 de Marzo, 2025"
                            url="{{ route('noticias') }}"
                        />
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('noticias') }}" class="btn-outline">
                            Ver Todas las Noticias
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>

                {{-- Próximos Eventos --}}
                <div>
                    <x-section-header 
                        label="Calendario"
                        title="Próximos Eventos"
                        :centered="false"
                    />

                    <div class="card divide-y divide-border-light dark:divide-border-dark">
                        <x-event-item 
                            icon="church"
                            title="Misa de Acción de Gracias"
                            date="20 Mar"
                            time="6:00 PM"
                            location="Templo Principal"
                        />
                        <x-event-item 
                            icon="groups"
                            title="Retiro de Cuaresma"
                            date="22-23 Mar"
                            time="8:00 AM"
                            location="Casa de Retiros"
                        />
                        <x-event-item 
                            icon="volunteer_activism"
                            title="Colecta Cáritas"
                            date="24 Mar"
                            time="Todo el día"
                        />
                        <x-event-item 
                            icon="family_restroom"
                            title="Encuentro de Familias"
                            date="28 Mar"
                            time="4:00 PM"
                            location="Salón Parroquial"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pastorales Grid --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Grupos Parroquiales"
                title="Nuestras Pastorales"
                description="Diversos grupos comprometidos con la misión evangelizadora de la Iglesia."
            />

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card 
                    icon="volunteer_activism"
                    title="Cáritas Parroquial"
                    description="Servicio a los más necesitados"
                    url="{{ route('pastorales') }}"
                />
                <x-feature-card 
                    icon="diversity_3"
                    title="Pastoral Juvenil"
                    description="Jóvenes comprometidos con Cristo"
                    url="{{ route('pastorales') }}"
                />
                <x-feature-card 
                    icon="auto_stories"
                    title="Catequesis"
                    description="Formación en la fe para todas las edades"
                    url="{{ route('pastorales') }}"
                />
                <x-feature-card 
                    icon="music_note"
                    title="Coro Parroquial"
                    description="Alabanza a través de la música"
                    url="{{ route('pastorales') }}"
                />
                <x-feature-card 
                    icon="church"
                    title="Ministros de la Eucaristía"
                    description="Servidores del altar"
                    url="{{ route('pastorales') }}"
                />
                <x-feature-card 
                    icon="family_restroom"
                    title="Pastoral Familiar"
                    description="Fortaleciendo el vínculo familiar"
                    url="{{ route('pastorales') }}"
                />
            </div>
        </div>
    </section>

    {{-- Horarios Section --}}
    <section id="horarios" class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Planifica tu Visita"
                title="Horarios de Misas"
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                {{-- Domingo --}}
                <div class="card p-6 border-t-4 border-primary">
                    <h3 class="font-bold text-lg text-text-dark dark:text-text-light mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">wb_sunny</span>
                        Domingos
                    </h3>
                    <ul class="space-y-3 text-text-muted">
                        <li class="flex justify-between">
                            <span>Misa de Aurora</span>
                            <span class="font-medium text-text-dark dark:text-text-light">6:00 AM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa Familiar</span>
                            <span class="font-medium text-text-dark dark:text-text-light">8:00 AM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa Solemne</span>
                            <span class="font-medium text-text-dark dark:text-text-light">10:00 AM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa del Mediodía</span>
                            <span class="font-medium text-text-dark dark:text-text-light">12:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa Vespertina</span>
                            <span class="font-medium text-text-dark dark:text-text-light">6:00 PM</span>
                        </li>
                    </ul>
                </div>

                {{-- Entre Semana --}}
                <div class="card p-6 border-t-4 border-secondary">
                    <h3 class="font-bold text-lg text-text-dark dark:text-text-light mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary">calendar_today</span>
                        Lunes a Viernes
                    </h3>
                    <ul class="space-y-3 text-text-muted">
                        <li class="flex justify-between">
                            <span>Misa Matutina</span>
                            <span class="font-medium text-text-dark dark:text-text-light">6:30 AM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa del Mediodía</span>
                            <span class="font-medium text-text-dark dark:text-text-light">12:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa Vespertina</span>
                            <span class="font-medium text-text-dark dark:text-text-light">6:00 PM</span>
                        </li>
                    </ul>
                </div>

                {{-- Sábado --}}
                <div class="card p-6 border-t-4 border-primary md:col-span-2 lg:col-span-1">
                    <h3 class="font-bold text-lg text-text-dark dark:text-text-light mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">weekend</span>
                        Sábados
                    </h3>
                    <ul class="space-y-3 text-text-muted">
                        <li class="flex justify-between">
                            <span>Misa Matutina</span>
                            <span class="font-medium text-text-dark dark:text-text-light">7:00 AM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Misa Vespertina</span>
                            <span class="font-medium text-text-dark dark:text-text-light">6:00 PM</span>
                        </li>
                        <li class="flex justify-between border-t border-border-light dark:border-border-dark pt-3 mt-3">
                            <span class="font-medium">Confesiones</span>
                            <span class="font-medium text-secondary">4:00 - 5:30 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Donation CTA --}}
    <x-cta-section 
        variant="gradient"
        title="Apoya Nuestra Misión"
        description="Tu generosidad nos permite continuar con nuestra labor pastoral y obras de caridad."
        cta-text="Hacer una Donación"
        cta-url="{{ route('donaciones') }}"
        secondary-cta-text="Conocer Más"
        secondary-cta-url="{{ route('contacto') }}"
    />

</x-layouts.app>
