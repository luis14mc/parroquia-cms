<x-pastoral-layout
    title="Pastoral de Duelo"
    heroImage="{{ asset('images/heroes/hero_duelo.jpg') }}"
    quote="Bienaventurados los que lloran, porque ellos serán consolados."
    quoteSource="Mt 5, 4"
    :opciones="[
        ['icon' => 'psychology', 'title' => 'Acompañamiento', 'desc' => 'Apoyo espiritual y emocional en procesos de duelo.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Grupos de Apoyo', 'desc' => 'Espacios para compartir y sanar en comunidad.', 'color' => 'secondary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_duelo.webp') }}" alt="Intro Pastoral de Duelo" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>La Pastoral de Duelo brinda acompañamiento y consuelo a quienes atraviesan la pérdida de un ser querido, ofreciendo espacios de escucha, oración y apoyo comunitario para sanar y encontrar esperanza.</p>
    @endslot
</x-pastoral-layout>
