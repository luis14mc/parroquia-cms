<x-layouts.app title="Noticias y Blog | Parroquia Cristo Resucitado" description="Mantente informado sobre las últimas actividades y anuncios de nuestra comunidad">

    <div class="w-full max-w-[1280px] mx-auto px-6 lg:px-10 py-8 flex flex-col gap-10">

        {{-- Page Title Area --}}
        <div class="flex flex-col gap-2">
            <h1 class="text-text-dark dark:text-white text-5xl font-black leading-tight tracking-tight">Noticias y Blog Parroquial</h1>
            <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-2xl">
                Mantente informado sobre las últimas actividades, reflexiones espirituales y anuncios importantes de nuestra comunidad en Honduras.
            </p>
        </div>

        {{-- Featured Article (Hero) — solo si hay noticia destacada --}}
        @if($destacada)
            <a href="{{ route('noticias.show', $destacada->slug) }}" class="relative w-full rounded-2xl overflow-hidden group shadow-lg block">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 transition-opacity duration-300"></div>
                <div class="h-[500px] w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                     style="background-image: url('{{ $destacada->imagen_destacada ? Storage::url($destacada->imagen_destacada) : 'https://placehold.co/1200x675?text=Sin+Imagen' }}');">
                </div>
                <div class="absolute bottom-0 left-0 z-20 p-8 md:p-12 w-full md:w-3/4 lg:w-2/3">
                    <span class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-black uppercase bg-primary rounded-full">Destacado</span>
                    <h2 class="text-3xl md:text-5xl font-black text-white leading-tight mb-4 drop-shadow-md">
                        {{ $destacada->titulo }}
                    </h2>
                    @if($destacada->extracto)
                        <p class="text-white/90 text-base md:text-lg font-medium mb-6 line-clamp-2 md:line-clamp-none drop-shadow-sm">
                            {{ $destacada->extracto }}
                        </p>
                    @endif
                    <span class="bg-white hover:bg-gray-100 text-text-dark font-bold py-3 px-6 rounded-lg transition-colors inline-flex items-center gap-2">
                        Leer Artículo Completo
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </span>
                </div>
            </a>
        @endif

        {{-- Filters & Categories --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 py-4 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-2xl font-bold text-text-dark dark:text-white">Últimas Publicaciones</h3>
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('noticias') }}"
                   class="px-4 py-2 rounded-full text-sm font-medium transition
                          {{ !$categoriaActual ? 'bg-text-dark text-white dark:bg-white dark:text-text-dark' : 'bg-gray-100 text-text-dark hover:bg-primary/20 dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/10' }}">
                    Todas
                </a>
                @foreach($categorias as $key => $label)
                    <a href="{{ route('noticias', ['categoria' => $key]) }}"
                       class="px-4 py-2 rounded-full text-sm font-medium transition
                              {{ $categoriaActual === $key ? 'bg-text-dark text-white dark:bg-white dark:text-text-dark' : 'bg-gray-100 text-text-dark hover:bg-primary/20 dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/10' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>

        {{-- News Grid --}}
        @if($noticias->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($noticias as $noticia)
                    <article class="flex flex-col gap-4 group">
                        <a href="{{ route('noticias.show', $noticia->slug) }}" class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-gray-100 block">
                            @if($noticia->imagen_destacada)
                                <img alt="{{ $noticia->titulo }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ Storage::url($noticia->imagen_destacada) }}" loading="lazy">
                            @else
                                <div class="h-full w-full flex items-center justify-center text-gray-300 bg-gray-50">
                                    <span class="material-symbols-outlined text-6xl">article</span>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary text-text-dark text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                    {{ $categorias[$noticia->categoria] ?? $noticia->categoria }}
                                </span>
                            </div>
                        </a>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2 text-xs text-gray-500 font-medium uppercase tracking-wider">
                                <span class="material-symbols-outlined text-[16px] align-middle">calendar_today</span>
                                {{ $noticia->fecha_publicacion->translatedFormat('d \\d\\e F, Y') }}
                            </div>
                            <a href="{{ route('noticias.show', $noticia->slug) }}">
                                <h3 class="text-xl font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors leading-tight">
                                    {{ $noticia->titulo }}
                                </h3>
                            </a>
                            @if($noticia->extracto)
                                <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">{{ $noticia->extracto }}</p>
                            @endif
                            <a class="inline-flex items-center text-primary text-sm font-bold mt-2 hover:underline" href="{{ route('noticias.show', $noticia->slug) }}">
                                Leer Más <span class="material-symbols-outlined text-[16px] ml-1">arrow_right_alt</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Paginación --}}
            <div class="pb-16">
                {{ $noticias->withQueryString()->links() }}
            </div>
        @else
            {{-- Estado vacío --}}
            <div class="flex flex-col items-center justify-center py-20 text-center pb-16">
                <span class="material-symbols-outlined text-6xl text-gray-300 dark:text-gray-600 mb-4">newspaper</span>
                <h3 class="text-xl font-bold text-text-dark dark:text-white mb-2">No hay noticias todavía</h3>
                <p class="text-gray-500 dark:text-gray-400 max-w-md">
                    @if($categoriaActual)
                        No hay publicaciones en la categoría <strong>{{ $categorias[$categoriaActual] ?? $categoriaActual }}</strong>.
                        <a href="{{ route('noticias') }}" class="text-primary hover:underline">Ver todas</a>
                    @else
                        Las noticias y publicaciones de la parroquia aparecerán aquí próximamente.
                    @endif
                </p>
            </div>
        @endif

    </div>

</x-layouts.app>
