<?php

declare(strict_types=1);

namespace App\Filament\Resources\SiteForms;

use App\Filament\Resources\SiteForms\Pages\ManageSiteForms;
use App\Models\SiteForm;
use App\Rules\UniqueFormFieldKeys;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;
use UnitEnum;

class SiteFormResource extends Resource
{
    protected static ?string $model = SiteForm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $navigationLabel = 'Formularios';

    protected static ?string $modelLabel = 'Formulario';

    protected static ?string $pluralModelLabel = 'Formularios';

    protected static string|UnitEnum|null $navigationGroup = 'Sitio público';

    protected static ?int $navigationSort = 10;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre interno')
                    ->helperText('Solo visible en el CMS.')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('URL (slug)')
                    ->required()
                    ->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/')
                    ->rules(fn (?SiteForm $record): array => [
                        Rule::unique('site_forms', 'slug')->ignore($record?->id),
                    ])
                    ->helperText('Ej. taller-solidaridad → URL /forms/taller-solidaridad'),
                Toggle::make('is_enabled')
                    ->label('Formulario activo')
                    ->helperText('Si está desactivado, la página pública responderá 404.')
                    ->default(false),
                TextInput::make('badge_label')
                    ->label('Etiqueta superior (chip)')
                    ->maxLength(120),
                TextInput::make('page_title')
                    ->label('Título en la página')
                    ->required()
                    ->maxLength(255),
                Textarea::make('page_subtitle')
                    ->label('Subtítulo')
                    ->rows(3)
                    ->columnSpanFull(),
                Repeater::make('fields')
                    ->label('Campos del formulario')
                    ->schema([
                        TextInput::make('key')
                            ->label('Nombre del campo (name)')
                            ->required()
                            ->regex('/^[a-z0-9_]+$/')
                            ->helperText('Solo minúsculas, números y guión bajo (ej. nombre_completo).')
                            ->maxLength(64),
                        TextInput::make('label')
                            ->label('Etiqueta visible')
                            ->required()
                            ->maxLength(255),
                        Select::make('type')
                            ->label('Tipo')
                            ->options([
                                'text' => 'Texto',
                                'email' => 'Correo',
                                'tel' => 'Teléfono',
                                'textarea' => 'Área de texto',
                            ])
                            ->required()
                            ->native(false),
                        Toggle::make('required')
                            ->label('Obligatorio')
                            ->default(true),
                        TextInput::make('max')
                            ->label('Longitud máx.')
                            ->numeric()
                            ->default(255)
                            ->minValue(1)
                            ->maxValue(65535),
                    ])
                    ->columns(2)
                    ->collapsible()
                    ->defaultItems(1)
                    ->addActionLabel('Añadir campo')
                    ->rule(new UniqueFormFieldKeys)
                    ->columnSpanFull(),
                TextInput::make('thank_you_heading')
                    ->label('Gracias — título')
                    ->maxLength(255),
                Textarea::make('thank_you_body')
                    ->label('Gracias — texto')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->defaultSort('updated_at', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->copyable(),
                ToggleColumn::make('is_enabled')
                    ->label('Activo'),
                TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSiteForms::route('/'),
        ];
    }
}
