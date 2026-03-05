<x-layouts.app title="Nuestra Parroquia | Cristo Resucitado" description="Conoce la historia, misión y visión de la Parroquia Cristo Resucitado en Tegucigalpa, Honduras.">

    {{-- ═══════════════════════════════════════════════════════
         1. HERO BANNER
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[420px] sm:h-[480px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/heroes/nosotros-hero.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-secondary/90 rounded-full">Conócenos</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                Nuestra Parroquia
            </h1>
            <p class="mt-4 text-lg sm:text-xl text-gray-200 font-light max-w-2xl mx-auto drop-shadow-sm">
                59 años siendo un hogar espiritual para las familias de Loarque y sus alrededores.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         2. RESEÑA HISTÓRICA
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-center">
                {{-- Imagen --}}
                <div class="lg:w-5/12 relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl ring-1 ring-black/5">
                        <img alt="Parroquia Cristo Resucitado - Vista exterior" 
                             class="w-full h-full object-cover" 
                             src="{{ asset('images/fondos/nosotros-reseña.jpg') }}" 
                             loading="lazy">
                    </div>
                    {{-- Accent decorativo --}}
                    <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-primary/20 rounded-2xl -z-10 hidden sm:block"></div>
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-secondary/20 rounded-full -z-10 hidden sm:block"></div>
                </div>

                {{-- Contenido --}}
                <div class="lg:w-7/12">
                    <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Nuestra Historia</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white mb-6 leading-tight">
                        Reseña Histórica
                    </h2>
                    <div class="space-y-4 text-gray-600 dark:text-gray-300 leading-relaxed prose dark:prose-invert max-w-none">
                        <p>La estructura de la Parroquia Cristo Resucitado fue construida el 28 de junio de 1981, donde se colocó la primera piedra por manos de Monseñor Héctor Enrique Santos, en presencia del Párroco Jorge Mathus Cáceres.</p>
                        <br>
                        <p> En 2015 se nombra como Párroco al P. Ricardo Flores y en Septiembre de 2017 se realiza un cambio y se le da la responsabilidad como Párroco al P. Javier Martínez quien funge como responsable de dicha parroquia en la actualidad.</p>
                        <br>
                        <p>La Parroquia comprende las comunidades de: Rio Grande Sur, Rio Grande Norte, Loarque Sur III Etapa, Puente de Loarque/Colinas de Loarque, Lomas de Loarque, San José de Loarque, Loarque Sur, Altos de Jardines de Loarque, Zona Puente de Loarque, Vista Hermosa Loarque, Nuevo Loarque, Mirador de Loarque, Aldea Yaguacire, Jardines de Loarque y Altos de Loarque. </p>
                    </div>
                    {{-- Datos destacados --}}
                    <div class="grid grid-cols-3 gap-6 mt-10">
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">59</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">Años de fe</p>
                        </div>
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">5</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">Comunidades</p>
                        </div>
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">6</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">Pastorales</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         3. MISIÓN Y VISIÓN
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-gray-50 dark:bg-[#1a160e]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Lo que nos guía</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Misión y Visión</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                {{-- Misión --}}
                <div class="bg-white dark:bg-[#211c11] rounded-2xl p-8 sm:p-10 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg transition-shadow relative overflow-hidden group">
                    {{-- Accent superior --}}
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-primary to-primary-dark"></div>
                    <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">rocket_launch</span>
                    </div>
                    <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-4">Nuestra Misión</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Siendo sensibles y compasivos como Jesús, identificaremos las necesidades de nuestros hermanos y las atenderemos a través de nuestros ministerios, grupos y movimientos parroquiales.
                    </p>
                </div>

                {{-- Visión --}}
                <div class="bg-white dark:bg-[#211c11] rounded-2xl p-8 sm:p-10 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg transition-shadow relative overflow-hidden group">
                    {{-- Accent superior --}}
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-secondary to-secondary-dark"></div>
                    <div class="w-16 h-16 rounded-2xl bg-secondary/10 flex items-center justify-center text-secondary mb-6 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">visibility</span>
                    </div>
                    <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-4">Nuestra Visión</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Ser una casa abierta y escuela de comunión, donde se anuncia y vive el evangelio de la misericordia para reflejar a Cristo Resucitado.
                    </p>
                </div>
            </div>

            {{-- Valores --}}
            <div class="mt-16 max-w-5xl mx-auto">
                <h3 class="text-xl font-bold text-text-dark dark:text-white text-center mb-10">Nuestros Valores</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    {{-- Valor: Caridad --}}
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">favorite</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">Caridad</span>
                    </div>
                    {{-- Valor: Fe --}}
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">church</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">Fe</span>
                    </div>
                    {{-- Valor: Comunidad --}}
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">diversity_3</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">Comunidad</span>
                    </div>
                    {{-- Valor: Servicio --}}
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">volunteer_activism</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">Servicio</span>
                    </div>
                    {{-- Valor: Formación --}}
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">auto_stories</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">Formación</span>
                    </div>
                    {{-- Valor: Fraternidad --}}
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">handshake</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">Fraternidad</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         5. CTA FINAL
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary/95 z-0"></div>
        <div class="absolute inset-0 z-0 bg-cover bg-center mix-blend-overlay opacity-20" style="background-image: url('{{ asset('images/heroes/hero_sacramentos.webp') }}');"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">Forma parte de nuestra familia</h2>
            <p class="text-white/90 text-lg sm:text-xl mb-10 leading-relaxed">
                Te invitamos a conocernos, participar en nuestras celebraciones y ser parte activa de la comunidad. ¡Eres bienvenido siempre!
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contacto') }}" class="w-full sm:w-auto px-8 py-4 bg-primary text-text-dark font-bold rounded-lg hover:bg-white hover:text-secondary transition-colors shadow-lg shadow-black/20">
                    Contáctanos
                </a>
                <a href="{{ route('home') }}#horarios" class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                    Ver Horarios de Misa
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
