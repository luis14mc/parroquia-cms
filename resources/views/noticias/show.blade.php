<x-layouts.app title="Noticia | Parroquia Cristo Resucitado" description="Artículo del blog parroquial">

    @php
        $articulosMap = [
            'bienvenidos-a-nuestra-nueva-pagina' => [
                'titulo' => 'Bienvenidos a nuestra nueva página web',
                'categoria' => 'Anuncios',
                'fecha' => '15 de Enero, 2025',
                'cuerpo' => '<p>Nos alegra anunciar el lanzamiento de nuestro nuevo sitio web parroquial.</p><p>Aquí encontrarás toda la información actualizada sobre nuestras actividades, horarios de misas, sacramentos y todo lo relacionado con nuestra comunidad parroquial.</p><p>Te invitamos a explorar cada sección y a mantenerte conectado con tu parroquia.</p>',
            ],
            'horarios-de-semana-santa' => [
                'titulo' => 'Horarios especiales de Semana Santa 2025',
                'categoria' => 'Anuncios',
                'fecha' => '10 de Marzo, 2025',
                'cuerpo' => '<p>Consulta los horarios de todas las celebraciones litúrgicas durante la Semana Mayor:</p><ul><li><strong>Domingo de Ramos:</strong> 8:00 AM, 10:00 AM y 5:00 PM</li><li><strong>Jueves Santo:</strong> 5:00 PM - Misa de la Cena del Señor</li><li><strong>Viernes Santo:</strong> 3:00 PM - Celebración de la Pasión</li><li><strong>Sábado Santo:</strong> 7:00 PM - Vigilia Pascual</li><li><strong>Domingo de Resurrección:</strong> 8:00 AM, 10:00 AM y 5:00 PM</li></ul><p>Te invitamos a vivir estos días santos en comunidad.</p>',
            ],
            'reflexion-cuaresma' => [
                'titulo' => 'Reflexión: El camino de la Cuaresma',
                'categoria' => 'Reflexiones',
                'fecha' => '05 de Marzo, 2025',
                'cuerpo' => '<p>La Cuaresma es un tiempo de gracia y conversión. Son cuarenta días que la Iglesia nos ofrece para prepararnos a la celebración de la Pascua.</p><p>Durante este tiempo estamos llamados a intensificar tres prácticas fundamentales:</p><ul><li><strong>La oración:</strong> como diálogo íntimo con Dios</li><li><strong>El ayuno:</strong> como ejercicio de autodominio y solidaridad</li><li><strong>La caridad:</strong> como expresión concreta del amor al prójimo</li></ul><p>Aprovechemos estos días para acercarnos más a Dios y renovar nuestra fe.</p>',
            ],
            'jornada-de-limpieza' => [
                'titulo' => 'Jornada de limpieza y embellecimiento del templo',
                'categoria' => 'Actividades',
                'fecha' => '01 de Marzo, 2025',
                'cuerpo' => '<p>Invitamos a todos los feligreses a participar en la jornada de limpieza y embellecimiento de nuestro templo parroquial.</p><p><strong>Fecha:</strong> Sábado próximo<br><strong>Hora:</strong> 8:00 AM a 12:00 PM<br><strong>Lugar:</strong> Templo parroquial y áreas verdes</p><p>Tu participación es valiosa para mantener nuestra casa de oración en las mejores condiciones. ¡Te esperamos!</p>',
            ],
            'catequesis-confirmacion' => [
                'titulo' => 'Inicio de catequesis de Confirmación',
                'categoria' => 'Comunidad',
                'fecha' => '20 de Febrero, 2025',
                'cuerpo' => '<p>Abiertas las inscripciones para el nuevo ciclo de catequesis de Confirmación.</p><p>Este sacramento completa la gracia del Bautismo y fortalece nuestra fe para ser testigos de Cristo en el mundo.</p><p><strong>Requisitos:</strong></p><ul><li>Tener al menos 15 años de edad</li><li>Estar bautizado</li><li>Haber recibido la Primera Comunión</li><li>Compromiso de asistencia a las sesiones semanales</li></ul><p>Jóvenes y adultos son bienvenidos. Para más información, acércate a la oficina parroquial.</p>',
            ],
            'grupo-oracion-martes' => [
                'titulo' => 'Nuevo grupo de oración los martes',
                'categoria' => 'Comunidad',
                'fecha' => '15 de Febrero, 2025',
                'cuerpo' => '<p>Cada martes a las 6:30 PM nos reunimos para orar juntos en el salón parroquial.</p><p>Es un espacio de encuentro con Dios y con la comunidad donde compartimos la Palabra, cantamos alabanzas y presentamos nuestras intenciones al Señor.</p><p>No necesitas experiencia previa, solo un corazón abierto. ¡Ven y únete!</p>',
            ],
        ];

        $articulo = $articulosMap[$slug] ?? null;
    @endphp

    <article class="w-full max-w-[900px] mx-auto px-6 lg:px-10 py-10 md:py-16">

        {{-- Back link --}}
        <a href="{{ route('noticias') }}" class="inline-flex items-center gap-1 text-sm text-gray-500 hover:text-primary transition-colors mb-8 group">
            <span class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1">arrow_back</span>
            Volver a Noticias
        </a>

        @if($articulo)
            {{-- Category & Date --}}
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span class="bg-primary text-text-dark text-xs font-bold px-3 py-1 rounded-full">
                    {{ $articulo['categoria'] }}
                </span>
                <span class="text-sm text-gray-500 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                    {{ $articulo['fecha'] }}
                </span>
            </div>

            {{-- Title --}}
            <h1 class="text-3xl md:text-5xl font-black text-text-dark dark:text-white leading-tight tracking-tight mb-8">
                {{ $articulo['titulo'] }}
            </h1>

            {{-- Body --}}
            <div class="prose prose-lg max-w-none dark:prose-invert
                        prose-headings:font-bold prose-headings:text-text-dark dark:prose-headings:text-white
                        prose-a:text-primary hover:prose-a:underline
                        prose-img:rounded-xl prose-img:shadow-lg
                        mb-12">
                {!! $articulo['cuerpo'] !!}
            </div>

            {{-- Share / Divider --}}
            <div class="border-t border-gray-200 dark:border-gray-700 pt-8">
                <p class="text-sm text-gray-500 dark:text-gray-400">Comparte esta noticia con tu comunidad</p>
            </div>
        @else
            {{-- Artículo no encontrado --}}
            <div class="flex flex-col items-center justify-center py-20 text-center">
                <span class="material-symbols-outlined text-6xl text-gray-300 dark:text-gray-600 mb-4">article</span>
                <h1 class="text-2xl font-bold text-text-dark dark:text-white mb-2">Artículo no encontrado</h1>
                <p class="text-gray-500 dark:text-gray-400 max-w-md mb-6">
                    La noticia que buscas no está disponible. Puede que haya sido movida o eliminada.
                </p>
                <a href="{{ route('noticias') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-colors">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    Ver todas las noticias
                </a>
            </div>
        @endif

    </article>

</x-layouts.app>
