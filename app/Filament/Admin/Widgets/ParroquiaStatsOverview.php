<?php

declare(strict_types=1);

namespace App\Filament\Admin\Widgets;

use App\Models\Inscripcion;
use App\Models\Intencion;
use App\Models\MensajeContacto;
use App\Models\Noticia;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ParroquiaStatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = -2;

    protected function getStats(): array
    {
        return [
            Stat::make('Noticias Publicadas', Noticia::where('publicada', true)->count())
                ->description('Total de artículos visibles')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary')
                ->chart($this->getNoticiasChart()),

            Stat::make('Inscripciones Pendientes', Inscripcion::where('estado', 'pendiente')->count())
                ->description(Inscripcion::count() . ' inscripciones en total')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('warning')
                ->chart($this->getInscripcionesChart()),

            Stat::make('Intenciones Pendientes', Intencion::where('estado', 'pendiente')->count())
                ->description(Intencion::count() . ' intenciones en total')
                ->descriptionIcon('heroicon-m-heart')
                ->color('danger')
                ->chart($this->getIntencionesChart()),

            Stat::make('Mensajes Nuevos', MensajeContacto::where('estado', 'nuevo')->count())
                ->description(MensajeContacto::count() . ' mensajes en total')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('info'),
        ];
    }

    private function getNoticiasChart(): array
    {
        // Noticias creadas en los últimos 7 días
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $data[] = Noticia::whereDate('created_at', now()->subDays($i))->count();
        }
        return $data;
    }

    private function getInscripcionesChart(): array
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $data[] = Inscripcion::whereDate('created_at', now()->subDays($i))->count();
        }
        return $data;
    }

    private function getIntencionesChart(): array
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $data[] = Intencion::whereDate('created_at', now()->subDays($i))->count();
        }
        return $data;
    }
}
