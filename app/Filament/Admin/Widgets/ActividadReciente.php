<?php

declare(strict_types=1);

namespace App\Filament\Admin\Widgets;

use App\Filament\Admin\Resources\IntencionResource;
use App\Models\Intencion;
use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ActividadReciente extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected static ?string $heading = 'Actividad Reciente';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Intencion::query()
                    ->where('estado', 'pendiente')
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('tipo')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'misa' => 'primary',
                        'difuntos' => 'danger',
                        'accion_gracias' => 'success',
                        'sanacion' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('nombre_completo')
                    ->label('Solicitante')
                    ->searchable(),
                Tables\Columns\TextColumn::make('intencion')
                    ->limit(50)
                    ->label('Intención'),
                Tables\Columns\TextColumn::make('fecha_deseada')
                    ->label('Fecha deseada')
                    ->date('d/m/Y'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Recibida')
                    ->since(),
            ])
            ->actions([
                Action::make('ver')
                    ->url(fn (Intencion $record): string =>
                        IntencionResource::getUrl('edit', ['record' => $record]))
                    ->icon('heroicon-m-eye'),
            ])
            ->paginated(false)
            ->emptyStateHeading('Sin intenciones pendientes')
            ->emptyStateDescription('Todas las intenciones han sido procesadas.')
            ->emptyStateIcon('heroicon-o-check-circle');
    }
}
