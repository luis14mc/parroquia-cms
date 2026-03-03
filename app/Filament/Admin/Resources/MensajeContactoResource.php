<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MensajeContactoResource\Pages;
use App\Models\MensajeContacto;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class MensajeContactoResource extends Resource
{
    protected static ?string $model = MensajeContacto::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-envelope';

    protected static string|\UnitEnum|null $navigationGroup = 'Pastoral';

    protected static ?string $modelLabel = 'Mensaje';

    protected static ?string $pluralModelLabel = 'Mensajes de Contacto';

    protected static ?string $slug = 'mensajes';

    protected static ?int $navigationSort = 3;

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('estado', 'nuevo')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'info';
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Mensajes nuevos';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Schemas\Components\Section::make('Datos del Remitente')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('nombre_completo')
                        ->required()
                        ->maxLength(255)
                        ->disabled(),

                    Forms\Components\TextInput::make('email')
                        ->label('Correo Electrónico')
                        ->email()
                        ->disabled(),
                ]),

            Schemas\Components\Section::make('Mensaje')
                ->schema([
                    Forms\Components\TextInput::make('asunto')
                        ->disabled(),

                    Forms\Components\Textarea::make('mensaje')
                        ->disabled()
                        ->rows(6),
                ]),

            Schemas\Components\Section::make('Gestión')
                ->schema([
                    Forms\Components\Select::make('estado')
                        ->options(MensajeContacto::estados())
                        ->required()
                        ->native(false),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'nuevo'      => 'info',
                        'leido'      => 'warning',
                        'respondido' => 'success',
                        default      => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => MensajeContacto::estados()[$state] ?? $state),

                Tables\Columns\TextColumn::make('nombre_completo')
                    ->label('Nombre')
                    ->searchable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('email')
                    ->label('Correo')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('asunto')
                    ->searchable()
                    ->limit(40),

                Tables\Columns\TextColumn::make('mensaje')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Recibido')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('estado')
                    ->options(MensajeContacto::estados()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMensajesContacto::route('/'),
            'edit'  => Pages\EditMensajeContacto::route('/{record}/edit'),
        ];
    }
}
