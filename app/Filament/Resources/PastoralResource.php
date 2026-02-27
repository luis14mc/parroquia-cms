<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PastoralResource\Pages;
use App\Models\Pastoral;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PastoralResource extends Resource
{
    protected static ?string $model = Pastoral::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Pastorales';

    protected static ?string $modelLabel = 'Pastoral';

    protected static ?string $pluralModelLabel = 'Pastorales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información')->schema([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Forms\Set $set, $state) => $set('slug', Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Forms\Components\Textarea::make('descripcion')
                        ->rows(4)
                        ->columnSpanFull(),
                    Forms\Components\FileUpload::make('imagen')
                        ->image()
                        ->directory('pastorales')
                        ->visibility('public'),
                    Forms\Components\TextInput::make('orden')
                        ->numeric()
                        ->default(0)
                        ->required(),
                    Forms\Components\Toggle::make('es_activa')
                        ->default(true),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('orden')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('es_activa')
                    ->boolean(),
            ])
            ->defaultSort('orden')
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPastorals::route('/'),
            'create' => Pages\CreatePastoral::route('/create'),
            'edit' => Pages\EditPastoral::route('/{record}/edit'),
        ];
    }
}
