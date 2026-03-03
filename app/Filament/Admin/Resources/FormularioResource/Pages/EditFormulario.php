<?php

namespace App\Filament\Admin\Resources\FormularioResource\Pages;

use App\Filament\Admin\Resources\FormularioResource;
use Filament\Resources\Pages\EditRecord;

class EditFormulario extends EditRecord
{
    protected static string $resource = FormularioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\DeleteAction::make(),
        ];
    }
}
