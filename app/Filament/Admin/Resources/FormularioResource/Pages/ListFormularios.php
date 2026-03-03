<?php

namespace App\Filament\Admin\Resources\FormularioResource\Pages;

use App\Filament\Admin\Resources\FormularioResource;
use Filament\Resources\Pages\ListRecords;

class ListFormularios extends ListRecords
{
    protected static string $resource = FormularioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
