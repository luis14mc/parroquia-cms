<x-layouts.app title="Noticias y Blog | Parroquia Cristo Resucitado" description="Mantente informado sobre las últimas actividades y anuncios de nuestra comunidad">

    @php
        $categorias = [
            'anuncios' => 'Anuncios',
            'reflexiones' => 'Reflexiones',
            'actividades' => 'Actividades',
            'comunidad' => 'Comunidad',
        ];
        $categoriaActual = request('categoria');

        $noticias = [
            [
                'slug' => 'bienvenidos-a-nuestra-nueva-pagina',
                'titulo' => 'Bienvenidos a nuestra nueva página web',
                'extracto' => 'Nos alegra anunciar el lanzamiento de nuestro nuevo sitio web parroquial. Aquí encontrarás toda la información sobre nuestras actividades, sacramentos y comunidad.',
                'categoria' => 'anuncios',
                'fecha' => '15 de Enero, 2025',
                'imagen' => null,
            ],
            [
                'slug' => 'horarios-de-semana-santa',
                'titulo' => 'Horarios especiales de Semana Santa 2025',
                'extracto' => 'Consulta los horarios de todas las celebraciones litúrgicas durante la Semana Mayor. Te invitamos a vivir estos días santos en comunidad.',
                'categoria' => 'anuncios',
                'fecha' => '10 de Marzo, 2025',
                'imagen' => null,
            ],
            [
                'slug' => 'reflexion-cuaresma',
                'titulo' => 'Reflexión: El camino de la Cuaresma',
                'extracto' => 'La Cuaresma es un tiempo de gracia y conversión. Aprovechemos estos cuarenta días para acercarnos más a Dios a través de la oración, el ayuno y la caridad.',
                'categoria' => 'reflexiones',
                'fecha' => '05 de Marzo, 2025',
                'imagen' => null,
            ],
            [
                'slug' => 'jornada-de-limpieza',
                'titulo' => 'Jornada de limpieza y embellecimiento del templo',
                'extracto' => 'Invitamos a todos los feligreses a participar en la jornada de limpieza y embellecimiento de nuestro templo parroquial este sábado.',
                'categoria' => 'actividades',
                'fecha' => '01 de Marzo, 2025',
                'imagen' => null,
            ],
            [
                'slug' => 'catequesis-confirmacion',
                'titulo' => 'Inicio de catequesis de Confirmación',
                'extracto' => 'Abiertas las inscripciones para el nuevo ciclo de catequesis de Confirmación. Jóvenes y adultos son bienvenidos.',
                'categoria' => 'comunidad',
                'fecha' => '20 de Febrero, 2025',
                'imagen' => null,
            ],
            [
                'slug' => 'grupo-oracion-martes',
                'titulo' => 'Nuevo grupo de oración los martes',
                'extracto' => 'Cada martes a las 6:30 PM nos reunimos para orar juntos en el salón parroquial. Ven y únete a nuestra comunidad de oración.',
                'categoria' => 'comunidad',
                'fecha' => '15 de Febrero, 2025',
                'imagen' => null,
            ],
        ];

        // Filter by category if specified
        if ($categoriaActual) {
            $noticias = array_filter($noticias, fn($n) => $n['categoria'] === $categoriaActual);
        }
    @endphp

    <div class="w-full max-w-[1280px] mx-auto px-6 lg:px-10 py-8 flex flex-col gap-10">

        {{-- Page Title Area --}}
        <div class="flex flex-col gap-2">
            <h1 class="text-text-dark dark:text-white text-5xl font-black leading-tight tracking-tight">Noticias y Blog Parroquial</h1>
            <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-2xl">
                Mantente informado sobre las últimas actividades, reflexiones espirituales y anuncios importantes de nuestra comunidad en Honduras.
            </p>
        </div>

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
        @if(count($noticias) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($noticias as $noticia)
                    <article class="flex flex-col gap-4 group">
                        <a href="{{ route('noticias.show', $noticia['slug']) }}" class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-gray-100 block">
                            @if($noticia['imagen'])
                                <img alt="{{ $noticia['titulo'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset($noticia['imagen']) }}" loading="lazy">
                            @else
                                <div class="h-full w-full flex items-center justify-center text-gray-300 bg-gray-50 dark:bg-white/5">
                                    <span class="material-symbols-outlined text-6xl">article</span>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary text-text-dark text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                                    {{ $categorias[$noticia['categoria']] ?? $noticia['categoria'] }}
                                </span>
                            </div>
                        </a>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2 text-xs text-gray-500 font-medium uppercase tracking-wider">
                                <span class="material-symbols-outlined text-[16px] align-middle">calendar_today</span>
                                {{ $noticia['fecha'] }}
                            </div>
                            <a href="{{ route('noticias.show', $noticia['slug']) }}">
                                <h3 class="text-xl font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors leading-tight">
                                    {{ $noticia['titulo'] }}
                                </h3>
                            </a>
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">{{ $noticia['extracto'] }}</p>
                            <a class="inline-flex items-center text-primary text-sm font-bold mt-2 hover:underline" href="{{ route('noticias.show', $noticia['slug']) }}">
                                Leer Más <span class="material-symbols-outlined text-[16px] ml-1">arrow_right_alt</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            {{-- Estado vacío --}}
            <div class="flex flex-col items-center justify-center py-20 text-center pb-16">
                <span class="material-symbols-outlined text-6xl text-gray-300 dark:text-gray-600 mb-4">newspaper</span>
                <h3 class="text-xl font-bold text-text-dark dark:text-white mb-2">No hay noticias en esta categoría</h3>
                <p class="text-gray-500 dark:text-gray-400 max-w-md">
                    No hay publicaciones en la categoría <strong>{{ $categorias[$categoriaActual] ?? $categoriaActual }}</strong>.
                    <a href="{{ route('noticias') }}" class="text-primary hover:underline">Ver todas</a>
                </p>
            </div>
        @endif

    </div>

</x-layouts.app>
