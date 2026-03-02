<x-dimension-layout
    title="Dimensión Pascual"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI"
    quote="Hagan esto en conmemoración mía."
    quoteSource="Lc 22, 19"
    :opciones="[
        ['icon' => 'church', 'title' => 'Liturgia', 'desc' => 'Cuidado y preparación de las celebraciones litúrgicas para una vivencia profunda de la fe.', 'color' => 'primary'],
        ['icon' => 'music_note', 'title' => 'Ministerio de Música', 'desc' => 'Animación musical de las celebraciones para elevar los corazones hacia Dios a través del canto.', 'color' => 'secondary'],
        ['icon' => 'menu_book', 'title' => 'Ministros de la Palabra', 'desc' => 'Proclamación digna de la Palabra de Dios durante las celebraciones eucarísticas.', 'color' => 'primary'],
        ['icon' => 'emoji_food_beverage', 'title' => 'Ministros de la Eucaristía', 'desc' => 'Servicio de distribución del Cuerpo de Cristo y atención a enfermos e impedidos.', 'color' => 'secondary'],
    ]"
>
    @slot('introText')
        <p>La Dimensión Pascual es el corazón orante de nuestra parroquia. Centrada en la celebración de la fe, la liturgia y los sacramentos, es el espacio privilegiado donde nos encontramos con Cristo vivo en su Misterio Pascual de muerte y resurrección.</p>
        <p class="mt-4">Cuidamos con esmero cada celebración litúrgica para que sea una experiencia auténtica de encuentro con Dios, alimentando la vida espiritual de toda la comunidad parroquial.</p>
    @endslot
</x-dimension-layout>
