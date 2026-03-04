<x-layouts.app title="Nuestra Parroquia | Cristo Resucitado" description="Conoce la historia, misión y visión de la Parroquia Cristo Resucitado en Tegucigalpa, Honduras.">

    @php
        $stats = [
            ['valor' => '40+', 'label' => 'Años de Fe'],
            ['valor' => '5', 'label' => 'Comunidades'],
            ['valor' => '1000+', 'label' => 'Familias'],
        ];
        $valores = [
            ['icono' => 'favorite', 'titulo' => 'Amor', 'descripcion' => 'El amor como centro de toda acción pastoral.'],
            ['icono' => 'groups', 'titulo' => 'Comunidad', 'descripcion' => 'Caminamos juntos como pueblo de Dios.'],
            ['icono' => 'volunteer_activism', 'titulo' => 'Servicio', 'descripcion' => 'Servir a los más necesitados con generosidad.'],
            ['icono' => 'auto_stories', 'titulo' => 'Evangelización', 'descripcion' => 'Llevar la Buena Nueva a todos los rincones.'],
        ];
    @endphp

    {{-- ═══════════════════════════════════════════════════════
         1. HERO BANNER
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[420px] sm:h-[480px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI');">
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
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI" 
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
                    </div>
                    {{-- Datos destacados --}}
                    @if(count($stats) > 0)
                    <div class="grid grid-cols-{{ count($stats) }} gap-6 mt-10">
                        @foreach($stats as $stat)
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">{{ $stat['numero'] }}</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">{{ $stat['etiqueta'] }}</p>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="grid grid-cols-3 gap-6 mt-10">
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">59</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">Años de fe</p>
                        </div>
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">15</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">Comunidades</p>
                        </div>
                        <div class="text-center">
                            <span class="text-3xl sm:text-4xl font-black text-primary">6</span>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 font-medium">Pastorales</p>
                        </div>
                    </div>
                    @endif
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
                    @forelse($valores as $valor)
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">{{ $valor['icono'] ?? 'star' }}</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">{{ $valor['titulo'] ?? $valor['label'] ?? '' }}</span>
                    </div>
                    @empty
                    @foreach([
                        ['icon' => 'favorite', 'label' => 'Caridad'],
                        ['icon' => 'church', 'label' => 'Fe'],
                        ['icon' => 'diversity_3', 'label' => 'Comunidad'],
                        ['icon' => 'volunteer_activism', 'label' => 'Servicio'],
                        ['icon' => 'auto_stories', 'label' => 'Formación'],
                        ['icon' => 'handshake', 'label' => 'Fraternidad'],
                    ] as $valor)
                    <div class="flex flex-col items-center gap-3 p-4 rounded-xl bg-white dark:bg-[#211c11] border border-gray-100 dark:border-gray-800 hover:border-primary/30 transition-colors group">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-xl">{{ $valor['icon'] }}</span>
                        </div>
                        <span class="text-sm font-semibold text-text-dark dark:text-white">{{ $valor['label'] }}</span>
                    </div>
                    @endforeach
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         4. GALERÍA DE FOTOS
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Momentos</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Galería Parroquial</h2>
                <p class="text-gray-500 dark:text-gray-400 mt-3 max-w-2xl mx-auto">Algunos momentos especiales de nuestra vida comunitaria y celebraciones.</p>
            </div>

            {{-- Grid Masonry-like --}}
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" x-data="{ lightbox: false, current: '' }">
                @foreach([
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI', 'alt' => 'Interior del templo', 'span' => 'md:col-span-2 md:row-span-2'],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDyyYMANkdYKyUXZqRuzdHcVD0xNlUkb6EjOmW1t5PbHlDkONRr4lOpRC8KOksorxXXmTEvNJKmmWMpGahxlcppIQ823ZB7R3LMxu3K6M1A1UNA8ilkP8A7KzVfg4Z_W5XksNnOEvotuL2uD1xENoAxHmMCl7ekcbLY01wXq2o8nMI572Wx2SgfNamv2FcUAqPGGBoRyNb_Exzj9ia5Sk7Vb6umWTSifIeel97N98hYW86mII-m4y3GE25_-boMV4yJZIQZMtBR4n8', 'alt' => 'Celebración comunitaria', 'span' => ''],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAJHpZMSfq3Lvr2Tz30fJHLTNr_cuYR57JlLjrYq4X0PPxcZXGlK8rV7XhQbv23wUHsISB1iVbz6EW7F96m8iCc4DVOBpJV9XndBBodd3D_PbkgwtSxaZ_9IGhJ9xp8EGg6kXYM-X_2_Www77Eh6PqRkcQU6flarGI-0rbw5at6DDXijF56tSYsjpeH7G3mi2O4nbbdz3N-tCdUKjZsibPDsh2bn4MWQwygFfq5rk1NCIICzZzlsPb7kmsrkNMVM34ulLmLUFzAwq8', 'alt' => 'Catequesis infantil', 'span' => ''],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8C8MM8JZtblxXv6r3n4zzYeHctcxxpBpT6MBlAw4uZQgoTVR0FDHmr6EiKmVqQkWcbO54FB-IBzg_GAwR3OxU8zEo0PlMFn6T2aM3R336DhqzfYbDA8Ui4GjIe9O5OdNlEUuerH3k0tLg8xdBEwB8pBIItttOxruNso0swNLPu6Wt6K0AwbdR6xrjdM8xfzV4LutNOdyYkf7nZpnYK9KMeJAdOik2T9vwrlI1DF2pwbqnEJbiSPqCXfKtVV5h12chPlMbPXwjXD4', 'alt' => 'Coro parroquial', 'span' => ''],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD44FcGRSK4Etf-WyU8wWZDKySfla1n6918dr4T4vSLC6tSxEwj6ZlI5Eima0t6vzhlIUXzUkTiqqVSfjFEVdiDXUzmlk2LeuN1Y-GnPO-S70t2PIvgNOlp5R_LraKN6UXooeZawh1DhSohv9Cs7EQQ7Y5lDpMyXjc9dDHMiJTSpoGvYP3YkVHfOeCWmcRfRRqKYID9ksz1IsBwjr8mopkcS9rniXL-JWkIVLtfqtcCEbatsbfcLfLl9RGPigKaBqhznznhThj9Zas', 'alt' => 'Actividades pastorales', 'span' => ''],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA51yIlr5EyTJaCeOGx4xaN-I17Tj1cYbJrvcEKZAQItQ8jLhFTnwARiFxe08Tjdrv49pPXDjF9lMQ5QQ7oGz2d2GA6jXWjDjNc_pNsKxJIkSQLuhCeYC8K1y2nSOYbb6rX2e61Kys6uH17p5RGuIRNSq5z__HfILoYkCTptSpMAMnti8J8fm5pPwb3n6G_Q4cXILfTDn9uCPDMkx5Af4Oeu8W-Vx4siBsIZtzE-4N-QRirEqP7xxF0IzaQu2JXY6UTDdB3QdOx42A', 'alt' => 'Evento especial', 'span' => 'md:col-span-2'],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBQ7xApshyQ_t3gzd2zG1YhnqXJlDV2859qneva6olq0xBeuVHbUtIM6dk6pUQnf2aZBIYIK5zYkHFWlJyFHphVm8WeTNEHUdqL9N7vX1E8YOsmPtD2PKd1MWdiodQMZnaMk0pjdbU8mn8Q4u7BRbLA-QQbn1NwosLsQHJR3I1biKeQ2JuK23qREt6RuGMdJsUq2T5Ub7PQszkNrl8hDcpVIIhVUnscLnT-97SElPuEZIjK01tOgfzHTlfKC2LyFLHIZ_OkSSqTLow', 'alt' => 'Vida parroquial', 'span' => ''],
                    ['src' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDyyYMANkdYKyUXZqRuzdHcVD0xNlUkb6EjOmW1t5PbHlDkONRr4lOpRC8KOksorxXXmTEvNJKmmWMpGahxlcppIQ823ZB7R3LMxu3K6M1A1UNA8ilkP8A7KzVfg4Z_W5XksNnOEvotuL2uD1xENoAxHmMCl7ekcbLY01wXq2o8nMI572Wx2SgfNamv2FcUAqPGGBoRyNb_Exzj9ia5Sk7Vb6umWTSifIeel97N98hYW86mII-m4y3GE25_-boMV4yJZIQZMtBR4n8', 'alt' => 'Celebración eucarística', 'span' => ''],
                ] as $photo)
                <div class="overflow-hidden rounded-xl cursor-pointer group {{ $photo['span'] }}" 
                     @click="lightbox = true; current = '{{ $photo['src'] }}'">
                    <img src="{{ $photo['src'] }}" 
                         alt="{{ $photo['alt'] }}" 
                         class="w-full h-full object-cover aspect-square group-hover:scale-105 transition-transform duration-500"
                         loading="lazy">
                </div>
                @endforeach

                {{-- Lightbox --}}
                <div x-show="lightbox" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0 z-[100] flex items-center justify-center bg-black/90 p-4" 
                     @click.self="lightbox = false"
                     @keydown.escape.window="lightbox = false"
                     x-cloak>
                    <button @click="lightbox = false" class="absolute top-6 right-6 text-white hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-3xl">close</span>
                    </button>
                    <img :src="current" alt="Imagen ampliada" class="max-w-full max-h-[85vh] rounded-lg shadow-2xl object-contain">
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         5. CTA FINAL
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary/95 z-0"></div>
        <div class="absolute inset-0 z-0 bg-cover bg-center mix-blend-overlay opacity-20" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA51yIlr5EyTJaCeOGx4xaN-I17Tj1cYbJrvcEKZAQItQ8jLhFTnwARiFxe08Tjdrv49pPXDjF9lMQ5QQ7oGz2d2GA6jXWjDjNc_pNsKxJIkSQLuhCeYC8K1y2nSOYbb6rX2e61Kys6uH17p5RGuIRNSq5z__HfILoYkCTptSpMAMnti8J8fm5pPwb3n6G_Q4cXILfTDn9uCPDMkx5Af4Oeu8W-Vx4siBsIZtzE-4N-QRirEqP7xxF0IzaQu2JXY6UTDdB3QdOx42A');"></div>
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
