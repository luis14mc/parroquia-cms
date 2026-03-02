<x-layouts.app title="Dimensiones Parroquiales | Parroquia Cristo Resucitado" description="La estructura pastoral que sostiene nuestra misión evangelizadora">

    {{-- Hero Section --}}
    <section class="relative w-full h-[400px] bg-background-dark flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-40 bg-[url('https://images.unsplash.com/photo-1548625361-98782012726f?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent z-10"></div>
        <div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-secondary/20 text-secondary border border-secondary/30 text-xs font-bold uppercase tracking-wider mb-4">Nuestra Organización</span>
            <h1 class="text-white text-5xl md:text-6xl font-black tracking-tight mb-6">Dimensiones Parroquiales</h1>
            <p class="text-gray-300 text-lg md:text-xl font-light max-w-2xl mx-auto">
                La estructura pastoral que sostiene nuestra misión evangelizadora, sirviendo a Dios y a la comunidad a través de cuatro pilares fundamentales.
            </p>
        </div>
    </section>

    {{-- Introduction --}}
    <section class="py-16 px-4 bg-white dark:bg-zinc-900">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-text-dark dark:text-white text-3xl font-bold mb-6">Pilares de Nuestra Fe</h2>
            <p class="text-gray-500 text-lg leading-relaxed">
                En la Parroquia Cristo Resucitado, organizamos nuestra vida pastoral en cuatro dimensiones que nos permiten abarcar todas las facetas de la vida cristiana: desde la celebración litúrgica hasta el servicio social, pasando por la misión evangelizadora y la construcción de comunidad.
            </p>
        </div>
    </section>

    {{-- Dimensions Grid --}}
    <section class="py-12 px-4 md:px-8 lg:px-16 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Card 1: Pascual --}}
                <div class="group bg-white dark:bg-zinc-900 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800 overflow-hidden flex flex-col h-full">
                    <div class="h-2 bg-primary w-full"></div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl">church</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3">Dimensión Pascual</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                            Centrada en la celebración de la fe, la liturgia y los sacramentos. Es el corazón orante de nuestra parroquia donde nos encontramos con Cristo vivo.
                        </p>
                        <div class="pt-4 mt-auto border-t border-gray-100 dark:border-gray-800">
                            <a class="inline-flex items-center text-secondary font-bold text-sm hover:text-primary transition-colors group/link" href="#">
                                Saber más
                                <span class="material-symbols-outlined text-sm ml-1 group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Card 2: Samaritana --}}
                <div class="group bg-white dark:bg-zinc-900 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800 overflow-hidden flex flex-col h-full">
                    <div class="h-2 bg-secondary w-full"></div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center text-secondary mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl">volunteer_activism</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3">Dimensión Samaritana</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                            El rostro misericordioso de la Iglesia. Dedicada al servicio de los más necesitados, la caridad organizada y la acción social transformadora.
                        </p>
                        <div class="pt-4 mt-auto border-t border-gray-100 dark:border-gray-800">
                            <a class="inline-flex items-center text-secondary font-bold text-sm hover:text-primary transition-colors group/link" href="#">
                                Saber más
                                <span class="material-symbols-outlined text-sm ml-1 group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Card 3: Misionera --}}
                <div class="group bg-white dark:bg-zinc-900 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800 overflow-hidden flex flex-col h-full">
                    <div class="h-2 bg-primary w-full"></div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl">public</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3">Dimensión Misionera</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                            Una Iglesia en salida. Llevamos la buena nueva del Evangelio a todos los rincones, evangelizando con palabra y testimonio.
                        </p>
                        <div class="pt-4 mt-auto border-t border-gray-100 dark:border-gray-800">
                            <a class="inline-flex items-center text-secondary font-bold text-sm hover:text-primary transition-colors group/link" href="#">
                                Saber más
                                <span class="material-symbols-outlined text-sm ml-1 group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Card 4: Comunidades --}}
                <div class="group bg-white dark:bg-zinc-900 rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-gray-800 overflow-hidden flex flex-col h-full">
                    <div class="h-2 bg-secondary w-full"></div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center text-secondary mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="material-symbols-outlined text-3xl">groups</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3">Comunidades</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">
                            La fe vivida en fraternidad. Pequeñas comunidades, grupos de oración y movimientos que fortalecen el tejido parroquial.
                        </p>
                        <div class="pt-4 mt-auto border-t border-gray-100 dark:border-gray-800">
                            <a class="inline-flex items-center text-secondary font-bold text-sm hover:text-primary transition-colors group/link" href="#">
                                Saber más
                                <span class="material-symbols-outlined text-sm ml-1 group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 px-4">
        <div class="max-w-5xl mx-auto bg-background-dark rounded-2xl overflow-hidden shadow-2xl relative">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1510915228340-29c85a43dcfe?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center opacity-10"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between p-10 md:p-16 gap-8">
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-black text-white mb-4">¿Quieres servir en alguna dimensión?</h2>
                    <p class="text-gray-400 text-lg">Únete a uno de nuestros grupos parroquiales y vive tu fe en comunidad activa.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('contacto') }}" class="bg-primary hover:bg-primary/90 text-background-dark text-base font-bold py-4 px-8 rounded-lg shadow-lg transform hover:-translate-y-1 transition-all duration-200">
                        Contáctanos Ahora
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
