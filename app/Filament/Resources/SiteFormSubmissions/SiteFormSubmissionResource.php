<?php

declare(strict_types=1);

namespace App\Filament\Resources\SiteFormSubmissions;

use App\Filament\Resources\SiteFormSubmissions\Pages\ManageSiteFormSubmissions;
use App\Models\SiteFormSubmission;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class SiteFormSubmissionResource extends Resource
{
    protected static ?string $model = SiteFormSubmission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInboxArrowDown;

    protected static ?string $navigationLabel = 'Inscripciones';

    protected static ?string $modelLabel = 'Inscripción';

    protected static ?string $pluralModelLabel = 'Inscripciones';

    protected static string|UnitEnum|null $navigationGroup = 'Sitio público';

    protected static ?int $navigationSort = 20;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('siteForm');
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('payload')
                    ->label('Datos enviados')
                    ->disabled()
                    ->formatStateUsing(fn (?array $state) => $state === null ? '' : json_encode($state, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                    ->label('#')
                    ->sortable(),
                TextColumn::make('siteForm.name')
                    ->label('Formulario')
                    ->searchable(),
                TextColumn::make('payload')
                    ->label('Datos')
                    ->formatStateUsing(function (?array $state): string {
                        if ($state === null || $state === []) {
                            return '—';
                        }

                        return mb_substr(json_encode($state, JSON_UNESCAPED_UNICODE), 0, 140).'…';
                    })
                    ->wrap(),
                TextColumn::make('ip_address')
                    ->label('IP')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Fecha')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('site_form_id')
                    ->relationship('siteForm', 'name')
                    ->label('Formulario')
                    ->searchable()
                    ->preload(),
            ])
            ->recordActions([
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
            'index' => ManageSiteFormSubmissions::route('/'),
        ];
    }
}
