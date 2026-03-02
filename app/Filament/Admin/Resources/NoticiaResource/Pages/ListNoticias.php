<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\NoticiaResource\Pages;

use App\Filament\Admin\Resources\NoticiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNoticias extends ListRecords
{
    protected static string $resource = NoticiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Nueva Noticia'),
        ];
    }
}
