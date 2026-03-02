<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\NoticiaResource\Pages;

use App\Filament\Admin\Resources\NoticiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNoticia extends EditRecord
{
    protected static string $resource = NoticiaResource::class;

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
