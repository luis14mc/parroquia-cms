<x-pastoral-layout
    title="Pastoral Familiar"
    heroImage="{{ asset('images/heroes/heroe_familiar.webp') }}"
    quote="Por eso dejará el hombre a su padre y a su madre, y se unirá a su mujer, y los dos serán una sola carne."
    quoteSource="Ef 5, 31"
    :opciones="[
        ['icon' => 'favorite', 'title' => 'Matrimonios', 'desc' => 'Acompañamiento a parejas casadas para fortalecer su vínculo matrimonial a la luz del Evangelio.', 'color' => 'secondary'],
        ['icon' => 'family_restroom', 'title' => 'Preparación Pre-matrimonial', 'desc' => 'Formación integral para parejas que se preparan para recibir el sacramento del Matrimonio.', 'color' => 'primary'],
        ['icon' => 'child_care', 'title' => 'Familia y Crianza', 'desc' => 'Orientación cristiana para padres en la educación y formación en valores de sus hijos.', 'color' => 'secondary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_familiar.webp') }}" alt="Intro Pastoral Familiar" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>Formar, asistir y acompañar a las familias, "comunidades salvadas y salvadoras", para ayudarlas a cumplir su vocación y su misión en la Iglesia y en el mundo. <br> <br> Dios ama al varón y a la mujer, creados por amor, a realizar su proyecto de amor en fidelidad hasta la muerte (SD n. 217). Tal es la vocación. Pero también les da la misión de formar una comunidad de personas, célula vital de la sociedad, en diálogo permanente con Él, y servidora de la vida humana mediante la procreación y la defensa de la misma en todas sus formas.</p>
    @endslot
</x-pastoral-layout>
