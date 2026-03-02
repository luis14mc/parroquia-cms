<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContenidoResource\Pages;

use App\Filament\Admin\Resources\ContenidoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContenido extends EditRecord
{
    protected static string $resource = ContenidoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
