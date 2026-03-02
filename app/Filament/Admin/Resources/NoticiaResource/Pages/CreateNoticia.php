<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\NoticiaResource\Pages;

use App\Filament\Admin\Resources\NoticiaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNoticia extends CreateRecord
{
    protected static string $resource = NoticiaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
