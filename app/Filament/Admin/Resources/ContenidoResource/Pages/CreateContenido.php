<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\ContenidoResource\Pages;

use App\Filament\Admin\Resources\ContenidoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContenido extends CreateRecord
{
    protected static string $resource = ContenidoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
