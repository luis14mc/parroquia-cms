<x-pastoral-layout
    title="Pastoral de Duelo"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuAM9bD_gDxR0N4Xz9jWlfXo5bIUyB8N9QH8a_3IH8FMp83z5g2nROPmRbMVnvJ4wDk3M9_IU_MjCwE9GkLZ2aFq3Y7Y5R4CMHCJhUxc3kRZnz_l45QWyTzqT6t4FuN0O3QCebVd2s_ey_34S8QvvW5UGbw3G9YC8M5pIZwdlnUgn9JhJ3DVUF7nJ6-HS3v6rD5FPkONt5OvLqgJFDz_V7k2_J8WiWZ4THNpT3bm0wZ0dQKPEuP0BLU7_g4r6DPmkqE9hIuLPR5bA"
    quote="Bienaventurados los que lloran, porque ellos serán consolados."
    quoteSource="Mt 5, 4"
    :opciones="[
        ['icon' => 'sentiment_satisfied', 'title' => 'Acompañamiento Personal', 'desc' => 'Apoyo espiritual y emocional individualizado para quienes atraviesan el duelo por la pérdida de un ser querido.', 'color' => 'primary'],
        ['icon' => 'groups', 'title' => 'Grupos de Apoyo', 'desc' => 'Encuentros comunitarios donde las personas comparten su experiencia y encuentran consuelo en la fe y la fraternidad.', 'color' => 'secondary'],
        ['icon' => 'menu_book', 'title' => 'Formación y Espiritualidad', 'desc' => 'Talleres y retiros que ayudan a comprender el duelo desde la fe cristiana y la esperanza de la resurrección.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>La Pastoral de Duelo acompaña a las personas y familias que atraviesan el dolor de la pérdida de un ser querido. Desde la fe en Cristo Resucitado, ofrecemos un espacio de escucha, consuelo y esperanza para quienes enfrentan uno de los momentos más difíciles de la vida.</p>
        <p class="mt-4">Nuestro ministerio se fundamenta en la certeza de que la muerte no tiene la última palabra. A través del acompañamiento fraterno y la oración, ayudamos a vivir el duelo como un camino de sanación interior, sostenidos por la esperanza cristiana en la vida eterna.</p>
    @endslot
</x-pastoral-layout>
