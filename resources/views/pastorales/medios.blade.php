<x-pastoral-layout
    title="Pastoral de Medios"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuD44FcGRSK4Etf-WyU8wWZDKySfla1n6918dr4T4vSLC6tSxEwj6ZlI5Eima0t6vzhlIUXzUkTiqqVSfjFEVdiDXUzmlk2LeuN1Y-GnPO-S70t2PIvgNOlp5R_LraKN6UXooeZawh1DhSohv9Cs7EQQ7Y5lDpMyXjc9dDHMiJTSpoGvYP3YkVHfOeCWmcRfRRqKYID9ksz1IsBwjr8mopkcS9rniXL-JWkIVLtfqtcCEbatsbfcLfLl9RGPigKaBqhznznhThj9Zas"
    quote="Vayan por todo el mundo y prediquen el Evangelio a toda criatura."
    quoteSource="Mc 16, 15"
    :opciones="[
        ['icon' => 'live_tv', 'title' => 'Transmisiones en Vivo', 'desc' => 'Difusión de las celebraciones eucarísticas y eventos parroquiales a través de plataformas digitales.', 'color' => 'secondary'],
        ['icon' => 'photo_camera', 'title' => 'Registro Visual', 'desc' => 'Documentación fotográfica y audiovisual de la vida parroquial para memoria y evangelización.', 'color' => 'primary'],
        ['icon' => 'share', 'title' => 'Redes Sociales', 'desc' => 'Gestión de la presencia digital de la parroquia para llegar a más personas con el mensaje de Cristo.', 'color' => 'secondary'],
        ['icon' => 'mic', 'title' => 'Sonido y Audiovisual', 'desc' => 'Soporte técnico de audio y video para las celebraciones y actividades parroquiales.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>La Pastoral de Medios de Comunicación pone la tecnología al servicio de la evangelización. En un mundo cada vez más conectado, utilizamos los medios digitales y audiovisuales como herramientas para llevar el mensaje de Cristo Resucitado más allá de las paredes del templo.</p>
        <p class="mt-4">Nuestro equipo se encarga de las transmisiones en vivo, la gestión de redes sociales, la producción de contenido y el soporte técnico que permite que nuestra comunidad se mantenga conectada y evangelice en el mundo digital.</p>
    @endslot
</x-pastoral-layout>
