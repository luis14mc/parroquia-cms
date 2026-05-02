<x-layouts.app title="Parroquia Cristo Resucitado | Inicio" description="Bienvenido a la Parroquia Cristo Resucitado - Comunidad de Fe y Esperanza en Honduras">

    {{-- ═══════════════════════════════════════════════════════
         1. HERO SECTION
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[500px] sm:h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/heroes/Hero_pascua.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
        </div>
        <div class="relative z-10 w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left">
            <div class="max-w-2xl">
                <span class="inline-block px-3 py-1 mb-6 text-xs font-bold tracking-wider text-white uppercase bg-secondary rounded-full">Bienvenidos</span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-6 tracking-tight drop-shadow-sm">
                    Una comunidad de fe, esperanza y amor.
                </h1>
                <p class="text-lg sm:text-xl text-gray-200 mb-8 font-light leading-relaxed max-w-lg drop-shadow-sm">
                    Únete a nosotros en la celebración de la Eucaristía y crece espiritualmente en la Parroquia Cristo Resucitado.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-text-dark bg-primary rounded-lg hover:bg-primary/90 transition-all shadow-lg shadow-primary/25" href="#horarios">
                        Ver Horarios de Misa
                    </a>
                    <a class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white bg-white/10 backdrop-blur-sm border border-white/30 rounded-lg hover:bg-white/20 transition-all" href="{{ route('nosotros') }}">
                        Conoce Nuestra Historia
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         2. QUICK INFO BAR
    ═══════════════════════════════════════════════════════ --}}
    @php
        // Horarios reales de misa SOLAMENTE de la Sede Parroquial (según sección inferior)
        $horariosSede = [
            'Lunes' => ['07:00', '17:00', '19:00'],
            'Martes' => ['07:00', '17:00', '19:00'],
            'Miércoles' => ['07:00', '17:00', '19:00'],
            'Jueves' => ['07:00', '17:00', '19:00'],
            'Viernes' => ['07:00', '17:00', '19:00'],
            'Sábado' => ['17:30'],
            'Domingo' => ['09:15', '11:00', '17:00', '19:00'],
        ];

        $now = new DateTime('now', new DateTimeZone('America/Tegucigalpa'));
        $diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        $hoyNombre = $diasSemana[$now->format('w')];
        $horaActual = $now->format('H:i');
        
        $proximaMisa = null;
        $diaMisa = '';

        // 1. Buscar hoy
        if (isset($horariosSede[$hoyNombre])) {
            foreach ($horariosSede[$hoyNombre] as $hora) {
                if ($hora > $horaActual) {
                    $proximaMisa = $hora;
                    $diaMisa = 'Hoy';
                    break;
                }
            }
        }

        // 2. Si no hay más hoy, buscar en los días siguientes
        if (!$proximaMisa) {
            $idxHoy = (int)$now->format('w');
            for ($i = 1; $i <= 7; $i++) {
                $nextIdx = ($idxHoy + $i) % 7;
                $nextDiaNombre = $diasSemana[$nextIdx];
                if (isset($horariosSede[$nextDiaNombre])) {
                    $proximaMisa = $horariosSede[$nextDiaNombre][0];
                    $diaMisa = ($i === 1) ? 'Mañana' : $nextDiaNombre;
                    break;
                }
            }
        }

        // Formatear hora a 12h
        if ($proximaMisa) {
            $time = DateTime::createFromFormat('H:i', $proximaMisa);
            $proximaMisaFormateada = $time->format('g:i A');
        }
    @endphp

    <div class="w-full bg-white dark:bg-[#2a2418] border-b border-gray-100 dark:border-gray-800 shadow-lg relative z-20 -mt-10 sm:-mt-16 max-w-[1100px] mx-auto rounded-2xl p-6 sm:p-10 flex flex-col md:flex-row gap-8 md:gap-4 justify-between items-center">
        {{-- Próxima Misa --}}
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full md:w-auto">
            <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-3xl">schedule</span>
            </div>
            <div class="text-center sm:text-left">
                <h3 class="font-bold text-lg text-text-dark dark:text-white leading-tight">Próxima Misa</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm">
                    {{ $diaMisa }}, {{ $proximaMisaFormateada ?? 'Consultar' }}
                </p>
            </div>
        </div>

        <div class="hidden md:block w-px h-12 bg-gray-200 dark:bg-gray-700/50"></div>

        {{-- Ubicación --}}
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full md:w-auto">
            <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                <span class="material-symbols-outlined text-3xl">location_on</span>
            </div>
            <div class="text-center sm:text-left">
                <h3 class="font-bold text-lg text-text-dark dark:text-white leading-tight">Ubicación</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm">Colonia Loarque, Tegucigalpa</p>
            </div>
        </div>

        <div class="hidden md:block w-px h-12 bg-gray-200 dark:bg-gray-700/50"></div>

        {{-- Contacto --}}
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full md:w-auto">
            <div class="w-14 h-14 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 shrink-0">
                <span class="material-symbols-outlined text-3xl">call</span>
            </div>
            <div class="text-center sm:text-left">
                <h3 class="font-bold text-lg text-text-dark dark:text-white leading-tight">Contáctanos</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm">9430-6883</p>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════
         3. INSCRIPCIONES
    ═══════════════════════════════════════════════════════ --}}
    <section id="inscripciones" class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Participa</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Taller de la Solidaridad</h2>
                <p class="text-gray-500 dark:text-gray-400 mt-3 max-w-2xl mx-auto">Inscripción abierta: nombre completo, teléfono, correo electrónico y sector parroquial.</p>
            </div>
            <div class="max-w-lg mx-auto">
                <div class="bg-white dark:bg-[#211c11] rounded-xl p-8 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-all group ring-2 ring-primary/15">
                    <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center text-primary mb-5">
                        <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-white mb-2 group-hover:text-primary transition-colors">Inscríbete aquí</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm mb-6">Completa el formulario en línea para confirmar tu participación en el taller.</p>
                    <a href="https://forms.gle/NjtwFo9vZjowVPma6" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-8 py-3.5 text-base font-bold text-text-dark bg-primary rounded-lg hover:bg-primary/90 transition-all shadow-lg shadow-primary/25">
                        Ir al formulario
                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         4. MENSAJE DEL PÁRROCO
    ═══════════════════════════════════════════════════════ --}}
    <section id="nosotros" class="py-20 bg-gray-50 dark:bg-[#1a160e]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="lg:w-1/2 relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden bg-gray-200 relative shadow-2xl">
                        <img alt="Retrato del párroco" class="object-cover w-full h-full" src="{{ asset('images/fondos/resucitado.webp') }}" loading="lazy">
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
                        <p>Es un honor darles la bienvenida a nuestra comunidad parroquial. Aquí encontrarás un espacio de fe, esperanza y amor donde juntos caminamos hacia Cristo Resucitado.</p>
                    </div>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="h-12 w-12 bg-gray-200 rounded-full bg-cover bg-center" style="background-image: url('{{ asset('images/sacerdotes/padre_javier.jpg') }}')"></div>
                        <div>
                            <p class="font-bold text-text-dark dark:text-white">P. Javier</p>
                            <p class="text-sm text-gray-500">Párroco</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         5. HORARIOS DE MISA
    ═══════════════════════════════════════════════════════ --}}
    @php
        $horarios = [
            [
                'nombre' => 'Sede Parroquial',
                'dias' => [
                    ['dia' => 'Lunes a Viernes', 'horas' => ['7:00 AM', '5:00 PM', '7:00 PM']],
                    ['dia' => 'Sábados', 'horas' => ['5:30 PM']],
                    ['dia' => 'Domingos', 'horas' => ['9:15 AM', '11:00 AM', '5:00 PM', '7:00 PM']],
                ],
            ],
            [
                'nombre' => 'Altos de Loarque',
                'dias' => [
                    ['dia' => 'Miércoles', 'horas' => ['6:00 PM']],
                    ['dia' => 'Domingos', 'horas' => ['9:00 AM']],
                ],
            ],
            [
                'nombre' => 'Yaguacire',
                'dias' => [
                    ['dia' => 'Domingo', 'horas' => ['7:00 AM']],
                ],
            ],
            [
                'nombre' => 'Fuerza Aérea',
                'dias' => [
                    ['dia' => 'Domingo', 'horas' => ['8:15 AM']],
                ],
            ],
            [
                'nombre' => 'Las Mercedes',
                'dias' => [
                    ['dia' => 'Sábados', 'horas' => ['3:30 PM']],
                ],
            ],
            [
                'nombre' => 'Camino Neocatecumenal',
                'dias' => [
                    ['dia' => 'Sábados', 'horas' => ['7:00 PM']],
                ],
            ],
        ];
    @endphp
    <section id="horarios" class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Celebraciones</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Horarios de Misa</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($horarios as $sede)
                    <div class="bg-white dark:bg-[#211c11] rounded-xl overflow-hidden border border-gray-100 dark:border-gray-800 shadow-sm">
                        <div class="bg-primary/90 px-6 py-4">
                            <h3 class="text-lg text-text-dark font-bold flex items-center gap-2">
                                <span class="material-symbols-outlined">church</span>
                                {{ $sede['nombre'] }}
                            </h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-3">
                                @foreach($sede['dias'] as $dia)
                                    <li class="flex items-center justify-between text-sm">
                                        <span class="font-medium text-text-dark dark:text-white">{{ $dia['dia'] }}</span>
                                        <span class="text-gray-600 dark:text-gray-400">{{ implode(', ', $dia['horas'] ?? []) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         5b. INTENCIONES DE MISA (WHATSAPP)
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-16 bg-gray-50 dark:bg-[#1a160e]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-[#211c11] rounded-2xl border border-gray-100 dark:border-gray-800 shadow-sm overflow-hidden" >
                <div class="flex flex-col md:flex-row items-center gap-8 p-8 sm:p-10">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 rounded-2xl bg-green-500/10 flex items-center justify-center">
                            <svg class="w-10 h-10 text-green-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="flex-grow text-center md:text-left">
                        <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-2">Anota tus Intenciones de Misa</h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            ¿Deseas que oremos por una intención especial durante la Santa Misa? Envíanos tu solicitud por WhatsApp y la incluiremos en nuestras celebraciones.
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="https://wa.me/50494306883?text={{ urlencode('Hola, me gustaría anotar una intención de misa.') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full md:w-auto inline-flex items-center justify-center gap-3 px-6 sm:px-8 py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl transition-colors shadow-lg shadow-green-500/25">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Enviar por WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         6. NUESTROS SACERDOTES
    ═══════════════════════════════════════════════════════ --}}
    @php
        $sacerdotes = [
            ['nombre' => 'P. Javier Martínez', 'cargo' => 'Párroco', 'descripcion' => 'Guiando nuestra comunidad con fe y dedicación.', 'foto' => asset('images/sacerdotes/padre_javier.jpg')],
            ['nombre' => 'P. Eduar Vargas', 'cargo' => 'Vicario parroquial', 'descripcion' => 'Acompañando y sirviendo a la comunidad.', 'foto' => asset('images/sacerdotes/padre-eduar.png')],
        ];
    @endphp
    <section class="py-20 bg-gray-50 dark:bg-[#1a160e]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Nuestros Guías</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Nuestros Sacerdotes</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto">
                @foreach($sacerdotes as $sacerdote)
                <div class="bg-white dark:bg-[#211c11] rounded-2xl overflow-hidden border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg transition-shadow text-center p-8">
                    <div class="w-32 h-32 mx-auto rounded-full bg-gray-200 dark:bg-gray-700 overflow-hidden mb-6 ring-4 ring-primary/20">
                        <img alt="{{ $sacerdote['nombre'] }}" class="w-full h-full object-cover" src="{{ $sacerdote['foto'] }}" loading="lazy">
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-white mb-1">{{ $sacerdote['nombre'] }}</h3>
                    <p class="text-primary font-medium text-sm mb-4">{{ $sacerdote['cargo'] }}</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">{{ $sacerdote['descripcion'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════
         7. APOYA NUESTRA MISIÓN (CTA)
    ═══════════════════════════════════════════════════════ --}}
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-secondary/95 z-0"></div>
        <div class="absolute inset-0 z-0 bg-cover bg-center mix-blend-overlay opacity-20" style="background-image: url('{{ asset('images/heroes/home-hero.png') }}');"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">Apoya nuestra Misión</h2>
            <p class="text-white/90 text-lg sm:text-xl mb-10 leading-relaxed">
                Tu generosidad nos ayuda a mantener nuestro templo, apoyar a los necesitados y continuar con la evangelización. Cada aporte cuenta.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://ecommerce-credomatic.live.geopagos.com/parroquiacristoresucitadohn"  target="_blank" class="w-full sm:w-auto px-8 py-4 bg-primary text-text-dark font-bold rounded-lg hover:bg-white hover:text-secondary transition-colors shadow-lg shadow-black/20">
                    Hacer una Donación Online
                </a>
                <a href="{{ route('donaciones') }}" class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                    Otras formas de ayudar
                </a>
            </div>
        </div>
    </section>

</x-layouts.app>
