<x-sacramento-layout
    title="Unción de Enfermos"
    subtitle="Consuelo y fortaleza en la enfermedad"
    icon="healing"
    color="secondary"
    :requisitos="[
        ['icon' => 'call', 'title' => 'Solicitar Visita', 'desc' => 'Contactar la oficina parroquial o directamente a un sacerdote para programar la visita.'],
        ['icon' => 'health_and_safety', 'title' => 'Condición del Enfermo', 'desc' => 'Pueden recibir este sacramento los fieles que comienzan a estar en peligro por enfermedad o vejez.'],
        ['icon' => 'family_restroom', 'title' => 'Acompañamiento Familiar', 'desc' => 'Se recomienda la presencia de familiares para acompañar al enfermo durante la celebración.'],
    ]"
>
    @slot('description')
        <p>La Unción de los Enfermos otorga al enfermo consuelo, paz y ánimo para soportar cristianamente los sufrimientos de la enfermedad o de la vejez. También perdona los pecados si el enfermo no ha podido obtener el perdón por el sacramento de la Reconciliación.</p>
        <p class="mt-4">No hay que esperar a estar en peligro extremo para recibir este sacramento. El momento oportuno es cuando el fiel comienza a debilitarse por enfermedad grave o por la edad avanzada.</p>
    @endslot
</x-sacramento-layout>
