<x-dimension-layout
    title="Dimensión Samaritana"
    heroImage="{{ asset('images/heroes/hero_samaritana.webp') }}"
    quote="Iluminados por Cristo, el sufrimiento, la injusticia y la cruz nos interpelan a vivir como Iglesia samaritana."
    quoteSource="Aparecida No. 27"
    :opciones="[
        ['icon' => 'volunteer_activism', 'title' => 'Pastoral de la Salud', 'desc' => 'La acción de la Iglesia en el mundo de la salud, engloba todas las dimensiones de la vida de la Iglesia: evangelización y catequesis; celebración, liturgia y vida sacramental; atención, cuidado y acompañamiento de las personas.', 'color' => 'primary'],
        ['icon' => 'groups', 'title' => 'Pastoral Penitenciaria', 'desc' => 'La misión principal de la Pastoral Penitenciaria (PP) es la evangelización de las personas privadas de libertad en los diferentes centros de reclusión, así como de sus familiares, para reconstruir su dignidad de hijos de Dios.', 'color' => 'secondary'],
        ['icon' => 'support', 'title' => 'Pastoral Movilidad Humana', 'desc' => 'La Iglesia, como Madre, debe sentirse a sí misma como Iglesia sin fronteras, Iglesia familiar, atenta al fenómeno creciente de la movilidad humana en sus diversos sectores.', 'color' => 'primary'],
        ['icon' => 'church', 'title' => 'Pastoral Doctrina Social de la Iglesia', 'desc' => 'La Pastoral Social de la Iglesia no es solo intelectual o cognitivo, sino eminentemente práctico y personal. Debería cambiar nuestras vidas y ayudarnos a asumir nuestras propias responsabilidades con respecto al bien común.', 'color' => 'secondary'],
        ['icon' => 'person', 'title' => 'Pastoral de la Mujer', 'desc' => 'Las mujeres son las primeras transmisoras de la fe y colaboradoras de los pastores, quienes deben atenderlas, valorarlas y respetarlas. Para ello, se requiere propiciar una formación integral de manera que las mujeres puedan cumplir su misión en la familia y en la sociedad.', 'color' => 'primary'],
        ['icon' => 'groups', 'title' => 'Pastoral de la Ecología y el Trabajo', 'desc' => 'Responsable de promover políticas en el ámbito del desarrollo agrario-rural integral, orientadas por la Doctrina Social de la Iglesia (DSI), con la finalidad de trabajar por la construcción del Reino de Dios.', 'color' => 'secondary']
    ]"
>
    @section('introImage')
        <img src="{{ asset('images/fondos/info_samaritana.webp') }}" alt="Intro Dimension samaritana" class="w-full h-full object-cover" loading="lazy" />
    @endsection
    @slot('introText')
        <p>Fundamentados en los principios de la Doctrina Social de la Iglesia (DSI), tenemos el fin de contribuir al bien común de las personas y las poblaciones más vulnerables de nuestra realidad Diocesana, enfocados en los siguientes aspectos:</p>
        @endslot
</x-dimension-layout>
