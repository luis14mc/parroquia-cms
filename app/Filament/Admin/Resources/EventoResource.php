<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EventoResource\Pages;
use App\Models\Evento;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class EventoResource extends Resource
{
    protected static ?string $model = Evento::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-calendar-days';

    protected static string|\UnitEnum|null $navigationGroup = 'Contenido';

    protected static ?string $modelLabel = 'Evento';

    protected static ?string $pluralModelLabel = 'Eventos';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Schemas\Components\Section::make('Información del Evento')
                ->columns(2)
                ->schema([

                    Forms\Components\TextInput::make('titulo')
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('descripcion')
                        ->rows(3)
                        ->columnSpanFull(),

                    Forms\Components\DatePicker::make('fecha')
                        ->required(),

                    Forms\Components\TimePicker::make('hora')
                        ->seconds(false),

                    Forms\Components\TextInput::make('ubicacion')
                        ->maxLength(255),

                    Forms\Components\Toggle::make('activo')
                        ->label('Evento activo')
                        ->helperText('Visible en el sitio web')
                        ->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('fecha')
                    ->date('d/m/Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('hora')
                    ->time('h:i A'),

                Tables\Columns\TextColumn::make('ubicacion')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('activo')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('fecha', 'asc')
            ->filters([
                Tables\Filters\TernaryFilter::make('activo'),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListEventos::route('/'),
            'create' => Pages\CreateEvento::route('/create'),
            'edit'   => Pages\EditEvento::route('/{record}/edit'),
        ];
    }
}
