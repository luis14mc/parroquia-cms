<x-layouts.app title="Parroquia Cristo Resucitado | Inicio" description="Bienvenido a la Parroquia Cristo Resucitado - Comunidad de Fe y Esperanza en Honduras">

    {{-- Hero Section --}}
    <section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
        </div>
        <div class="relative z-10 w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left">
            <div class="max-w-2xl">
                <span class="inline-block px-3 py-1 mb-6 text-xs font-bold tracking-wider text-white uppercase bg-secondary rounded-full">Bienvenidos</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-6 tracking-tight drop-shadow-sm">
                    Una comunidad de fe,<br/> esperanza y amor.
                </h1>
                <p class="text-lg sm:text-xl text-gray-200 mb-8 font-light leading-relaxed max-w-lg drop-shadow-sm">
                    Únete a nosotros en la celebración de la Eucaristía y crece espiritualmente en la Parroquia Cristo Resucitado.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-text-dark bg-primary rounded-lg hover:bg-primary/90 transition-all shadow-lg shadow-primary/25" href="#horarios">
                        Ver Horarios de Misa
                    </a>
                    <a class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white bg-white/10 backdrop-blur-sm border border-white/30 rounded-lg hover:bg-white/20 transition-all" href="{{ route('sacramentos') }}">
                        Conoce Nuestra Historia
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Quick Info Bar --}}
    <div class="w-full bg-white dark:bg-[#2a2418] border-b border-gray-100 dark:border-gray-800 shadow-sm relative z-20 -mt-8 sm:-mt-12 max-w-[1100px] mx-auto rounded-xl p-6 sm:p-8 flex flex-col md:flex-row gap-8 justify-between items-center text-center md:text-left">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-2xl">schedule</span>
            </div>
            <div>
                <h3 class="font-bold text-lg text-text-dark dark:text-white">Próxima Misa</h3>
                <p class="text-gray-500 dark:text-gray-400">Hoy, 6:00 PM</p>
            </div>
        </div>
        <div class="hidden md:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                <span class="material-symbols-outlined text-2xl">location_on</span>
            </div>
            <div>
                <h3 class="font-bold text-lg text-text-dark dark:text-white">Ubicación</h3>
                <p class="text-gray-500 dark:text-gray-400">Tegucigalpa, Honduras</p>
            </div>
        </div>
        <div class="hidden md:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 shrink-0">
                <span class="material-symbols-outlined text-2xl">call</span>
            </div>
            <div>
                <h3 class="font-bold text-lg text-text-dark dark:text-white">Contáctanos</h3>
                <p class="text-gray-500 dark:text-gray-400">+504 2234-5678</p>
            </div>
        </div>
    </div>

    {{-- Message from the Priest --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2 relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden bg-gray-200 relative shadow-2xl">
                        <img alt="Retrato del párroco" class="object-cover w-full h-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD44FcGRSK4Etf-WyU8wWZDKySfla1n6918dr4T4vSLC6tSxEwj6ZlI5Eima0t6vzhlIUXzUkTiqqVSfjFEVdiDXUzmlk2LeuN1Y-GnPO-S70t2PIvgNOlp5R_LraKN6UXooeZawh1DhSohv9Cs7EQQ7Y5lDpMyXjc9dDHMiJTSpoGvYP3YkVHfOeCWmcRfRRqKYID9ksz1IsBwjr8mopkcS9rniXL-JWkIVLtfqtcCEbatsbfcLfLl9RGPigKaBqhznznhThj9Zas" loading="lazy">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white dark:bg-[#2a2418] p-6 rounded-xl shadow-xl border border-gray-100 dark:border-gray-700 max-w-xs hidden sm:block">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="material-symbols-outlined text-primary">format_quote</span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-300 italic">
                            "Que la luz de Cristo Resucitado ilumine siempre sus caminos y fortalezca sus corazones."
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Mensaje del Párroco</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white mb-6 leading-tight">Paz y Bien a Todos</h2>
                    <div class="prose prose-lg text-gray-600 dark:text-gray-300 mb-8">
                        <p class="mb-4">
                            Es un honor darles la bienvenida a nuestra comunidad parroquial. En la Parroquia Cristo Resucitado, nos esforzamos por ser un faro de esperanza y un hogar espiritual para todos.
                        </p>
                        <p>
                            Aquí encontrarán un espacio para crecer en la fe, servir al prójimo y celebrar los sacramentos. Los invito a participar activamente en nuestras pastorales y a formar parte de esta gran familia.
                        </p>
                    </div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-12 w-12 bg-gray-200 rounded-full bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBQ7xApshyQ_t3gzd2zG1YhnqXJlDV2859qneva6olq0xBeuVHbUtIM6dk6pUQnf2aZBIYIK5zYkHFWlJyFHphVm8WeTNEHUdqL9N7vX1E8YOsmPtD2PKd1MWdiodQMZnaMk0pjdbU8mn8Q4u7BRbLA-QQbn1NwosLsQHJR3I1biKeQ2JuK23qREt6RuGMdJsUq2T5Ub7PQszkNrl8hDcpVIIhVUnscLnT-97SElPuEZIjK01tOgfzHTlfKC2LyFLHIZ_OkSSqTLow')"></div>
                        <div>
                            <p class="font-bold text-text-dark dark:text-white">P. Juan Pérez</p>
                            <p class="text-sm text-gray-500">Párroco</p>
                        </div>
                    </div>
                    <a class="text-primary font-bold hover:text-secondary transition-colors inline-flex items-center gap-1 group" href="{{ route('contacto') }}">
                        Leer mensaje completo
                        <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Latest News Grid --}}
    <section class="py-20 bg-gray-50 dark:bg-[#1a160e]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <span class="text-secondary font-bold tracking-wide uppercase text-sm mb-2 block">Actualidad</span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white">Noticias Recientes</h2>
                </div>
                <a class="hidden sm:inline-flex items-center justify-center px-4 py-2 text-sm font-bold text-text-dark dark:text-white border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-white dark:hover:bg-white/5 transition-all" href="{{ route('noticias') }}">
                    Ver todas
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- News Card 1 --}}
                <article class="bg-white dark:bg-[#211c11] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-gray-100 dark:border-gray-800 flex flex-col h-full">
                    <div class="relative h-48 overflow-hidden">
                        <img alt="Community gathering" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyyYMANkdYKyUXZqRuzdHcVD0xNlUkb6EjOmW1t5PbHlDkONRr4lOpRC8KOksorxXXmTEvNJKmmWMpGahxlcppIQ823ZB7R3LMxu3K6M1A1UNA8ilkP8A7KzVfg4Z_W5XksNnOEvotuL2uD1xENoAxHmMCl7ekcbLY01wXq2o8nMI572Wx2SgfNamv2FcUAqPGGBoRyNb_Exzj9ia5Sk7Vb6umWTSifIeel97N98hYW86mII-m4y3GE25_-boMV4yJZIQZMtBR4n8" loading="lazy">
                        <div class="absolute top-4 left-4 bg-white dark:bg-black/80 px-3 py-1 rounded text-xs font-bold text-text-dark dark:text-white shadow-sm">15 Oct, 2023</div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="mb-4"><span class="text-xs font-bold text-primary uppercase tracking-wider">Comunidad</span></div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3 group-hover:text-primary transition-colors">Jornada Mundial de los Pobres</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3 flex-grow">Nuestra parroquia se une a la iniciativa del Papa Francisco para tender la mano a los más necesitados de nuestra comunidad con una colecta especial.</p>
                        <a class="text-sm font-bold text-text-dark dark:text-white flex items-center gap-1 group-hover:gap-2 transition-all" href="{{ route('noticias') }}">Leer más <span class="material-symbols-outlined text-sm text-primary">arrow_forward</span></a>
                    </div>
                </article>
                {{-- News Card 2 --}}
                <article class="bg-white dark:bg-[#211c11] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-gray-100 dark:border-gray-800 flex flex-col h-full">
                    <div class="relative h-48 overflow-hidden">
                        <img alt="Children in catechesis" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJHpZMSfq3Lvr2Tz30fJHLTNr_cuYR57JlLjrYq4X0PPxcZXGlK8rV7XhQbv23wUHsISB1iVbz6EW7F96m8iCc4DVOBpJV9XndBBodd3D_PbkgwtSxaZ_9IGhJ9xp8EGg6kXYM-X_2_Www77Eh6PqRkcQU6flarGI-0rbw5at6DDXijF56tSYsjpeH7G3mi2O4nbbdz3N-tCdUKjZsibPDsh2bn4MWQwygFfq5rk1NCIICzZzlsPb7kmsrkNMVM34ulLmLUFzAwq8" loading="lazy">
                        <div class="absolute top-4 left-4 bg-white dark:bg-black/80 px-3 py-1 rounded text-xs font-bold text-text-dark dark:text-white shadow-sm">12 Oct, 2023</div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="mb-4"><span class="text-xs font-bold text-primary uppercase tracking-wider">Catequesis</span></div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3 group-hover:text-primary transition-colors">Inscripciones Abiertas para Catequesis</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3 flex-grow">Ya están abiertas las inscripciones para el nuevo ciclo de catequesis de primera comunión y confirmación. Acércate a la oficina parroquial.</p>
                        <a class="text-sm font-bold text-text-dark dark:text-white flex items-center gap-1 group-hover:gap-2 transition-all" href="{{ route('noticias') }}">Leer más <span class="material-symbols-outlined text-sm text-primary">arrow_forward</span></a>
                    </div>
                </article>
                {{-- News Card 3 --}}
                <article class="bg-white dark:bg-[#211c11] rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-gray-100 dark:border-gray-800 flex flex-col h-full">
                    <div class="relative h-48 overflow-hidden">
                        <img alt="Choir singing during mass" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8C8MM8JZtblxXv6r3n4zzYeHctcxxpBpT6MBlAw4uZQgoTVR0FDHmr6EiKmVqQkWcbO54FB-IBzg_GAwR3OxU8zEo0PlMFn6T2aM3R336DhqzfYbDA8Ui4GjIe9O5OdNlEUuerH3k0tLg8xdBEwB8pBIItttOxruNso0swNLPu6Wt6K0AwbdR6xrjdM8xfzV4LutNOdyYkf7nZpnYK9KMeJAdOik2T9vwrlI1DF2pwbqnEJbiSPqCXfKtVV5h12chPlMbPXwjXD4" loading="lazy">
                        <div class="absolute top-4 left-4 bg-white dark:bg-black/80 px-3 py-1 rounded text-xs font-bold text-text-dark dark:text-white shadow-sm">08 Oct, 2023</div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="mb-4"><span class="text-xs font-bold text-primary uppercase tracking-wider">Liturgia</span></div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-3 group-hover:text-primary transition-colors">Concierto de Coros Parroquiales</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-3 flex-grow">Disfruta de una noche de alabanza y música sacra con la participación de todos los coros de nuestra parroquia este próximo sábado.</p>
                        <a class="text-sm font-bold text-text-dark dark:text-white flex items-center gap-1 group-hover:gap-2 transition-all" href="{{ route('noticias') }}">Leer más <span class="material-symbols-outlined text-sm text-primary">arrow_forward</span></a>
                    </div>
                </article>
            </div>
            <div class="mt-8 text-center sm:hidden">
                <a class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold text-text-dark dark:text-white border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-white dark:hover:bg-white/5 transition-all" href="{{ route('noticias') }}">Ver todas las noticias</a>
            </div>
        </div>
    </section>

    {{-- Upcoming Events --}}
    <section id="horarios" class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Calendario</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Próximos Eventos</h2>
            </div>
            <div class="flex flex-col gap-4">
                @foreach([
                    ['month' => 'NOV', 'day' => '02', 'title' => 'Conmemoración de los Fieles Difuntos', 'desc' => 'Santas Misas durante todo el día para orar por nuestros seres queridos.', 'time' => '08:00 AM - 07:00 PM'],
                    ['month' => 'NOV', 'day' => '12', 'title' => 'Retiro Espiritual de Parejas', 'desc' => 'Un día para fortalecer el amor y la fe en el matrimonio. Salón Parroquial.', 'time' => '09:00 AM - 04:00 PM'],
                    ['month' => 'NOV', 'day' => '26', 'title' => 'Fiesta de Cristo Rey', 'desc' => 'Procesión solemne y Misa Mayor para celebrar a nuestro patrono universal.', 'time' => '10:00 AM - 12:30 PM'],
                ] as $event)
                <div class="group flex flex-col md:flex-row items-center gap-6 bg-white dark:bg-[#211c11] p-6 rounded-xl shadow-sm hover:shadow-md border border-gray-100 dark:border-gray-800 transition-all">
                    <div class="flex-shrink-0 w-full md:w-24 flex flex-row md:flex-col items-center justify-center gap-2 md:gap-0 bg-gray-50 dark:bg-white/5 rounded-lg p-3 text-center border border-gray-100 dark:border-gray-700">
                        <span class="text-secondary font-bold text-sm uppercase">{{ $event['month'] }}</span>
                        <span class="text-3xl font-black text-text-dark dark:text-white">{{ $event['day'] }}</span>
                    </div>
                    <div class="flex-grow text-center md:text-left">
                        <h3 class="text-xl font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors">{{ $event['title'] }}</h3>
                        <p class="text-gray-500 dark:text-gray-400 mt-1">{{ $event['desc'] }}</p>
                    </div>
                    <div class="flex-shrink-0 flex items-center gap-6 w-full md:w-auto justify-center md:justify-end">
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="material-symbols-outlined text-lg">schedule</span>
                            {{ $event['time'] }}
                        </div>
                        <a class="hidden md:flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700 text-gray-400 hover:text-primary hover:border-primary transition-all" href="#">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Donation / Call to Action --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary/95 z-0"></div>
        <div class="absolute inset-0 z-0 bg-cover bg-center mix-blend-overlay opacity-20" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA51yIlr5EyTJaCeOGx4xaN-I17Tj1cYbJrvcEKZAQItQ8jLhFTnwARiFxe08Tjdrv49pPXDjF9lMQ5QQ7oGz2d2GA6jXWjDjNc_pNsKxJIkSQLuhCeYC8K1y2nSOYbb6rX2e61Kys6uH17p5RGuIRNSq5z__HfILoYkCTptSpMAMnti8J8fm5pPwb3n6G_Q4cXILfTDn9uCPDMkx5Af4Oeu8W-Vx4siBsIZtzE-4N-QRirEqP7xxF0IzaQu2JXY6UTDdB3QdOx42A');"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">Apoya nuestra Misión</h2>
            <p class="text-white/90 text-lg sm:text-xl mb-10 leading-relaxed">
                Tu generosidad nos ayuda a mantener nuestro templo, apoyar a los necesitados y continuar con la evangelización. Cada aporte cuenta.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('donaciones') }}" class="w-full sm:w-auto px-8 py-4 bg-primary text-text-dark font-bold rounded-lg hover:bg-white hover:text-secondary transition-colors shadow-lg shadow-black/20">
                    Hacer una Donación Online
                </a>
                <a href="{{ route('contacto') }}" class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                    Otras formas de ayudar
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
