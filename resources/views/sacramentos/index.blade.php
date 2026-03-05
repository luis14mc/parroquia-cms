<x-layouts.app title="Sacramentos | Parroquia Cristo Resucitado" description="Conoce los sacramentos que celebramos en la Parroquia Cristo Resucitado.">

    {{-- ═══════════════════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[420px] sm:h-[480px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/heroes/hero_sacramentos.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-secondary/90 rounded-full">Vida Sacramental</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                Sacramentos
            </h1>
            <p class="mt-4 text-lg sm:text-xl text-gray-200 font-light max-w-2xl mx-auto drop-shadow-sm">
                Los sacramentos son signos eficaces de la gracia, instituidos por Cristo y confiados a la Iglesia, por los cuales se nos dispensa la vida divina.
            </p>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         GRID DE SACRAMENTOS
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Explora</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Nuestros Sacramentos</h2>
                <p class="text-gray-500 dark:text-gray-400 mt-3 max-w-2xl mx-auto">Selecciona un sacramento para conocer más sobre su significado, requisitos y cómo prepararte.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    ['slug' => 'bautismo', 'icon' => 'water_drop', 'title' => 'Bautismo', 'subtitle' => 'Sacramento de Iniciación', 'desc' => 'El fundamento de toda la vida cristiana y la puerta que abre el acceso a los otros sacramentos.', 'color' => 'primary'],
                    ['slug' => 'eucaristia', 'icon' => 'emoji_food_beverage', 'title' => 'Eucaristía', 'subtitle' => 'Fuente y Cumbre', 'desc' => 'El sacramento en el que recibimos el Cuerpo y la Sangre de Cristo, fuente y cumbre de la vida cristiana.', 'color' => 'secondary'],
                    ['slug' => 'confirmacion', 'icon' => 'local_fire_department', 'title' => 'Confirmación', 'subtitle' => 'Don del Espíritu', 'desc' => 'Enriquece con una fuerza especial del Espíritu Santo a los bautizados para ser testigos de Cristo.', 'color' => 'primary'],
                    ['slug' => 'matrimonio', 'icon' => 'favorite', 'title' => 'Matrimonio', 'subtitle' => 'Alianza de Amor', 'desc' => 'La alianza matrimonial por la que el varón y la mujer constituyen entre sí un consorcio de toda la vida.', 'color' => 'secondary'],
                    ['slug' => 'reconciliacion', 'icon' => 'church', 'title' => 'Reconciliación', 'subtitle' => 'Sacramento de Sanación', 'desc' => 'El perdón de los pecados cometidos después del Bautismo, reconciliándonos con Dios y la Iglesia.', 'color' => 'primary'],
                    ['slug' => 'uncion-de-enfermos', 'icon' => 'healing', 'title' => 'Unción de Enfermos', 'subtitle' => 'Consuelo y Fortaleza', 'desc' => 'Otorga consuelo, paz y ánimo para soportar cristianamente los sufrimientos de la enfermedad.', 'color' => 'secondary'],
                ] as $sac)
                <a href="{{ route('sacramentos.show.' . $sac['slug']) }}" 
                   class="group bg-white dark:bg-[#211c11] rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                    <div class="h-1.5 bg-gradient-to-r {{ $sac['color'] === 'primary' ? 'from-primary to-primary/60' : 'from-secondary to-secondary/60' }}"></div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="w-16 h-16 rounded-2xl bg-{{ $sac['color'] }}/10 flex items-center justify-center text-{{ $sac['color'] }} mb-6 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-3xl">{{ $sac['icon'] }}</span>
                        </div>
                        <span class="text-xs font-bold text-{{ $sac['color'] }} uppercase tracking-wider mb-1">{{ $sac['subtitle'] }}</span>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3 group-hover:text-primary transition-colors">{{ $sac['title'] }}</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6 flex-grow">{{ $sac['desc'] }}</p>
                        <div class="pt-4 border-t border-gray-100 dark:border-gray-800">
                            <span class="inline-flex items-center text-sm font-bold text-primary group-hover:gap-2 gap-1 transition-all">
                                Ver requisitos
                                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         CTA
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary/95 z-0"></div>
        <div class="absolute inset-0 z-0 bg-cover bg-center mix-blend-overlay opacity-20" style="background-image: url('{{ asset('images/heroes/hero_sacramentos.webp') }}');"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">¿Tienes dudas sobre algún sacramento?</h2>
            <p class="text-white/90 text-lg sm:text-xl mb-10 leading-relaxed">
                Nuestra secretaría parroquial está disponible para ayudarte a revisar tus documentos y guiarte en cada paso de tu preparación sacramental.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/50494306883?text=Hola%2C%20necesito%20informaci%C3%B3n%20sobre%20un%20sacramento." 
                   target="_blank" rel="noopener noreferrer"
                   class="w-full sm:w-auto px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-lg transition-colors shadow-lg shadow-black/20 inline-flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Contáctanos por WhatsApp
                </a>
                <a href="{{ route('contacto') }}" class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                    Contactar Secretaría
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
