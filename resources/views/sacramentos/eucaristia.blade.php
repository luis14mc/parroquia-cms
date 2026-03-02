<x-sacramento-layout
    title="Eucaristía"
    subtitle="Fuente y cumbre de la vida cristiana"
    icon="emoji_food_beverage"
    color="secondary"
    :requisitos="[
        ['icon' => 'water_drop', 'title' => 'Fe de Bautismo', 'desc' => 'Certificado de bautismo reciente del candidato.'],
        ['icon' => 'school', 'title' => 'Catequesis', 'desc' => 'Haber cursado al menos 2 años de formación catequética.'],
        ['icon' => 'cake', 'title' => 'Edad Mínima', 'desc' => 'Tener al menos 8 años cumplidos al momento de recibir el sacramento.'],
        ['icon' => 'groups', 'title' => 'Participación Familiar', 'desc' => 'Asistencia de los padres a las reuniones de acompañamiento durante la preparación.'],
    ]"
>
    @slot('description')
        <p>La Eucaristía es el sacramento en el que recibimos el Cuerpo y la Sangre de Cristo. Es fuente y cumbre de toda la vida cristiana. En la Eucaristía se contiene todo el bien espiritual de la Iglesia, es decir, Cristo mismo, nuestra Pascua.</p>
        <p class="mt-4">La Primera Comunión es el momento en que los bautizados, habiendo alcanzado el uso de razón y preparados por la catequesis, reciben por primera vez el sacramento de la Eucaristía.</p>
    @endslot
</x-sacramento-layout>
