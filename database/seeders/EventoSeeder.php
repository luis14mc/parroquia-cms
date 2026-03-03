<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        $eventos = [
            [
                'titulo'      => 'Retiro de Cuaresma',
                'descripcion' => 'Un fin de semana de reflexión y oración para preparar nuestros corazones.',
                'fecha'       => '2026-03-08',
                'hora'        => '08:00',
                'ubicacion'   => 'Sede Parroquial',
            ],
            [
                'titulo'      => 'Jornada de Limpieza',
                'descripcion' => 'Voluntariado comunitario para embellecer nuestro templo y alrededores.',
                'fecha'       => '2026-03-15',
                'hora'        => '07:00',
                'ubicacion'   => 'Sede Parroquial',
            ],
            [
                'titulo'      => 'Concierto Sacro',
                'descripcion' => 'Noche de música sacra con el coro parroquial y artistas invitados.',
                'fecha'       => '2026-03-22',
                'hora'        => '18:00',
                'ubicacion'   => 'Sede Parroquial',
            ],
        ];

        foreach ($eventos as $evento) {
            Evento::updateOrCreate(
                ['titulo' => $evento['titulo'], 'fecha' => $evento['fecha']],
                $evento
            );
        }
    }
}
