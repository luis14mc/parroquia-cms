<?php

namespace App\Filament\Admin\Resources\SectorResource\Pages;

use App\Filament\Admin\Resources\SectorResource;
use Filament\Resources\Pages\ListRecords;

class ListSectores extends ListRecords
{
    protected static string $resource = SectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
