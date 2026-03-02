<x-layouts.app title="Noticias | Parroquia Cristo Resucitado" description="Mantente informado de las últimas noticias y actividades de nuestra comunidad parroquial.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="<span class='text-primary'>Noticias</span> y Actualidad"
        subtitle="Mantente informado sobre las actividades, eventos y anuncios de nuestra comunidad parroquial."
        size="sm"
    />

    {{-- Featured News --}}
    <section class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Featured Article --}}
            <article class="card overflow-hidden mb-12">
                <div class="grid lg:grid-cols-2">
                    <div class="aspect-video lg:aspect-auto overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=1200&q=80" 
                             alt="Semana Santa 2025" 
                             class="w-full h-full object-cover"
                             loading="eager">
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <span class="inline-flex items-center gap-2 text-sm text-primary font-medium mb-4">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            Destacado
                        </span>
                        <time class="text-sm text-text-muted mb-2">15 de Marzo, 2025</time>
                        <h2 class="text-2xl lg:text-3xl font-bold text-text-dark dark:text-text-light mb-4">
                            Programa Completo de Semana Santa 2025
                        </h2>
                        <p class="text-text-muted mb-6 line-clamp-3">
                            Conoce el programa completo de actividades para vivir intensamente este tiempo de gracia. 
                            Desde el Domingo de Ramos hasta la Vigilia Pascual, te invitamos a participar en cada celebración.
                        </p>
                        <a href="#" class="btn-primary self-start">
                            Leer Artículo Completo
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>

            {{-- News Grid --}}
            <x-section-header 
                label="Últimas Publicaciones"
                title="Todas las Noticias"
            />

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-news-card 
                    image="https://images.unsplash.com/photo-1609234656388-0ff363383899?w=600&q=80"
                    category="Comunidad"
                    title="Jornada de Voluntariado Comunitario"
                    excerpt="Únete a nuestra próxima jornada de servicio para ayudar a las familias necesitadas de nuestra zona."
                    date="10 de Marzo, 2025"
                    url="#"
                />

                <x-news-card 
                    image="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=600&q=80"
                    category="Liturgia"
                    category-color="secondary"
                    title="Nuevo Horario de Misas de Cuaresma"
                    excerpt="Durante el tiempo de Cuaresma tendremos horarios especiales para las celebraciones litúrgicas."
                    date="5 de Marzo, 2025"
                    url="#"
                />

                <x-news-card 
                    image="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80"
                    category="Formación"
                    title="Inicio de Catequesis para Adultos"
                    excerpt="Abrimos inscripciones para el nuevo programa de formación en la fe para adultos que deseen recibir los sacramentos."
                    date="1 de Marzo, 2025"
                    url="#"
                />

                <x-news-card 
                    image="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&q=80"
                    category="Juventud"
                    title="Retiro de Jóvenes: 'Ven y Sígueme'"
                    excerpt="La Pastoral Juvenil organiza un retiro espiritual para jóvenes de 15 a 25 años durante el fin de semana."
                    date="25 de Febrero, 2025"
                    url="#"
                />

                <x-news-card 
                    image="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=600&q=80"
                    category="Cáritas"
                    category-color="secondary"
                    title="Campaña de Recolección de Alimentos"
                    excerpt="Cáritas Parroquial lanza su campaña mensual de recolección de alimentos no perecederos para familias necesitadas."
                    date="20 de Febrero, 2025"
                    url="#"
                />

                <x-news-card 
                    image="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=600&q=80"
                    category="Eventos"
                    title="Festival de la Familia 2025"
                    excerpt="Celebraremos el Festival de la Familia con actividades para todas las edades, comida, juegos y música."
                    date="15 de Febrero, 2025"
                    url="#"
                />
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center items-center gap-2 mt-12">
                <button class="w-10 h-10 rounded-lg border border-border-light dark:border-border-dark flex items-center justify-center text-text-muted hover:text-primary hover:border-primary transition-colors" disabled>
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 rounded-lg bg-primary text-white flex items-center justify-center">1</button>
                <button class="w-10 h-10 rounded-lg border border-border-light dark:border-border-dark flex items-center justify-center text-text-muted hover:text-primary hover:border-primary transition-colors">2</button>
                <button class="w-10 h-10 rounded-lg border border-border-light dark:border-border-dark flex items-center justify-center text-text-muted hover:text-primary hover:border-primary transition-colors">3</button>
                <button class="w-10 h-10 rounded-lg border border-border-light dark:border-border-dark flex items-center justify-center text-text-muted hover:text-primary hover:border-primary transition-colors">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </div>
    </section>

    {{-- Newsletter CTA --}}
    <section class="py-16 bg-background-light dark:bg-background-dark">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="material-symbols-outlined text-5xl text-primary mb-4">mail</span>
            <h2 class="text-2xl lg:text-3xl font-bold text-text-dark dark:text-text-light mb-4">
                Suscríbete a Nuestro Boletín
            </h2>
            <p class="text-text-muted mb-8">
                Recibe las últimas noticias, eventos y reflexiones directamente en tu correo electrónico.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                @csrf
                <input type="email" 
                       placeholder="Tu correo electrónico" 
                       class="flex-grow px-4 py-3 rounded-lg border border-border-light dark:border-border-dark bg-white dark:bg-zinc-800 text-text-dark dark:text-text-light focus:outline-none focus:ring-2 focus:ring-primary"
                       required>
                <button type="submit" class="btn-primary justify-center">
                    Suscribirse
                </button>
            </form>
        </div>
    </section>

</x-layouts.app>
