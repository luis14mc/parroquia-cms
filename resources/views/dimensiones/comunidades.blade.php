<x-dimension-layout
    title="Comunidades"
    heroImage="{{ asset('images/heroes/hero_comunidades.webp') }}"
    quote=" Finalmente, vivan todos unidos, tengan un mismo sentir, sean compasivos, fraternos, misericordiosos y humildes."
    quoteSource="1 Pedro 3, 8"
    :opciones="[
        ['icon' => 'add', 'title' => 'Vicaría', 'desc' => 'La Vicaría de Pastoral está presidida por el Arzobispo quien delega en un sacerdote la dirección de la misma . Está integrada por todos los Decanos de las diferentes Decanaturas en las que se encuentra organizada la pastoral arquidiocesana. A dicho grupo de decanos se les conoce como el Consejo de Decanos.', 'color' => 'primary'],
        ['icon' => 'church', 'title' => 'Capillas', 'desc' => 'Formadas por un número desigual de parroquias, se conforman por razón geográfica y han sido creadas como una respuesta organizativa de la Iglesia diocesana.En cada una de ellas debe existir un Consejo de Decanatura que es formado por todos los sacerdotes que trabajan en el área de dicha decanatura y por los coordinadores parroquiales de cada una de las Dimensiones de Parroquia.', 'color' => 'secondary'],
        
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_comunidades.webp') }}" alt="Intro dimension comunidades" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>En nuestra Arquidiócesis de Tegucigalpa, para realizar la comunión entre todas las comunidades y el Arzobispo, junto con el clero de la Arquidiócesis, existe la Vicaría de Pastoral que se encarga de animar, coordinar y acompañar todas las actividades pastorales que se desarrollan en la misma Arquidiócesis.</p>
    @endslot
</x-dimension-layout>
