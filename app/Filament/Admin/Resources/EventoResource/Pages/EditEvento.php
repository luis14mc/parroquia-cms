<?php

namespace App\Filament\Admin\Resources\EventoResource\Pages;

use App\Filament\Admin\Resources\EventoResource;
use Filament\Resources\Pages\EditRecord;

class EditEvento extends EditRecord
{
    protected static string $resource = EventoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\DeleteAction::make(),
        ];
    }
}
