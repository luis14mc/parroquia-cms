<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContenidoResource\Pages;
use App\Models\Contenido;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ContenidoResource extends Resource
{
    protected static ?string $model = Contenido::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-pencil-square';

    protected static string|\UnitEnum|null $navigationGroup = 'Contenido';

    protected static ?string $modelLabel = 'Contenido';

    protected static ?string $pluralModelLabel = 'Contenidos';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Schemas\Components\Section::make('Identificación')
                ->columns(2)
                ->schema([

                    Forms\Components\TextInput::make('clave')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->helperText('Ej: home.hero.titulo — usada para buscar el valor en Blade')
                        ->placeholder('seccion.componente.campo'),

                    Forms\Components\TextInput::make('etiqueta')
                        ->required()
                        ->maxLength(255)
                        ->helperText('Nombre legible para identificar este contenido')
                        ->placeholder('Título del hero de Inicio'),

                    Forms\Components\Select::make('seccion')
                        ->options(Contenido::secciones())
                        ->required()
                        ->searchable(),

                    Forms\Components\Select::make('tipo')
                        ->options(Contenido::tipos())
                        ->required()
                        ->reactive()
                        ->default('texto'),
                ]),

            Schemas\Components\Section::make('Valor')
                ->schema([

                    // Texto corto
                    Forms\Components\TextInput::make('valor')
                        ->label('Valor (texto)')
                        ->maxLength(65535)
                        ->visible(fn (Get $get): bool => $get('tipo') === 'texto'),

                    // Texto largo
                    Forms\Components\Textarea::make('valor')
                        ->label('Valor (texto largo)')
                        ->rows(5)
                        ->visible(fn (Get $get): bool => $get('tipo') === 'textarea'),

                    // HTML con editor enriquecido
                    Forms\Components\RichEditor::make('valor')
                        ->label('Valor (HTML)')
                        ->toolbarButtons([
                            'bold', 'italic', 'underline', 'strike',
                            'h2', 'h3',
                            'bulletList', 'orderedList',
                            'link', 'blockquote',
                            'undo', 'redo',
                        ])
                        ->visible(fn (Get $get): bool => $get('tipo') === 'html'),

                    // URL de imagen
                    Forms\Components\FileUpload::make('valor')
                        ->label('Imagen')
                        ->image()
                        ->disk('public')
                        ->directory('contenidos')
                        ->maxSize(2048)
                        ->helperText('Máx 2MB.')
                        ->visible(fn (Get $get): bool => $get('tipo') === 'imagen'),

                    // JSON
                    Forms\Components\Textarea::make('valor')
                        ->label('Valor (JSON)')
                        ->rows(8)
                        ->helperText('Ingresa un JSON válido')
                        ->visible(fn (Get $get): bool => $get('tipo') === 'json'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('seccion')
                    ->label('Sección')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => Contenido::secciones()[$state] ?? $state)
                    ->sortable(),

                Tables\Columns\TextColumn::make('clave')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable(),

                Tables\Columns\TextColumn::make('etiqueta')
                    ->searchable()
                    ->sortable()
                    ->limit(40),

                Tables\Columns\TextColumn::make('tipo')
                    ->badge()
                    ->color('gray')
                    ->formatStateUsing(fn (string $state): string => Contenido::tipos()[$state] ?? $state),

                Tables\Columns\TextColumn::make('valor')
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('seccion')
            ->groups([
                Tables\Grouping\Group::make('seccion')
                    ->label('Sección')
                    ->getTitleFromRecordUsing(fn (Contenido $record): string => Contenido::secciones()[$record->seccion] ?? $record->seccion),
            ])
            ->defaultGroup('seccion')
            ->filters([
                Tables\Filters\SelectFilter::make('seccion')
                    ->label('Sección')
                    ->options(Contenido::secciones()),

                Tables\Filters\SelectFilter::make('tipo')
                    ->options(Contenido::tipos()),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
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
            'index'  => Pages\ListContenidos::route('/'),
            'create' => Pages\CreateContenido::route('/create'),
            'edit'   => Pages\EditContenido::route('/{record}/edit'),
        ];
    }
}
