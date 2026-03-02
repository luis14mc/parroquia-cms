<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'inscripciones';

    protected $fillable = [
        'programa',
        'nombre_completo',
        'email',
        'telefono',
        'fecha_nacimiento',
        'nombre_padre_madre',
        'mensaje',
        'estado',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];

    // ── Scopes ────────────────────────────────────────────

    public function scopePendientes(Builder $query): Builder
    {
        return $query->where('estado', 'pendiente');
    }

    public function scopePrograma(Builder $query, string $programa): Builder
    {
        return $query->where('programa', $programa);
    }

    // ── Helpers ───────────────────────────────────────────

    /** Programas / sacramentos disponibles para inscripción */
    public static function programas(): array
    {
        return [
            'bautismo'           => 'Bautismo',
            'primera_comunion'   => 'Primera Comunión',
            'confirmacion'       => 'Confirmación',
            'matrimonio'         => 'Matrimonio',
            'pastoral_juvenil'   => 'Pastoral Juvenil',
            'catequesis_infantil' => 'Catequesis Infantil',
        ];
    }

    /** Estados disponibles */
    public static function estados(): array
    {
        return [
            'pendiente'  => 'Pendiente',
            'contactado' => 'Contactado',
            'inscrito'   => 'Inscrito',
            'rechazado'  => 'Rechazado',
        ];
    }

    /** Iconos Material Symbols para cada programa */
    public static function iconos(): array
    {
        return [
            'bautismo'            => 'water_drop',
            'primera_comunion'    => 'menu_book',
            'confirmacion'        => 'local_fire_department',
            'matrimonio'          => 'favorite',
            'pastoral_juvenil'    => 'groups',
            'catequesis_infantil' => 'school',
        ];
    }

    /** Colores para cada programa */
    public static function colores(): array
    {
        return [
            'bautismo'            => 'primary',
            'primera_comunion'    => 'secondary',
            'confirmacion'        => 'primary',
            'matrimonio'          => 'secondary',
            'pastoral_juvenil'    => 'primary',
            'catequesis_infantil' => 'secondary',
        ];
    }

    /** Descripciones cortas para cada programa */
    public static function descripciones(): array
    {
        return [
            'bautismo'            => 'Inscribe a tu hijo(a) para recibir el sacramento del Bautismo.',
            'primera_comunion'    => 'Catequesis de preparación para la Primera Comunión.',
            'confirmacion'        => 'Programa de formación para recibir el sacramento de la Confirmación.',
            'matrimonio'          => 'Cursos pre-matrimoniales y preparación sacramental.',
            'pastoral_juvenil'    => 'Únete a nuestro grupo juvenil y crece en comunidad.',
            'catequesis_infantil' => 'Formación en la fe para los más pequeños de la casa.',
        ];
    }
}
