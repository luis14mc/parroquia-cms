<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\InscripcionResource\Pages;

use App\Filament\Admin\Resources\InscripcionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscripcion extends EditRecord
{
    protected static string $resource = InscripcionResource::class;

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
