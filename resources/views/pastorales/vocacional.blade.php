<x-pastoral-layout
    title="Pastoral Vocacional"
    heroImage="{{ asset('images/heroes/Hero_vocacional.webp') }}"
    quote="Pidan al dueño de la mies que envíe trabajadores a su campo."
    quoteSource="Mt 9, 38"
    :opciones="[
        ['icon' => 'school', 'title' => 'Orientación Vocacional', 'desc' => 'Acompañamiento en el discernimiento de la vocación cristiana.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Testimonios', 'desc' => 'Espacios para compartir experiencias vocacionales.', 'color' => 'secondary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_vocacional.webp') }}" alt="Intro Pastoral Vocacional" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>La Pastoral Vocacional acompaña a quienes buscan descubrir y responder a la llamada de Dios, ofreciendo espacios de formación, oración y testimonio para el discernimiento vocacional.</p>
    @endslot
</x-pastoral-layout>
