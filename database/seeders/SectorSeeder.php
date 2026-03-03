<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    public function run(): void
    {
        $sectores = [
            ['nombre' => 'Sede Parroquial',     'descripcion' => 'Templo principal en Colonia Loarque'],
            ['nombre' => 'Capilla Yaguacire',   'descripcion' => 'Comunidad de Yaguacire'],
            ['nombre' => 'Altos de Loarque',    'descripcion' => 'Comunidad Altos de Loarque'],
            ['nombre' => 'Las Mercedes',        'descripcion' => 'Comunidad Las Mercedes'],
            ['nombre' => 'Camino Neo-catecumenal', 'descripcion' => 'Comunidad del Camino Neo-catecumenal'],
        ];

        foreach ($sectores as $sector) {
            Sector::updateOrCreate(
                ['nombre' => $sector['nombre']],
                $sector
            );
        }
    }
}
