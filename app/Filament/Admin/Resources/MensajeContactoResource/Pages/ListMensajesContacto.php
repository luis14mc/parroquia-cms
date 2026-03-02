<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\MensajeContactoResource\Pages;

use App\Filament\Admin\Resources\MensajeContactoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMensajesContacto extends ListRecords
{
    protected static string $resource = MensajeContactoResource::class;
}
