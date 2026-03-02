<x-pastoral-layout
    title="Pastoral Familiar"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuDyyYMANkdYKyUXZqRuzdHcVD0xNlUkb6EjOmW1t5PbHlDkONRr4lOpRC8KOksorxXXmTEvNJKmmWMpGahxlcppIQ823ZB7R3LMxu3K6M1A1UNA8ilkP8A7KzVfg4Z_W5XksNnOEvotuL2uD1xENoAxHmMCl7ekcbLY01wXq2o8nMI572Wx2SgfNamv2FcUAqPGGBoRyNb_Exzj9ia5Sk7Vb6umWTSifIeel97N98hYW86mII-m4y3GE25_-boMV4yJZIQZMtBR4n8"
    quote="Por eso dejará el hombre a su padre y a su madre, y se unirá a su mujer, y los dos serán una sola carne."
    quoteSource="Ef 5, 31"
    :opciones="[
        ['icon' => 'favorite', 'title' => 'Matrimonios', 'desc' => 'Acompañamiento a parejas casadas para fortalecer su vínculo matrimonial a la luz del Evangelio.', 'color' => 'secondary'],
        ['icon' => 'family_restroom', 'title' => 'Preparación Pre-matrimonial', 'desc' => 'Formación integral para parejas que se preparan para recibir el sacramento del Matrimonio.', 'color' => 'primary'],
        ['icon' => 'child_care', 'title' => 'Familia y Crianza', 'desc' => 'Orientación cristiana para padres en la educación y formación en valores de sus hijos.', 'color' => 'secondary'],
    ]"
>
    @slot('introText')
        <p>La Pastoral Familiar acompaña a los matrimonios y familias de nuestra parroquia para fortalecer los vínculos familiares a la luz del Evangelio. Creemos que la familia es la célula fundamental de la sociedad y la Iglesia doméstica donde se transmite la fe.</p>
        <p class="mt-4">A través de encuentros, retiros, talleres y acompañamiento personalizado, buscamos que cada familia viva su vocación con alegría, superando los desafíos del mundo actual con la fuerza de la fe y el amor de Cristo.</p>
    @endslot
</x-pastoral-layout>
