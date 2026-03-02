<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\IntencionResource\Pages;
use App\Models\Intencion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class IntencionResource extends Resource
{
    protected static ?string $model = Intencion::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $navigationGroup = 'Pastoral';

    protected static ?string $modelLabel = 'Intención';

    protected static ?string $pluralModelLabel = 'Intenciones';

    protected static ?string $slug = 'intenciones';

    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('estado', 'pendiente')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'danger';
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Intenciones pendientes';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\Section::make('Datos del Solicitante')
                ->columns(2)
                ->schema([

                    Forms\Components\TextInput::make('nombre_completo')
                        ->required()
                        ->maxLength(255)
                        ->disabled(),

                    Forms\Components\TextInput::make('telefono')
                        ->tel()
                        ->disabled(),
                ]),

            Forms\Components\Section::make('Intención')
                ->columns(2)
                ->schema([

                    Forms\Components\Select::make('tipo')
                        ->options(Intencion::tipos())
                        ->required()
                        ->disabled(),

                    Forms\Components\DatePicker::make('fecha_deseada')
                        ->label('Fecha deseada para la misa')
                        ->disabled(),

                    Forms\Components\TextInput::make('intencion')
                        ->label('Nombre de la intención')
                        ->required()
                        ->disabled()
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('mensaje')
                        ->rows(4)
                        ->disabled()
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Gestión')
                ->schema([
                    Forms\Components\Select::make('estado')
                        ->options(Intencion::estados())
                        ->required()
                        ->native(false)
                        ->helperText('Cambia el estado para gestionar esta intención'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Intencion::tipos()[$state] ?? $state)
                    ->colors([
                        'danger'  => 'salud',
                        'gray'    => 'difuntos',
                        'success' => 'accion_gracias',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('nombre_completo')
                    ->label('Solicitante')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('intencion')
                    ->label('Intención')
                    ->limit(40)
                    ->searchable(),

                Tables\Columns\TextColumn::make('fecha_deseada')
                    ->label('Fecha Misa')
                    ->date('d/m/Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Intencion::estados()[$state] ?? $state)
                    ->colors([
                        'warning' => 'pendiente',
                        'info'    => 'leida',
                        'success' => 'incluida',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Recibida')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('tipo')
                    ->options(Intencion::tipos()),

                Tables\Filters\SelectFilter::make('estado')
                    ->options(Intencion::estados()),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Gestionar'),
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
            'index' => Pages\ListIntenciones::route('/'),
            'edit'  => Pages\EditIntencion::route('/{record}/edit'),
        ];
    }

    /** No se pueden crear desde el panel, solo desde el frontend */
    public static function canCreate(): bool
    {
        return false;
    }
}
