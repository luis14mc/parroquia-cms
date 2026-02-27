<?php

namespace App\Filament\Resources\IntencionResource\Pages;

use App\Filament\Resources\IntencionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntencion extends EditRecord
{
    protected static string $resource = IntencionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
