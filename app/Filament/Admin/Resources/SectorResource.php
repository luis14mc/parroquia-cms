<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SectorResource\Pages;
use App\Models\Sector;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class SectorResource extends Resource
{
    protected static ?string $model = Sector::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-map-pin';

    protected static string|\UnitEnum|null $navigationGroup = 'Pastoral';

    protected static ?string $modelLabel = 'Sector';

    protected static ?string $pluralModelLabel = 'Sectores';

    protected static ?string $slug = 'sectores';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Schemas\Components\Section::make('Datos del Sector')
                ->columns(2)
                ->schema([

                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true),

                    Forms\Components\TextInput::make('descripcion')
                        ->maxLength(255),

                    Forms\Components\Toggle::make('activo')
                        ->label('Sector activo')
                        ->helperText('Si está desactivado, no se podrá enviar intenciones a este sector')
                        ->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('descripcion')
                    ->limit(50)
                    ->toggleable(),

                Tables\Columns\TextColumn::make('intenciones_count')
                    ->counts('intenciones')
                    ->label('Intenciones')
                    ->sortable(),

                Tables\Columns\IconColumn::make('activo')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('nombre')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSectores::route('/'),
            'create' => Pages\CreateSector::route('/create'),
            'edit'   => Pages\EditSector::route('/{record}/edit'),
        ];
    }
}
