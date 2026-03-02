<x-sacramento-layout
    title="Reconciliación"
    subtitle="El sacramento de la misericordia de Dios"
    icon="church"
    color="primary"
    :requisitos="[
        ['icon' => 'self_improvement', 'title' => 'Examen de Conciencia', 'desc' => 'Preparación interior reflexionando sobre nuestros actos a la luz del Evangelio.'],
        ['icon' => 'favorite', 'title' => 'Arrepentimiento Sincero', 'desc' => 'Dolor de los pecados cometidos y propósito firme de enmienda.'],
        ['icon' => 'schedule', 'title' => 'Horarios Disponibles', 'desc' => 'Jueves Eucarísticos 5:00 PM – 7:00 PM, o 30 minutos antes de cada Misa.'],
    ]"
>
    @slot('description')
        <p>El sacramento de la Reconciliación o Confesión es el sacramento del perdón de los pecados cometidos después del Bautismo. A través de él, nos reconciliamos con Dios y con la Iglesia, recuperando la gracia y renovando nuestro compromiso de vida cristiana.</p>
    @endslot
</x-sacramento-layout>
