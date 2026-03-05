<x-sacramento-layout
    title="Matrimonio"
    subtitle="Alianza de vida y amor"
    icon="favorite"
    color="secondary"
    :requisitos="[]"
    :heroImage="asset('images/heroes/hero_matrimonio.webp')"
>
    @slot('description')
        <p>La alianza matrimonial, por la que el varón y la mujer constituyen entre sí un consorcio de toda la vida, ordenado por su misma índole natural al bien de los cónyuges y a la generación y educación de la prole, fue elevada por Cristo a la dignidad de sacramento.</p>
    @endslot

    {{-- ═══════════════════════════════════════════════════════
         SECCIÓN 1: PAREJAS DE LA PARROQUIA
    ═══════════════════════════════════════════════════════ --}}
    <section class="mb-24">
        <div class="text-center mb-12">
            <h3 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Parejas de la Parroquia</h3>
            <p class="text-gray-500 dark:text-gray-400 mt-4 max-w-2xl mx-auto">Para novios que residen dentro de nuestra jurisdicción geográfica. El expediente se tramita íntegramente con nosotros.</p>
        </div>

        <div class="bg-white dark:bg-[#211c11] rounded-3xl border border-gray-100 dark:border-gray-800 shadow-xl overflow-hidden">
            <div class="bg-secondary px-8 py-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center">
                            <span class="material-symbols-outlined text-3xl">home_pin</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold leading-tight">Requisitos Locales</h4>
                            <p class="text-white/80 text-sm">Jurisdicción Parroquia Cristo Resucitado</p>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl px-4 py-2 text-white text-xs font-bold uppercase tracking-wider">
                        3 meses de anticipación
                    </div>
                </div>
            </div>

            <div class="p-8 lg:p-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    {{-- Documentos Personales --}}
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 border-b border-gray-100 dark:border-gray-800 pb-4">
                            <span class="material-symbols-outlined text-secondary">person_book</span>
                            <h5 class="font-black text-text-dark dark:text-white uppercase tracking-widest text-sm">Documentos Personales</h5>
                        </div>
                        <ul class="grid grid-cols-1 gap-3">
                            @foreach([
                                'Una fotografía tamaño carnet por cada contrayente.',
                                'Fotocopias de las tarjetas de identidad.',
                                'Fotocopias de las partidas de nacimiento.',
                                'Fotocopia de parentesco.',
                                'Fotocopias de las tarjetas de identidad de dos testigos (no familiares).',
                                'Fotocopias de las tarjetas de identidad de los padrinos.',
                                'Certificación de soltería.',
                                'Constancia del matrimonio civil.'
                            ] as $item)
                            <li class="flex items-start gap-3 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-white/5 transition-colors group">
                                <span class="material-symbols-outlined text-secondary text-lg mt-0.5 group-hover:scale-110 transition-transform">check_circle</span>
                                <span class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Documentos Sacramentales --}}
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 border-b border-gray-100 dark:border-gray-800 pb-4">
                            <span class="material-symbols-outlined text-secondary">auto_stories</span>
                            <h5 class="font-black text-text-dark dark:text-white uppercase tracking-widest text-sm">Documentos Sacramentales</h5>
                        </div>
                        <div class="space-y-4">
                            @foreach([
                                ['title' => 'Sacramentos de Iniciación', 'desc' => 'Constancias de Bautismo, Primera Comunión y Confirma (originales recientes).'],
                                ['title' => 'Charlas Pre-matrimoniales', 'desc' => 'Constancias de asistencia al curso de preparación.'],
                                ['title' => 'Matrimonio de Padrinos', 'desc' => 'Certificado del matrimonio eclesiástico de los padrinos.'],
                                ['title' => 'Ofrenda Parroquial', 'desc' => 'Aporte para el sostenimiento del templo.']
                            ] as $sac)
                            <div class="bg-gray-50 dark:bg-white/5 border border-gray-100 dark:border-white/5 rounded-2xl p-5 flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 shadow-sm flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-xl">church</span>
                                </div>
                                <div>
                                    <h6 class="font-bold text-text-dark dark:text-white text-sm">{{ $sac['title'] }}</h6>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs mt-1 leading-relaxed">{{ $sac['desc'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Divisor Visual --}}
    <div class="flex items-center justify-center gap-8 my-32 py-4">
        <div class="h-px bg-gray-200 dark:bg-gray-800 flex-grow"></div>
        <div class="text-gray-300 dark:text-gray-700 p-4 rounded-full border border-gray-100 dark:border-gray-800">
            <span class="material-symbols-outlined text-5xl">church</span>
        </div>
        <div class="h-px bg-gray-200 dark:bg-gray-800 flex-grow"></div>
    </div>

    {{-- ═══════════════════════════════════════════════════════
         SECCIÓN 2: PAREJAS DE OTRAS PARROQUIAS
    ═══════════════════════════════════════════════════════ --}}
    <section class="mb-24">
        <div class="text-center mb-12">
            <h3 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Parejas de otras Parroquias</h3>
            <p class="text-gray-500 dark:text-gray-400 mt-4 max-w-2xl mx-auto">Para novios que residen fuera de nuestra jurisdicción pero desean celebrar su boda en nuestro templo.</p>
        </div>

        <div class="bg-white dark:bg-[#211c11] rounded-3xl border border-gray-100 dark:border-gray-800 shadow-xl overflow-hidden">
            <div class="bg-text-dark dark:bg-black px-8 py-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-3xl">public</span>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold leading-tight">Trámite Externo</h4>
                            <p class="text-white/60 text-sm">Expediente en parroquia de origen</p>
                        </div>
                    </div>
                    <div class="bg-secondary border border-secondary/20 rounded-xl px-4 py-2 text-white text-xs font-bold uppercase tracking-wider">
                        Reserva de Fecha
                    </div>
                </div>
            </div>

            <div class="p-8 lg:p-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    {{-- Documentos Personales --}}
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 border-b border-gray-100 dark:border-gray-800 pb-4">
                            <span class="material-symbols-outlined text-secondary">assignment_ind</span>
                            <h5 class="font-black text-text-dark dark:text-white uppercase tracking-widest text-sm">Pasos a Seguir</h5>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex gap-6 p-5 bg-gray-50 dark:bg-white/5 rounded-2xl border border-dashed border-gray-200 dark:border-gray-700">
                                <span class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center font-bold text-xs shrink-0">01</span>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Abrir expediente con 3 meses de anticipación en la parroquia del novio o la novia.</p>
                            </li>
                            <li class="flex gap-6 p-5 bg-gray-50 dark:bg-white/5 rounded-2xl border border-dashed border-gray-200 dark:border-gray-700">
                                <span class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center font-bold text-xs shrink-0">02</span>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Constancia del matrimonio civil y fotocopias de identidad de los padrinos.</p>
                            </li>
                            <li class="flex gap-6 p-5 bg-gray-50 dark:bg-white/5 rounded-2xl border border-dashed border-gray-200 dark:border-gray-700">
                                <span class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center font-bold text-xs shrink-0">03</span>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Venir a reservar fecha y hora inmediatamente después de fijarlas en su parroquia de origen.</p>
                            </li>
                        </ul>
                    </div>

                    {{-- Documentos Sacramentales --}}
                    <div class="space-y-6">
                        <div class="flex items-center gap-3 border-b border-gray-100 dark:border-gray-800 pb-4">
                            <span class="material-symbols-outlined text-secondary">verified</span>
                            <h5 class="font-black text-text-dark dark:text-white uppercase tracking-widest text-sm">Documentación Requerida</h5>
                        </div>
                        <div class="grid grid-cols-1 gap-3">
                            @foreach([
                                'Constancia de expediente en trámite (entrevista con su Párroco).',
                                'Certificado de matrimonio eclesiástico de los padrinos.',
                                'Hoja firmada del sacerdote que celebrará el matrimonio.',
                                'Licencia Matrimonial firmada por el sacerdote celebrante.',
                                'Ofrenda Parroquial.'
                            ] as $item)
                            <div class="flex items-center gap-5 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                                <span class="material-symbols-outlined text-secondary">check_circle</span>
                                <span class="text-sm text-gray-600 dark:text-gray-300 leading-tight">{{ $item }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-sacramento-layout>
