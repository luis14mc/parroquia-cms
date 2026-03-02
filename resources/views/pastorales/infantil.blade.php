<x-pastoral-layout
    title="Pastoral Infantil"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuBJx6bQ8AuCiISJq8k2hF-gq8_b2_-n46mLxcNGlxw3eOzRTzMlvxJjgx1Hy7TZA2y7LhJhNXQCzGBCCbXbcUxQIWGpmg3IvEgq2kZ_L3oy00Cv86rdDKEBqR_WGT4PW_HxvH37qrLn3FkYh3F6GhGZkq2cSb4hXGEPEiZ_qQXA0oIFbHcqm6h1Jm1oSBLRuKwqLFhN0y0Nz_Sp3sMjS5q7nVlOkPcmBvK4ViHlTlXaHXkrCdK0X7D7ByMFCk9P7kw1RhJ8bBLYH0"
    quote="Dejen que los niños vengan a mí, y no se lo impidan, porque el reino de los cielos es de quienes son como ellos."
    quoteSource="Mt 19, 14"
    :opciones="[
        ['icon' => 'child_care', 'title' => 'Catequesis Infantil', 'desc' => 'Formación en la fe adaptada a los niños, preparándolos para recibir los sacramentos de iniciación cristiana.', 'color' => 'primary'],
        ['icon' => 'celebration', 'title' => 'Liturgia Infantil', 'desc' => 'Celebraciones especiales donde los niños participan activamente y aprenden a vivir la liturgia de manera significativa.', 'color' => 'secondary'],
        ['icon' => 'palette', 'title' => 'Actividades Formativas', 'desc' => 'Talleres creativos, dinámicas y actividades lúdicas que transmiten los valores del Evangelio a los más pequeños.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>La Pastoral Infantil se dedica a la formación integral de los niños en la fe católica, acompañándolos en su crecimiento espiritual desde sus primeros años. A través de actividades adaptadas a su edad, los niños descubren el amor de Dios y aprenden a vivir como discípulos de Jesús.</p>
        <p class="mt-4">Nuestro objetivo es sembrar las semillas de la fe en los corazones de los más pequeños, creando un ambiente de alegría, acogida y aprendizaje donde cada niño pueda experimentar la cercanía de Dios en su vida cotidiana.</p>
    @endslot
</x-pastoral-layout>
