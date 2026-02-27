<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntencionResource\Pages;
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

    protected static ?string $navigationLabel = 'Intenciones';

    protected static ?string $modelLabel = 'Intención';

    protected static ?string $pluralModelLabel = 'Intenciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Intención de Misa')->schema([
                    Forms\Components\Select::make('tipo')
                        ->required()
                        ->options([
                            'difunto' => 'Por difunto',
                            'enfermo' => 'Por enfermo',
                            'gratitud' => 'En acción de gracias',
                            'otro' => 'Otro',
                        ]),
                    Forms\Components\TextInput::make('nombre_beneficiario')
                        ->required()
                        ->label('Nombre del beneficiario'),
                    Forms\Components\TextInput::make('solicitante')
                        ->required()
                        ->label('Quien solicita'),
                    Forms\Components\DatePicker::make('fecha_misa')
                        ->required()
                        ->native(false),
                    Forms\Components\Textarea::make('comentario')
                        ->rows(3)
                        ->columnSpanFull(),
                    Forms\Components\Toggle::make('es_publicada')
                        ->default(true)
                        ->label('Publicar en web'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tipo')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'difunto' => 'Por difunto',
                        'enfermo' => 'Por enfermo',
                        'gratitud' => 'Gratitud',
                        default => ucfirst($state),
                    }),
                Tables\Columns\TextColumn::make('nombre_beneficiario')
                    ->searchable(),
                Tables\Columns\TextColumn::make('solicitante')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_misa')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\IconColumn::make('es_publicada')
                    ->boolean(),
            ])
            ->defaultSort('fecha_misa', 'desc')
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
            'index' => Pages\ListIntencions::route('/'),
            'create' => Pages\CreateIntencion::route('/create'),
            'edit' => Pages\EditIntencion::route('/{record}/edit'),
        ];
    }
}
