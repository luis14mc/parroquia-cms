{{--
    Vista individual de pastoral — layout reutilizable
    Props: $title, $heroImage, $quote, $quoteSource, $introText, $opciones (array)
--}}
@props(['title', 'heroImage' => '', 'quote', 'quoteSource', 'introText', 'opciones' => []])

<x-layouts.app title="{{ $title }} | Pastorales | Parroquia Cristo Resucitado" description="{{ Str::limit(strip_tags($introText), 160) }}">

    {{-- ═══════════════════════════════════════════════════════
         1. HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[420px] sm:h-[480px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat">
            <img src="{{ $heroImage ?: asset('images/heroes/heroe_familiar.webp') }}" alt="Hero Pastoral" class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-secondary/80 rounded-full">Pastoral Parroquial</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                {{ $title }}
            </h1>
        </div>
    </section>



    {{-- ═══════════════════════════════════════════════════════
         2. INTRODUCCIÓN + CITA BÍBLICA
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-center">
                {{-- Imagen --}}
                <div class="lg:w-5/12 relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl ring-1 ring-black/5">
                        @hasSection('introImage')
                            @yield('introImage')
                        @else
                            <img src="{{ asset('images/heroes/heroe_familiar.webp') }}" alt="Hero Pastoral" class="w-full h-full object-cover" loading="lazy">
                        @endif
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-24 h-24 bg-secondary/20 rounded-2xl -z-10 hidden sm:block"></div>
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-primary/20 rounded-full -z-10 hidden sm:block"></div>
                </div>

                {{-- Cita Bíblica --}}
                <div class="lg:w-7/12">
                    <div class="bg-white dark:bg-[#211c11] rounded-2xl p-8 sm:p-10 border border-gray-100 dark:border-gray-800 shadow-sm relative">
                        <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-secondary to-primary rounded-t-2xl"></div>
                        <span class="material-symbols-outlined text-secondary/30 text-6xl mb-4 block">format_quote</span>
                        <blockquote class="text-xl sm:text-2xl font-medium text-text-dark dark:text-white leading-relaxed italic mb-6">
                            "{{ $quote }}"
                        </blockquote>
                        <cite class="text-secondary font-bold text-sm not-italic tracking-wide">{{ $quoteSource }}</cite>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         3. TEXTO EXPLICATIVO
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-gray-50 dark:bg-[#1a160e]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-secondary font-bold tracking-wide uppercase text-sm mb-2 block">Nuestra Labor</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">¿Qué hacemos?</h2>
            </div>
            <div class="prose prose-lg text-gray-600 dark:text-gray-300 leading-relaxed max-w-none text-center">
                {!! $introText !!}
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         4. OPCIONES FUNDAMENTALES
    ═══════════════════════════════════════════════════════ --}}
    @if(count($opciones) > 0)
    {{-- Tailwind safelist: bg-primary/10 bg-secondary/10 text-primary text-secondary --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-secondary font-bold tracking-wide uppercase text-sm mb-2 block">Áreas de Acción</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Opciones Fundamentales</h2>
            </div>
            {{-- grid-cols-1 grid-cols-2 grid-cols-3 grid-cols-4 lg:grid-cols-1 lg:grid-cols-2 lg:grid-cols-3 lg:grid-cols-4 --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-{{ min(count($opciones), 4) }} gap-8">
                @foreach($opciones as $op)
                <div class="group bg-white dark:bg-[#211c11] rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden text-center p-8">
                    <div class="w-16 h-16 rounded-2xl bg-{{ $op['color'] ?? 'secondary' }}/10 flex items-center justify-center text-{{ $op['color'] ?? 'secondary' }} mb-6 mx-auto group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-3xl">{{ $op['icon'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-text-dark dark:text-white mb-3">{{ $op['title'] }}</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ $op['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Contenido adicional inyectado desde cada vista --}}
    {{ $slot }}

    {{-- ═══════════════════════════════════════════════════════
         CTA
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary/95 z-0"></div>
        <div class="absolute inset-0 z-0 bg-cover bg-center mix-blend-overlay opacity-20" style="background-image: url('{{ $heroImage }}');"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">¿Quieres servir en esta Pastoral?</h2>
            <p class="text-white/90 text-lg sm:text-xl mb-10 leading-relaxed">
                Únete a nuestro equipo y vive tu fe en comunidad activa al servicio de los demás.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/50494306883?text=Hola%2C%20quiero%20saber%20m%C3%A1s%20sobre%20la%20{{ urlencode($title) }}." 
                   target="_blank" rel="noopener noreferrer"
                   class="w-full sm:w-auto px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-lg transition-colors shadow-lg shadow-black/20 inline-flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Contáctanos por WhatsApp
                </a>
                <a href="{{ route('contacto') }}" class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                    Más Información
                </a>
            </div>
        </div>
    </section>


</x-layouts.app>
