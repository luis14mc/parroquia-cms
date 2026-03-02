<x-dimension-layout
    title="Dimensión Misionera"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuD44FcGRSK4Etf-WyU8wWZDKySfla1n6918dr4T4vSLC6tSxEwj6ZlI5Eima0t6vzhlIUXzUkTiqqVSfjFEVdiDXUzmlk2LeuN1Y-GnPO-S70t2PIvgNOlp5R_LraKN6UXooeZawh1DhSohv9Cs7EQQ7Y5lDpMyXjc9dDHMiJTSpoGvYP3YkVHfOeCWmcRfRRqKYID9ksz1IsBwjr8mopkcS9rniXL-JWkIVLtfqtcCEbatsbfcLfLl9RGPigKaBqhznznhThj9Zas"
    quote="Vayan por todo el mundo y anuncien la Buena Noticia a toda la creación."
    quoteSource="Mc 16, 15"
    :opciones="[
        ['icon' => 'family_restroom', 'title' => 'La Familia', 'desc' => 'La familia como primera escuela de fe y misión, donde se transmite el Evangelio de generación en generación.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Promoción Humana', 'desc' => 'Servicio integral a la persona, atendiendo tanto las necesidades espirituales como materiales.', 'color' => 'secondary'],
        ['icon' => 'child_care', 'title' => 'Niños y Jóvenes', 'desc' => 'Formación misionera de las nuevas generaciones, sembrando la semilla del Evangelio en los corazones jóvenes.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>El misionero es el hombre de la caridad. Para poder anunciar a todo hombre que es amado por Dios y que él mismo puede amar, debe dar testimonio de caridad para con todos, gastando la vida por el prójimo.</p>
        <p class="mt-4">El misionero es el "hermano universal"; lleva consigo el espíritu de la Iglesia, es signo del amor de Dios en el mundo, que es amor sin exclusión ni preferencia. Una Iglesia en salida que lleva la buena nueva del Evangelio a todos los rincones.</p>
    @endslot
</x-dimension-layout>
