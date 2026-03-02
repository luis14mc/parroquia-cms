<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContenidoResource\Pages;

use App\Filament\Admin\Resources\ContenidoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContenidos extends ListRecords
{
    protected static string $resource = ContenidoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Nuevo Contenido'),
        ];
    }
}
