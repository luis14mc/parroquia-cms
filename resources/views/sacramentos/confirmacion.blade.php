<x-sacramento-layout
    title="Confirmación"
    subtitle="El don del Espíritu Santo"
    icon="local_fire_department"
    color="primary"
    :requisitos="[
        ['icon' => 'history_edu', 'title' => 'Fe de Bautismo', 'desc' => 'Certificado reciente y actualizado de bautismo.'],
        ['icon' => 'school', 'title' => 'Curso de Catequesis', 'desc' => 'Completar el programa de preparación (duración aproximada de 1 año).'],
        ['icon' => 'diversity_3', 'title' => 'Padrino/Madrina', 'desc' => 'Debe ser católico confirmado y mayor de edad. Si vive en pareja, casado por la Iglesia.'],
        ['icon' => 'badge', 'title' => 'Identificación', 'desc' => 'Documento de identidad del candidato y del padrino o madrina.'],
    ]"
>
    @slot('description')
        <p>Con el Bautismo y la Eucaristía, el sacramento de la Confirmación constituye el conjunto de los "sacramentos de la iniciación cristiana". Enriquece a los bautizados con una fuerza especial del Espíritu Santo, los une más firmemente a Cristo y a su Iglesia, y los fortalece para ser testigos de la fe.</p>
    @endslot
</x-sacramento-layout>
