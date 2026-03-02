<x-dimension-layout
    title="Dimensión Samaritana"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuDyyYMANkdYKyUXZqRuzdHcVD0xNlUkb6EjOmW1t5PbHlDkONRr4lOpRC8KOksorxXXmTEvNJKmmWMpGahxlcppIQ823ZB7R3LMxu3K6M1A1UNA8ilkP8A7KzVfg4Z_W5XksNnOEvotuL2uD1xENoAxHmMCl7ekcbLY01wXq2o8nMI572Wx2SgfNamv2FcUAqPGGBoRyNb_Exzj9ia5Sk7Vb6umWTSifIeel97N98hYW86mII-m4y3GE25_-boMV4yJZIQZMtBR4n8"
    quote="Sentíamos tanto afecto por ustedes, que estábamos dispuestos a entregarles, no solo la Buena Noticia de Dios, sino también nuestra propia vida."
    quoteSource="1 Tes. 2, 8"
    :opciones="[
        ['icon' => 'family_restroom', 'title' => 'La Familia', 'desc' => 'Atención integral a las familias de la comunidad, fortaleciendo los lazos y la vida familiar cristiana.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Promoción Humana', 'desc' => 'Acciones concretas de caridad, asistencia social y dignificación de la persona humana.', 'color' => 'secondary'],
        ['icon' => 'groups', 'title' => 'Niños y Jóvenes', 'desc' => 'Acompañamiento y formación de las nuevas generaciones en valores y fe cristiana.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>La Dimensión Samaritana es el rostro misericordioso de nuestra parroquia. Inspirados en la parábola del Buen Samaritano, nos dedicamos a identificar y atender las necesidades más urgentes de nuestros hermanos, especialmente los más vulnerables de nuestra comunidad.</p>
        <p class="mt-4">A través de acciones concretas de caridad, promovemos la dignidad humana y construimos una sociedad más justa siguiendo el ejemplo de Cristo que pasó haciendo el bien.</p>
    @endslot
</x-dimension-layout>
