<?php

namespace App\Filament\Resources\PastoralResource\Pages;

use App\Filament\Resources\PastoralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPastoral extends EditRecord
{
    protected static string $resource = PastoralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
