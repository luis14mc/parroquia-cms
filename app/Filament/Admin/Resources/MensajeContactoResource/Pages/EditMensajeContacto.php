<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\MensajeContactoResource\Pages;

use App\Filament\Admin\Resources\MensajeContactoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMensajeContacto extends EditRecord
{
    protected static string $resource = MensajeContactoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
