<x-dimension-layout
    title="Dimensión Pascual"
    heroImage="{{ asset('images/heroes/hero_pascual.webp') }}"
    quote="Se reunían frecuentemente para escuchar la enseñanza de los apóstoles, y participar en la vida común, en la fracción del pan y en las oraciones."
    quoteSource="Hch. 2, 42"
    :opciones="[
        ['icon' => 'church', 'title' => 'Pastoral Litúrgica', 'desc' => 'La liturgia permite al pueblo de Dios celebrar su fe, al participar de la mesa de la Palabra y el banquete eucarístico, obtener la gracia santificante en la recepción de los sacramentos, orar en comunidad y por la comunidad en la Liturgia de las Horas y realizar la meditación orante de la Palabra en la “Lectio Divina”.', 'color' => 'primary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_pascual.webp') }}" alt="Intro Dimensión Pascual" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>La Iglesia evangeliza y se evangeliza a sí misma con la belleza de la liturgia, la cual también es celebración de la actividad evangelizadora y fuente de un renovado impulso donativo.</p>
        <p class="mt-4">Se busca fortalecer la celebración de la fe del pueblo de Dios, tanto en forma comunitaria, mediante la acción litúrgica y la piedad popular, como de manera individual, mediante la oración personal y el encuentro con el Señor Jesús.</p>
    @endslot
</x-dimension-layout>
