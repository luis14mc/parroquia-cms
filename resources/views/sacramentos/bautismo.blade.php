<x-sacramento-layout
    title="Bautismo"
    subtitle="El sacramento de iniciación cristiana"
    icon="water_drop"
    color="primary"
    :requisitos="[
        ['icon' => 'description', 'title' => 'Acta de Nacimiento', 'desc' => 'Copia original reciente del registro civil del niño(a).'],
        ['icon' => 'school', 'title' => 'Charla Pre-bautismal', 'desc' => 'Asistencia obligatoria para padres y padrinos. Se imparte el primer sábado de mes.'],
        ['icon' => 'diversity_3', 'title' => 'Padrinos', 'desc' => 'Deben ser católicos confirmados. Si viven en pareja, deben estar casados por la Iglesia.'],
        ['icon' => 'badge', 'title' => 'Identificación de Padres', 'desc' => 'Documento de identidad de ambos padres del bautizando.'],
    ]"
>
    @slot('description')
        <p>El santo Bautismo es el fundamento de toda la vida cristiana y la puerta que abre el acceso a los otros sacramentos. Por el Bautismo somos liberados del pecado y regenerados como hijos de Dios, llegamos a ser miembros de Cristo y somos incorporados a la Iglesia y hechos partícipes de su misión.</p>
    @endslot
</x-sacramento-layout>
