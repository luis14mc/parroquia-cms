<x-pastoral-layout
    title="Pastoral Juvenil"
    heroImage="{{ asset('images/heroes/hero_juvenil.webp') }}"
    quote="Nadie te menosprecie por ser joven, al contrario, sé ejemplo para los creyentes en la palabra, la conducta, el amor, la fe y la pureza."
    quoteSource="1 Tim 4, 12"
    :opciones="[
        ['icon' => 'groups', 'title' => 'Grupos Juveniles', 'desc' => 'Espacios de formación, encuentro y servicio para jóvenes.', 'color' => 'primary'],
        ['icon' => 'volunteer_activism', 'title' => 'Voluntariado', 'desc' => 'Participación activa en proyectos y actividades parroquiales.', 'color' => 'secondary'],
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_juvenil.webp') }}" alt="Intro Pastoral Juvenil" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>La Pastoral Juvenil acompaña a los jóvenes en su proceso de crecimiento humano y espiritual, promoviendo espacios de encuentro, formación y servicio para que descubran su vocación y sean protagonistas en la Iglesia y la sociedad.</p>
    @endslot
</x-pastoral-layout>
