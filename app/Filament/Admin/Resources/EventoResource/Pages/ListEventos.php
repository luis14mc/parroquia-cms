<?php

namespace App\Filament\Admin\Resources\EventoResource\Pages;

use App\Filament\Admin\Resources\EventoResource;
use Filament\Resources\Pages\ListRecords;

class ListEventos extends ListRecords
{
    protected static string $resource = EventoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
