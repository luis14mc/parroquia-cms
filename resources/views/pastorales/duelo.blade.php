<x-pastoral-layout
    title="Pastoral de Duelo"
    heroImage="{{ asset('images/heroes/hero_duelo.jpg') }}"
    quote="El Señor está cerca de los que tienen el corazón quebrantado."
    quoteSource="Sal 34, 19"
    :opciones="[
        ['icon' => 'psychology', 'title' => 'Acompañamiento', 'desc' => 'Apoyo espiritual y emocional en procesos de duelo.', 'color' => 'primary'],
        ['icon' => 'favorite', 'title' => 'Oración', 'desc' => 'Espacios de oración y reflexión para encontrar sentido en la pérdida.', 'color' => 'secondary'],
        ['icon' => 'groups', 'title' => 'Comunidad', 'desc' => 'Acompañamiento en grupo para sanar en comunidad.', 'color' => 'primary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_duelo.webp') }}" alt="Intro Pastoral de Duelo" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>La Pastoral de Duelo brinda acompañamiento y consuelo a quienes atraviesan la pérdida de un ser querido, ofreciendo espacios de escucha, oración y apoyo comunitario.</p>
    @endslot
</x-pastoral-layout>
