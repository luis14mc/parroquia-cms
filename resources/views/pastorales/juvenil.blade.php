<x-pastoral-layout
    title="Pastoral Juvenil"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuB8C8MM8JZtblxXv6r3n4zzYeHctcxxpBpT6MBlAw4uZQgoTVR0FDHmr6EiKmVqQkWcbO54FB-IBzg_GAwR3OxU8zEo0PlMFn6T2aM3R336DhqzfYbDA8Ui4GjIe9O5OdNlEUuerH3k0tLg8xdBEwB8pBIItttOxruNso0swNLPu6Wt6K0AwbdR6xrjdM8xfzV4LutNOdyYkf7nZpnYK9KMeJAdOik2T9vwrlI1DF2pwbqnEJbiSPqCXfKtVV5h12chPlMbPXwjXD4"
    quote="Que nadie te menosprecie por tu juventud; al contrario, sé ejemplo para los fieles en palabra, conducta, amor, fe y pureza."
    quoteSource="1 Tim 4, 12"
    :opciones="[
        ['icon' => 'groups', 'title' => 'Encuentros Semanales', 'desc' => 'Reuniones de formación, oración y convivencia para jóvenes que buscan crecer en su fe.', 'color' => 'secondary'],
        ['icon' => 'self_improvement', 'title' => 'Retiros Espirituales', 'desc' => 'Experiencias profundas de encuentro con Dios que transforman la vida de nuestros jóvenes.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Servicio Comunitario', 'desc' => 'Proyectos de acción social donde los jóvenes ponen su fe al servicio de los más necesitados.', 'color' => 'secondary'],
    ]"
>
    @slot('introText')
        <p>La Pastoral Juvenil es un espacio vibrante para jóvenes que desean vivir su fe de manera auténtica y comprometida. Aquí encuentran un lugar de pertenencia donde pueden compartir sus inquietudes, fortalecer su relación con Dios y construir amistades verdaderas.</p>
        <p class="mt-4">A través de encuentros semanales, retiros, actividades deportivas, culturales y de servicio, nuestros jóvenes descubren que ser cristiano es una aventura apasionante que transforma sus vidas y su entorno.</p>
    @endslot
</x-pastoral-layout>
