<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\IntencionResource\Pages;

use App\Filament\Admin\Resources\IntencionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntencion extends EditRecord
{
    protected static string $resource = IntencionResource::class;

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
