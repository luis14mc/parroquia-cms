<?php

namespace App\Filament\Resources\PastoralResource\Pages;

use App\Filament\Resources\PastoralResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPastorals extends ListRecords
{
    protected static string $resource = PastoralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
