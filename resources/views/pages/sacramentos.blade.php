@extends('layouts.app')
@section('title', 'Sacramentos - Parroquia Cristo Resucitado')
@section('content')
{{-- Breadcrumb --}}
<div class="w-full bg-white dark:bg-background-dark border-b border-gray-100 dark:border-gray-800 py-3 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[1200px] mx-auto flex items-center gap-2 text-sm text-muted">
        <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Inicio</a>
        <span class="material-symbols-outlined text-xs">chevron_right</span>
        <span class="font-semibold text-text-dark dark:text-white">Sacramentos</span>
    </div>
</div>
{{-- Page header --}}
<div class="w-full bg-white dark:bg-background-dark py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[1200px] mx-auto">
        <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">Vida sacramental</p>
        <h1 class="text-text-dark dark:text-white text-4xl md:text-5xl font-black leading-tight mb-4">Los Sacramentos</h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl leading-relaxed">
            Los sacramentos son signos eficaces de la gracia instituidos por Cristo y confiados a la Iglesia para darnos la vida divina.
        </p>
    </div>
</div>
{{-- Quick nav pills --}}
<div class="sticky top-0 z-20 bg-white/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 py-3 px-4 sm:px-6 lg:px-8 shadow-sm">
    <div class="max-w-[1200px] mx-auto flex gap-2 overflow-x-auto pb-1">
        @foreach ([['bautismo','Bautismo'],['confirmacion','Confirmación'],['eucaristia','Eucaristía'],['matrimonio','Matrimonio'],['reconciliacion','Reconciliación'],['uncion','Unción'],['vocaciones','Vocaciones']] as $s)
        <a href="#{{ $s[0] }}" class="shrink-0 px-4 py-1.5 rounded-full border border-gray-200 dark:border-gray-700 text-sm font-medium text-text-dark dark:text-white hover:bg-primary hover:text-white hover:border-primary transition-all duration-200">{{ $s[1] }}</a>
        @endforeach
    </div>
</div>
{{-- Sacramentos --}}
<div class="w-full px-4 sm:px-6 lg:px-8 py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1200px] mx-auto flex flex-col gap-20">

        {{-- Bautismo --}}
        <section id="bautismo" class="scroll-mt-20">
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                <div class="lg:w-1/2">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm">water_drop</span>Iniciación
                    </span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Bautismo</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                        El Bautismo es el primero y más fundamental de los sacramentos. Por él quedamos liberados del pecado original, renacemos como hijos de Dios e incorporados a la Iglesia.
                    </p>
                    <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors">
                        <span>Agendar Bautismo</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-muted mb-4">Requisitos</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach(['Registro de nacimiento del niño','Padrinos bautizados y confirmados','Asistencia a charlas pre-bautismales','Foto reciente del niño','Constancia de matrimonio (si aplica)'] as $req)
                        <div class="flex items-start gap-3 p-4 bg-white dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm mt-0.5 shrink-0">check_circle</span>
                            <span class="text-sm text-gray-600 dark:text-gray-300">{{ $req }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Confirmación --}}
        <section id="confirmacion" class="scroll-mt-20">
            <div class="flex flex-col lg:flex-row-reverse gap-12 items-start">
                <div class="lg:w-1/2">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm">local_fire_department</span>Iniciación
                    </span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Confirmación</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                        La Confirmación perfecciona la gracia del Bautismo y nos fortalece con los dones del Espíritu Santo para ser testigos de Cristo.
                    </p>
                    <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors">
                        <span>Agendar Confirmación</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-muted mb-4">Requisitos</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach(['Certificado de Bautismo','Participación en catequesis de Confirmación','Padrino/Madrina confirmados','Carta de solicitud','Ser mayor de 15 años'] as $req)
                        <div class="flex items-start gap-3 p-4 bg-white dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm mt-0.5 shrink-0">check_circle</span>
                            <span class="text-sm text-gray-600 dark:text-gray-300">{{ $req }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Eucaristía --}}
        <section id="eucaristia" class="scroll-mt-20">
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                <div class="lg:w-1/2">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm">church</span>Iniciación
                    </span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Eucaristía</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                        La Eucaristía es la fuente y cumbre de la vida cristiana. En ella Cristo se hace presente bajo las especies de pan y vino para nutrirse de su Cuerpo y Sangre.
                    </p>
                    <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors">
                        <span>Primera Comunión</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-muted mb-4">Requisitos</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach(['Haber recibido el Bautismo','Haber realizado la Primera Reconciliación','Completar catequesis eucarística','Ayuno de una hora antes de comulgar','Carta de parroco anterior (si viene de otra parroquia)'] as $req)
                        <div class="flex items-start gap-3 p-4 bg-white dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm mt-0.5 shrink-0">check_circle</span>
                            <span class="text-sm text-gray-600 dark:text-gray-300">{{ $req }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Matrimonio --}}
        <section id="matrimonio" class="scroll-mt-20">
            <div class="flex flex-col lg:flex-row-reverse gap-12 items-start">
                <div class="lg:w-1/2">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm">favorite</span>Al servicio de la vida
                    </span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Matrimonio</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                        El sacramento del Matrimonio es la alianza que une para siempre a un hombre y una mujer, elevando su amor a signo del amor de Cristo por su Iglesia.
                    </p>
                    <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors">
                        <span>Agendar Matrimonio</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-muted mb-4">Requisitos</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach(['Certificados de Bautismo y Confirmación','Asistencia a curso prematrimonial','Documentos civiles de identidad','Partida de matrimonio civil (si aplica)','Presentarse 6 meses antes de la fecha deseada','Aval del párroco de origen'] as $req)
                        <div class="flex items-start gap-3 p-4 bg-white dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm mt-0.5 shrink-0">check_circle</span>
                            <span class="text-sm text-gray-600 dark:text-gray-300">{{ $req }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Reconciliación --}}
        <section id="reconciliacion" class="scroll-mt-20">
            <div class="flex flex-col lg:flex-row gap-12 items-start">
                <div class="lg:w-1/2">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm">handshake</span>Curación
                    </span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Reconciliación</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                        El sacramento de la Reconciliación (Confesión) nos otorga el perdón de los pecados cometidos después del Bautismo por medio de la absolución del sacerdote.
                    </p>
                    <div class="p-4 bg-primary/5 border border-primary/20 rounded-xl">
                        <p class="text-sm text-text-dark dark:text-white font-medium">
                            <span class="font-bold">Horario de confesiones:</span><br>
                            Martes y Jueves: 5:00 PM – 5:45 PM<br>
                            Sábados: 4:00 PM – 5:30 PM
                        </p>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-muted mb-4">Cómo prepararse</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach(['Examen de conciencia','Arrepentimiento sincero','Propósito de enmienda','Confesar los pecados al sacerdote','Cumplir la penitencia asignada'] as $req)
                        <div class="flex items-start gap-3 p-4 bg-white dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm mt-0.5 shrink-0">check_circle</span>
                            <span class="text-sm text-gray-600 dark:text-gray-300">{{ $req }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Unción --}}
        <section id="uncion" class="scroll-mt-20">
            <div class="flex flex-col lg:flex-row-reverse gap-12 items-start">
                <div class="lg:w-1/2">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary/10 text-secondary text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="material-symbols-outlined text-sm">health_and_safety</span>Curación
                    </span>
                    <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Unción de los Enfermos</h2>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                        La Unción de los Enfermos es el sacramento para los fieles gravemente enfermos. Conforta al cristiano que enfrenta la enfermedad o la vejez.
                    </p>
                    <a href="tel:+50494306883" class="inline-flex items-center gap-2 px-6 py-3 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors">
                        <span>Llamar urgente: +504 9430-6883</span>
                        <span class="material-symbols-outlined text-sm">call</span>
                    </a>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-muted mb-4">Información</h3>
                    <div class="flex flex-col gap-4">
                        @foreach(['Dirigido a enfermos graves o en peligro de muerte','Se puede recibir a domicilio o en hospital','Llame al párroco con la mayor brevedad','Se puede recibir varias veces si hay nuevas enfermedades'] as $req)
                        <div class="flex items-start gap-3 p-4 bg-white dark:bg-surface-dark rounded-xl border border-gray-100 dark:border-gray-700 shadow-sm">
                            <span class="material-symbols-outlined text-primary text-sm mt-0.5 shrink-0">check_circle</span>
                            <span class="text-sm text-gray-600 dark:text-gray-300">{{ $req }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Vocaciones --}}
        <section id="vocaciones" class="scroll-mt-20 bg-white dark:bg-surface-dark rounded-2xl p-10 border border-gray-100 dark:border-gray-700 shadow-sm">
            <div class="text-center max-w-2xl mx-auto">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-4">
                    <span class="material-symbols-outlined text-sm">star</span>Al servicio de la comunión
                </span>
                <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Vocaciones</h2>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-8">
                    ¿Sientes el llamado a la vida consagrada? El Orden Sagrado y la Vida Religiosa son un don para la Iglesia. Si sientes que Dios te llama, acércate y conversemos.
                </p>
                <a href="{{ route('contacto') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-secondary text-white font-bold rounded-lg hover:bg-red-800 transition-colors text-lg">
                    <span>Hablar con el Párroco</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </section>
    </div>
</div>
{{-- CTA Final --}}
<div class="w-full bg-background-dark text-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[960px] mx-auto text-center flex flex-col items-center gap-6">
        <h2 class="text-3xl font-bold">¿Tiene más preguntas?</h2>
        <p class="text-gray-300 max-w-lg">Nuestro equipo pastoral está disponible para orientarle en su camino de fe.</p>
        <a href="{{ route('contacto') }}" class="px-8 py-4 bg-primary text-black font-bold rounded-lg hover:bg-yellow-500 transition-colors">
            Contáctenos
        </a>
    </div>
</div>
@endsection
