<x-pastoral-layout
    title="Pastoral Infantil"
    heroImage="{{ asset('images/heroes/hero_infantil.webp') }}"
    quote="Dejen que los niños vengan a mí, y no se lo impidan, porque el Reino de Dios es de quienes son como ellos."
    quoteSource="Mc 10, 14"
    :opciones="[
        ['icon' => 'child_care', 'title' => 'Catequesis', 'desc' => 'Formación cristiana para niños y preparación para los sacramentos.', 'color' => 'primary'],
        ['icon' => 'sports_soccer', 'title' => 'Actividades Recreativas', 'desc' => 'Juegos, deportes y dinámicas para el desarrollo integral.', 'color' => 'secondary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_infantil.webp') }}" alt="Intro Pastoral Infantil" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>La Pastoral Infantil busca acompañar a los niños en su crecimiento en la fe, brindando espacios de formación, recreación y encuentro para que vivan el Evangelio con alegría y sean parte activa de la comunidad parroquial.</p>
    @endslot
</x-pastoral-layout>
