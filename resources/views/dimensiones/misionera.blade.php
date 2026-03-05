<x-dimension-layout
    title="Dimensión Misionera"
    heroImage="{{ asset('images/heroes/hero_misionera.webp') }}"
    quote="Sentíamos tanto afecto por ustedes, que estábamos dispuestos a entregarles, no solo la Buena Noticia de Dios, sino también nuestra propia vida."
    quoteSource="1 Tes. 2, 8"
    :opciones="[
        ['icon' => 'family_restroom', 'title' => 'La Familia', 'desc' => 'La familia como primera escuela de fe y misión, donde se transmite el Evangelio de generación en generación.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Promoción Humana', 'desc' => 'Servicio integral a la persona, atendiendo tanto las necesidades espirituales como materiales.', 'color' => 'secondary'],
        ['icon' => 'child_care', 'title' => 'Niños y Jóvenes', 'desc' => 'Formación misionera de las nuevas generaciones, sembrando la semilla del Evangelio en los corazones jóvenes.', 'color' => 'primary'],
    ]"
>
     @section('introImage')
        <img src="{{ asset('images/fondos/info_misionera.webp') }}" alt="Intro Dimension Misionera" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>El misionero es el hombre de la caridad para poder anunciar a todo hombre que es amado por Dios y que él mismo puede amar, debe dar testimonio de caridad para con todos, gastando la vida por el prójimo. El misionero es el "hermano universal"; lleva consigo el espíritu de la Iglesia, es signo del amor de Dios en el mundo, que es amor sin exclusión ni preferencia.</p>
    @endslot
</x-dimension-layout>
