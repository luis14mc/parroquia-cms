<x-sacramento-layout
    title="Matrimonio"
    subtitle="Alianza de vida y amor"
    icon="favorite"
    color="secondary"
    :requisitos="[
        ['icon' => 'folder_shared', 'title' => 'Partidas de Bautismo', 'desc' => 'De ambos contrayentes. Deben ser recientes (menos de 6 meses) y legalizadas por la diócesis.'],
        ['icon' => 'handshake', 'title' => 'Curso Prematrimonial', 'desc' => 'Certificado de finalización del curso de preparación para la vida conyugal.'],
        ['icon' => 'calendar_month', 'title' => 'Entrevista Pastoral', 'desc' => 'Programar entrevista con el Párroco al menos 6 meses antes de la fecha deseada.'],
        ['icon' => 'badge', 'title' => 'Documentos Civiles', 'desc' => 'Acta de nacimiento y documento de identidad de ambos contrayentes.'],
        ['icon' => 'local_fire_department', 'title' => 'Fe de Confirmación', 'desc' => 'Constancia de haber recibido el sacramento de la Confirmación.'],
        ['icon' => 'groups', 'title' => 'Testigos', 'desc' => 'Dos testigos mayores de edad con documento de identidad vigente.'],
    ]"
>
    @slot('description')
        <p>La alianza matrimonial, por la que el varón y la mujer constituyen entre sí un consorcio de toda la vida, ordenado por su misma índole natural al bien de los cónyuges y a la generación y educación de la prole, fue elevada por Cristo a la dignidad de sacramento.</p>
    @endslot
</x-sacramento-layout>
