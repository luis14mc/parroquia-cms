<x-layouts.app :title="$noticia->titulo . ' | Parroquia Cristo Resucitado'" :description="$noticia->extracto ?? Str::limit(strip_tags($noticia->cuerpo), 160)">

    <article class="w-full max-w-[900px] mx-auto px-6 lg:px-10 py-10 md:py-16">

        {{-- Back link --}}
        <a href="{{ route('noticias') }}" class="inline-flex items-center gap-1 text-sm text-gray-500 hover:text-primary transition-colors mb-8 group">
            <span class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1">arrow_back</span>
            Volver a Noticias
        </a>

        {{-- Category & Date --}}
        <div class="flex flex-wrap items-center gap-3 mb-6">
            <span class="bg-primary text-text-dark text-xs font-bold px-3 py-1 rounded-full">
                {{ \App\Models\Noticia::categorias()[$noticia->categoria] ?? $noticia->categoria }}
            </span>
            <span class="text-sm text-gray-500 flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                {{ $noticia->fecha_publicacion->translatedFormat('d \\d\\e F, Y') }}
            </span>
            @if($noticia->author)
                <span class="text-sm text-gray-500 flex items-center gap-1">
                    <span class="material-symbols-outlined text-[16px]">person</span>
                    {{ $noticia->author->name }}
                </span>
            @endif
        </div>

        {{-- Title --}}
        <h1 class="text-3xl md:text-5xl font-black text-text-dark dark:text-white leading-tight tracking-tight mb-8">
            {{ $noticia->titulo }}
        </h1>

        {{-- Featured Image --}}
        @if($noticia->imagen_destacada)
            <div class="w-full aspect-video rounded-2xl overflow-hidden mb-10 bg-gray-100">
                <img
                    src="{{ Storage::url($noticia->imagen_destacada) }}"
                    alt="{{ $noticia->titulo }}"
                    class="w-full h-full object-cover"
                    loading="eager"
                >
            </div>
        @endif

        {{-- Body --}}
        <div class="prose prose-lg max-w-none dark:prose-invert
                    prose-headings:font-bold prose-headings:text-text-dark dark:prose-headings:text-white
                    prose-a:text-primary hover:prose-a:underline
                    prose-img:rounded-xl prose-img:shadow-lg
                    mb-12">
            {!! $noticia->cuerpo !!}
        </div>

        {{-- Share / Divider --}}
        <div class="border-t border-gray-200 dark:border-gray-700 pt-8 mb-12">
            <p class="text-sm text-gray-500 dark:text-gray-400">Comparte esta noticia con tu comunidad</p>
        </div>

        {{-- Related Articles --}}
        @if($relacionadas->isNotEmpty())
            <section>
                <h2 class="text-2xl font-bold text-text-dark dark:text-white mb-6">Noticias Relacionadas</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relacionadas as $rel)
                        <a href="{{ route('noticias.show', $rel->slug) }}" class="group flex flex-col gap-3">
                            <div class="aspect-[4/3] w-full overflow-hidden rounded-xl bg-gray-100">
                                @if($rel->imagen_destacada)
                                    <img src="{{ Storage::url($rel->imagen_destacada) }}" alt="{{ $rel->titulo }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-300">
                                        <span class="material-symbols-outlined text-5xl">article</span>
                                    </div>
                                @endif
                            </div>
                            <div class="text-xs text-gray-500">{{ $rel->fecha_publicacion->translatedFormat('d \\d\\e F, Y') }}</div>
                            <h3 class="text-base font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors leading-snug">
                                {{ $rel->titulo }}
                            </h3>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

    </article>

</x-layouts.app>
