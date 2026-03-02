<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InscripcionResource\Pages;
use App\Models\Inscripcion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class InscripcionResource extends Resource
{
    protected static ?string $model = Inscripcion::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Pastoral';

    protected static ?string $modelLabel = 'Inscripción';

    protected static ?string $pluralModelLabel = 'Inscripciones';

    protected static ?string $slug = 'inscripciones';

    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('estado', 'pendiente')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'warning';
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Inscripciones pendientes';
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

                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->disabled(),

                    Forms\Components\TextInput::make('telefono')
                        ->tel()
                        ->disabled(),

                    Forms\Components\DatePicker::make('fecha_nacimiento')
                        ->label('Fecha de nacimiento')
                        ->disabled(),

                    Forms\Components\TextInput::make('nombre_padre_madre')
                        ->label('Padre / Madre / Responsable')
                        ->disabled()
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Programa')
                ->columns(2)
                ->schema([
                    Forms\Components\Select::make('programa')
                        ->options(Inscripcion::programas())
                        ->required()
                        ->disabled(),

                    Forms\Components\Textarea::make('mensaje')
                        ->label('Notas adicionales')
                        ->rows(3)
                        ->disabled()
                        ->columnSpanFull(),
                ]),

            Forms\Components\Section::make('Gestión')
                ->schema([
                    Forms\Components\Select::make('estado')
                        ->options(Inscripcion::estados())
                        ->required()
                        ->native(false)
                        ->helperText('Cambia el estado para gestionar esta inscripción'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('programa')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Inscripcion::programas()[$state] ?? $state)
                    ->colors([
                        'primary'   => 'bautismo',
                        'success'   => 'primera_comunion',
                        'warning'   => 'confirmacion',
                        'danger'    => 'matrimonio',
                        'info'      => 'pastoral_juvenil',
                        'gray'      => 'catequesis_infantil',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('nombre_completo')
                    ->label('Solicitante')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('telefono')
                    ->searchable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Inscripcion::estados()[$state] ?? $state)
                    ->colors([
                        'warning' => 'pendiente',
                        'info'    => 'contactado',
                        'success' => 'inscrito',
                        'danger'  => 'rechazado',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Recibida')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('programa')
                    ->options(Inscripcion::programas()),

                Tables\Filters\SelectFilter::make('estado')
                    ->options(Inscripcion::estados()),
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
            'index' => Pages\ListInscripciones::route('/'),
            'edit'  => Pages\EditInscripcion::route('/{record}/edit'),
        ];
    }

    /** No se crean desde el panel, solo desde el formulario público */
    public static function canCreate(): bool
    {
        return false;
    }
}
