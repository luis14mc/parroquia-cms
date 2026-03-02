<x-dimension-layout
    title="Comunidades"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuB8C8MM8JZtblxXv6r3n4zzYeHctcxxpBpT6MBlAw4uZQgoTVR0FDHmr6EiKmVqQkWcbO54FB-IBzg_GAwR3OxU8zEo0PlMFn6T2aM3R336DhqzfYbDA8Ui4GjIe9O5OdNlEUuerH3k0tLg8xdBEwB8pBIItttOxruNso0swNLPu6Wt6K0AwbdR6xrjdM8xfzV4LutNOdyYkf7nZpnYK9KMeJAdOik2T9vwrlI1DF2pwbqnEJbiSPqCXfKtVV5h12chPlMbPXwjXD4"
    quote="Donde hay dos o tres reunidos en mi nombre, allí estoy yo en medio de ellos."
    quoteSource="Mt 18, 20"
    :opciones="[
        ['icon' => 'home', 'title' => 'Comunidades de Base', 'desc' => 'Pequeños grupos que se reúnen en los hogares para compartir la Palabra y la vida en comunidad.', 'color' => 'primary'],
        ['icon' => 'church', 'title' => 'Capillas', 'desc' => 'Sedes de celebración eucarística que facilitan el acceso de los fieles en las distintas colonias.', 'color' => 'secondary'],
        ['icon' => 'diversity_3', 'title' => 'Grupos de Oración', 'desc' => 'Espacios de espiritualidad y encuentro con Dios a través de la oración comunitaria.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>La fe vivida en fraternidad. Las comunidades son el tejido vivo de nuestra parroquia, donde los fieles se reúnen en pequeños grupos para compartir la Palabra de Dios, celebrar la fe y apoyarse mutuamente en el camino cristiano.</p>
        <p class="mt-4">A través de nuestras comunidades de base, capillas y grupos de oración, construimos lazos de hermandad que fortalecen la vida parroquial y llevan la presencia de Cristo a cada rincón de nuestro territorio parroquial.</p>
    @endslot
</x-dimension-layout>
