<?php

namespace App\Filament\Admin\Resources\FormularioResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class RespuestasRelationManager extends RelationManager
{
    protected static string $relationship = 'respuestas';

    protected static ?string $title = 'Respuestas recibidas';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\TextColumn::make('datos')
                    ->label('Datos enviados')
                    ->formatStateUsing(function ($state) {
                        if (is_array($state)) {
                            return collect($state)
                                ->map(fn($v, $k) => "<b>{$k}:</b> {$v}")
                                ->implode(' | ');
                        }
                        return $state;
                    })
                    ->html()
                    ->wrap()
                    ->limit(120),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Enviado')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->form(fn () => []),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
