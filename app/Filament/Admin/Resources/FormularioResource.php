<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\FormularioResource\Pages;
use App\Models\Formulario;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class FormularioResource extends Resource
{
    protected static ?string $model = Formulario::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-plus';

    protected static string|\UnitEnum|null $navigationGroup = 'Contenido';

    protected static ?string $modelLabel = 'Formulario';

    protected static ?string $pluralModelLabel = 'Formularios';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Schemas\Components\Section::make('Información del Formulario')
                ->columns(2)
                ->schema([

                    Forms\Components\TextInput::make('titulo')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, ?string $state, Forms\Set $set) {
                            if ($operation === 'create' && $state) {
                                $set('slug', Str::slug($state));
                            }
                        }),

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true),

                    Forms\Components\Textarea::make('descripcion')
                        ->rows(2)
                        ->columnSpanFull(),
                ]),

            Schemas\Components\Section::make('Campos del Formulario')
                ->description('Define los campos que tendrá el formulario. El orden aquí será el orden en pantalla.')
                ->schema([
                    Forms\Components\Repeater::make('campos')
                        ->schema([
                            Forms\Components\TextInput::make('nombre')
                                ->required()
                                ->label('Nombre del campo')
                                ->helperText('Identificador interno (ej: nombre_completo)'),

                            Forms\Components\TextInput::make('etiqueta')
                                ->required()
                                ->label('Etiqueta visible')
                                ->helperText('Lo que verá el usuario (ej: Nombre Completo)'),

                            Forms\Components\Select::make('tipo')
                                ->required()
                                ->options(Formulario::tiposCampo())
                                ->default('texto'),

                            Forms\Components\Toggle::make('requerido')
                                ->label('¿Es obligatorio?')
                                ->default(false),

                            Forms\Components\TextInput::make('opciones')
                                ->label('Opciones (separadas por coma)')
                                ->helperText('Solo para tipo "Selección": opcion1, opcion2, opcion3')
                                ->visible(fn (Forms\Get $get): bool => $get('tipo') === 'select'),
                        ])
                        ->columns(2)
                        ->defaultItems(1)
                        ->addActionLabel('Agregar campo')
                        ->reorderable()
                        ->collapsible()
                        ->columnSpanFull(),
                ]),

            Schemas\Components\Section::make('Visibilidad')
                ->columns(2)
                ->schema([
                    Forms\Components\Toggle::make('activo')
                        ->label('Formulario activo')
                        ->helperText('Acepta respuestas')
                        ->default(true),

                    Forms\Components\Toggle::make('mostrar_en_home')
                        ->label('Mostrar en Home')
                        ->helperText('Visible como CTA en la página principal')
                        ->default(false),

                    Forms\Components\DatePicker::make('fecha_inicio')
                        ->label('Fecha de inicio')
                        ->helperText('Dejar vacío para sin restricción'),

                    Forms\Components\DatePicker::make('fecha_fin')
                        ->label('Fecha de fin')
                        ->helperText('Dejar vacío para sin restricción'),
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

                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\IconColumn::make('activo')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\IconColumn::make('mostrar_en_home')
                    ->label('En Home')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('respuestas_count')
                    ->counts('respuestas')
                    ->label('Respuestas')
                    ->sortable(),

                Tables\Columns\TextColumn::make('fecha_inicio')
                    ->date('d/m/Y')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('fecha_fin')
                    ->date('d/m/Y')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('activo'),
                Tables\Filters\TernaryFilter::make('mostrar_en_home')
                    ->label('En Home'),
            ])
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

    public static function getRelations(): array
    {
        return [
            \App\Filament\Admin\Resources\FormularioResource\RelationManagers\RespuestasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFormularios::route('/'),
            'create' => Pages\CreateFormulario::route('/create'),
            'edit'   => Pages\EditFormulario::route('/{record}/edit'),
        ];
    }
}
