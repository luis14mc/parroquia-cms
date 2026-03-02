{{-- 
    Vista individual de sacramento — layout reutilizable
    Props: $title, $subtitle, $description, $icon, $requisitos (array), $color 
--}}
@props(['title', 'subtitle', 'description', 'icon', 'requisitos' => [], 'color' => 'primary'])

<x-layouts.app title="{{ $title }} | Sacramentos | Parroquia Cristo Resucitado" description="{{ Str::limit(strip_tags($description), 160) }}">

    {{-- ═══════════════════════════════════════════════════════
         HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[380px] sm:h-[420px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAJHpZMSfq3Lvr2Tz30fJHLTNr_cuYR57JlLjrYq4X0PPxcZXGlK8rV7XhQbv23wUHsISB1iVbz6EW7F96m8iCc4DVOBpJV9XndBBodd3D_PbkgwtSxaZ_9IGhJ9xp8EGg6kXYM-X_2_Www77Eh6PqRkcQU6flarGI-0rbw5at6DDXijF56tSYsjpeH7G3mi2O4nbbdz3N-tCdUKjZsibPDsh2bn4MWQwygFfq5rk1NCIICzZzlsPb7kmsrkNMVM34ulLmLUFzAwq8');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-{{ $color }}/80 rounded-full">
                <span class="material-symbols-outlined text-sm">{{ $icon }}</span>
                Sacramento
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                {{ $title }}
            </h1>
            <p class="mt-3 text-lg text-gray-200 font-light max-w-xl mx-auto drop-shadow-sm">{{ $subtitle }}</p>
        </div>
    </section>



    {{-- ═══════════════════════════════════════════════════════
         CONTENIDO PRINCIPAL
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Descripción --}}
            <div class="mb-16">
                <span class="text-{{ $color }} font-bold tracking-wide uppercase text-sm mb-2 block">¿Qué es?</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white mb-6 leading-tight">{{ $title }}</h2>
                <div class="prose prose-lg text-gray-600 dark:text-gray-300 leading-relaxed max-w-none">
                    {!! $description !!}
                </div>
            </div>

            {{-- Requisitos --}}
            @if(count($requisitos) > 0)
            <div class="mb-16">
                <span class="text-{{ $color }} font-bold tracking-wide uppercase text-sm mb-2 block">Preparación</span>
                <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-8">Requisitos</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach($requisitos as $req)
                    <div class="flex items-start gap-4 bg-white dark:bg-[#211c11] rounded-xl p-5 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-{{ $color }}/10 flex items-center justify-center text-{{ $color }}">
                            <span class="material-symbols-outlined text-lg">{{ $req['icon'] ?? 'check_circle' }}</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-dark dark:text-white text-sm">{{ $req['title'] }}</h4>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">{{ $req['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Contenido adicional inyectado desde cada vista --}}
            {{ $slot }}

            {{-- CTA WhatsApp --}}
            <div class="bg-white dark:bg-[#211c11] rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm overflow-hidden">
                <div class="flex flex-col sm:flex-row items-center gap-6 p-8">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-2xl bg-green-500/10 flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-grow text-center sm:text-left">
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-1">¿Necesitas información sobre {{ $title }}?</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">Escríbenos por WhatsApp y con gusto te orientamos en tu proceso.</p>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="https://wa.me/50494306883?text=Hola%2C%20necesito%20informaci%C3%B3n%20sobre%20el%20sacramento%20de%20{{ urlencode($title) }}." 
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl transition-colors shadow-lg shadow-green-500/25 text-sm">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Contáctanos
                        </a>
                    </div>
                </div>
            </div>

            {{-- Botón Ver más Sacramentos --}}
            <div class="mt-10 text-center">
                <a href="{{ route('sacramentos') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl transition-colors shadow-md text-sm">
                    <span class="material-symbols-outlined text-lg">arrow_back</span>
                    Ver más Sacramentos
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
