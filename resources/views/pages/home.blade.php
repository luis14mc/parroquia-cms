@extends('layouts.app')
@section('title', 'Parroquia Cristo Resucitado - Inicio')
@section('content')
{{-- Hero --}}
<section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI');">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30"></div>
    </div>
    <div class="relative z-10 w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left">
        <div class="max-w-2xl">
            <span class="inline-block px-3 py-1 mb-6 text-xs font-bold tracking-wider text-white uppercase bg-secondary rounded-full">Bienvenidos</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight mb-6 tracking-tight">
                Una comunidad de fe,<br> esperanza y amor.
            </h1>
            <p class="text-lg text-gray-200 mb-8 font-light leading-relaxed max-w-lg">
                Únete a nosotros en la celebración de la Eucaristía y crece espiritualmente en la Parroquia Cristo Resucitado.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('sacramentos') }}" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-text-dark bg-primary rounded-lg hover:bg-primary/90 transition-all shadow-lg">
                    Sacramentos y Horarios
                </a>
                <a href="{{ route('contacto') }}" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white bg-white/10 backdrop-blur-sm border border-white/30 rounded-lg hover:bg-white/20 transition-all">
                    Cómo Llegar
                </a>
            </div>
        </div>
    </div>
</section>
{{-- Quick Info Bar --}}
<div class="relative z-20 -mt-8 sm:-mt-12 max-w-[1100px] mx-auto px-4">
    <div class="bg-white dark:bg-surface-dark rounded-xl shadow-xl p-6 sm:p-8 flex flex-col md:flex-row gap-8 justify-between items-center text-center md:text-left border border-gray-100 dark:border-gray-700">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary shrink-0">
                <span class="material-symbols-outlined text-2xl">schedule</span>
            </div>
            <div>
                <h3 class="font-bold text-lg text-text-dark dark:text-white">Próxima Misa</h3>
                <p class="text-muted dark:text-gray-400 text-sm">Hoy, 6:00 PM</p>
            </div>
        </div>
        <div class="hidden md:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                <span class="material-symbols-outlined text-2xl">location_on</span>
            </div>
            <div>
                <h3 class="font-bold text-lg text-text-dark dark:text-white">Ubicación</h3>
                <p class="text-muted dark:text-gray-400 text-sm">Col. Loarque, Tegucigalpa</p>
            </div>
        </div>
        <div class="hidden md:block w-px h-12 bg-gray-200 dark:bg-gray-700"></div>
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-2xl text-gray-600 dark:text-gray-300">call</span>
            </div>
            <div>
                <h3 class="font-bold text-lg text-text-dark dark:text-white">Contáctanos</h3>
                <p class="text-muted dark:text-gray-400 text-sm">+504 9430-6883</p>
            </div>
        </div>
    </div>
</div>
{{-- Mensaje del Parroco --}}
<section class="py-20 bg-surface dark:bg-background-dark">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="lg:w-1/2 relative">
                <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl bg-gradient-to-br from-background-dark to-secondary/40 flex items-center justify-center">
                    <span class="material-symbols-outlined text-white/10" style="font-size:8rem">person</span>
                </div>
                <div class="absolute -bottom-6 -right-6 bg-white dark:bg-surface-dark p-6 rounded-xl shadow-xl border border-gray-100 dark:border-gray-700 max-w-xs hidden sm:block">
                    <span class="material-symbols-outlined text-primary mb-2 block">format_quote</span>
                    <p class="text-sm text-gray-600 dark:text-gray-300 italic">"Que la luz de Cristo Resucitado ilumine siempre sus caminos y fortalezca sus corazones."</p>
                </div>
            </div>
            <div class="lg:w-1/2">
                <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Mensaje del Párroco</span>
                <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white mb-6 leading-tight">Paz y Bien a Todos</h2>
                <div class="text-gray-600 dark:text-gray-300 mb-8 space-y-4 leading-relaxed">
                    <p>Es un honor darles la bienvenida a nuestra comunidad parroquial. En la Parroquia Cristo Resucitado, nos esforzamos por ser un faro de esperanza y un hogar espiritual para todos.</p>
                    <p>Aquí encontrarán un espacio para crecer en la fe, servir al prójimo y celebrar los sacramentos. Los invito a participar activamente en nuestras pastorales y a formar parte de esta gran familia.</p>
                </div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-gray-500">person</span>
                    </div>
                    <div>
                        <p class="font-bold text-text-dark dark:text-white">P. Javier Martinez</p>
                        <p class="text-sm text-muted">Párroco</p>
                    </div>
                </div>
                <a href="{{ route('contacto') }}" class="text-primary font-bold hover:text-secondary transition-colors inline-flex items-center gap-1 group">
                    Contáctanos <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- Noticias --}}
<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-secondary font-bold tracking-wide uppercase text-sm mb-2 block">Actualidad</span>
                <h2 class="text-3xl font-black text-text-dark dark:text-white">Noticias Recientes</h2>
            </div>
            <a href="{{ route('noticias') }}" class="hidden sm:inline-flex items-center justify-center px-4 py-2 text-sm font-bold text-text-dark dark:text-white border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-white dark:hover:bg-white/5 transition-all">Ver todas</a>
        </div>
        @if($noticias->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($noticias as $noticia)
            <article class="bg-white dark:bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-gray-100 dark:border-gray-800 flex flex-col">
                <div class="relative h-48 overflow-hidden bg-gray-100 dark:bg-gray-800">
                    @if($noticia->imagen)
                        <img src="{{ asset('storage/'.$noticia->imagen) }}" alt="{{ $noticia->titulo }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary/10 to-secondary/10">
                            <span class="material-symbols-outlined text-primary/30" style="font-size:3rem">church</span>
                        </div>
                    @endif
                    <div class="absolute top-3 left-3 bg-white/90 dark:bg-black/70 px-2.5 py-1 rounded text-xs font-bold text-text-dark dark:text-white">
                        {{ $noticia->publicado_en?->isoFormat('D MMM, YYYY') ?? $noticia->created_at->isoFormat('D MMM, YYYY') }}
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-lg font-bold text-text-dark dark:text-white mb-3 group-hover:text-primary transition-colors line-clamp-2">{{ $noticia->titulo }}</h3>
                    @if($noticia->resumen)<p class="text-muted dark:text-gray-400 text-sm mb-4 line-clamp-3 flex-grow">{{ $noticia->resumen }}</p>@endif
                    <a href="{{ route('noticia', $noticia) }}" class="text-sm font-bold text-text-dark dark:text-white flex items-center gap-1 hover:gap-2 transition-all mt-auto">
                        Leer más <span class="material-symbols-outlined text-sm text-primary">arrow_forward</span>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        @else
        <p class="text-center text-muted py-12">Próximamente publicaremos noticias de nuestra comunidad.</p>
        @endif
    </div>
</section>
{{-- Eventos --}}
<section class="py-20 bg-surface dark:bg-background-dark">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Calendario</span>
            <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white">Próximos Eventos</h2>
        </div>
        @if($eventos->count())
        <div class="flex flex-col gap-4">
            @foreach($eventos as $evento)
            <div class="group flex flex-col md:flex-row items-center gap-6 bg-white dark:bg-surface-dark p-6 rounded-xl shadow-sm hover:shadow-md border border-gray-100 dark:border-gray-800 transition-all">
                <div class="flex-shrink-0 w-full md:w-24 flex flex-row md:flex-col items-center justify-center gap-2 md:gap-0 bg-gray-50 dark:bg-white/5 rounded-lg p-3 text-center border border-gray-100 dark:border-gray-700">
                    <span class="text-secondary font-bold text-xs uppercase">{{ $evento->inicio_en->isoFormat('MMM') }}</span>
                    <span class="text-3xl font-black text-text-dark dark:text-white">{{ $evento->inicio_en->format('d') }}</span>
                </div>
                <div class="flex-grow text-center md:text-left">
                    <h3 class="text-lg font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors">{{ $evento->titulo }}</h3>
                    <p class="text-muted dark:text-gray-400 mt-1 text-sm line-clamp-2">{{ $evento->descripcion }}</p>
                </div>
                <div class="flex items-center gap-4 shrink-0">
                    <span class="text-sm text-muted dark:text-gray-400 flex items-center gap-1">
                        <span class="material-symbols-outlined text-lg">schedule</span>
                        {{ $evento->inicio_en->format('h:i A') }}
                    </span>
                    <a href="{{ route('evento', $evento) }}" class="hidden md:flex items-center justify-center w-10 h-10 rounded-full border border-gray-200 dark:border-gray-700 text-gray-400 hover:text-primary hover:border-primary transition-all">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-muted py-12">No hay eventos próximos publicados.</p>
        @endif
        <div class="text-center mt-10">
            <a href="{{ route('eventos') }}" class="inline-flex items-center justify-center px-6 py-3 text-sm font-bold text-text-dark dark:text-white border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-white dark:hover:bg-white/5 transition-all">Ver calendario completo</a>
        </div>
    </div>
</section>
{{-- CTA --}}
<section class="py-24 relative overflow-hidden bg-secondary">
    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 tracking-tight">Apoya nuestra Misión</h2>
        <p class="text-white/90 text-lg sm:text-xl mb-10 leading-relaxed">
            Tu generosidad nos ayuda a mantener nuestro templo, apoyar a los necesitados y continuar con la evangelización. Cada aporte cuenta.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('donaciones') }}" class="w-full sm:w-auto px-8 py-4 bg-primary text-text-dark font-bold rounded-lg hover:bg-white hover:text-secondary transition-colors shadow-lg inline-flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">volunteer_activism</span>Hacer una Donación
            </a>
            <a href="{{ route('intenciones') }}" class="w-full sm:w-auto px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors inline-flex items-center justify-center">
                Solicitar Intención de Misa
            </a>
        </div>
    </div>
</section>
@endsection
