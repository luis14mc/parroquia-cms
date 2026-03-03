<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\NoticiaResource\Pages;
use App\Models\Noticia;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class NoticiaResource extends Resource
{
    protected static ?string $model = Noticia::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    protected static string|\UnitEnum|null $navigationGroup = 'Contenido';

    protected static ?string $modelLabel = 'Noticia';

    protected static ?string $pluralModelLabel = 'Noticias';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Schemas\Components\Section::make('Información Principal')
                ->columns(2)
                ->schema([

                    Forms\Components\TextInput::make('titulo')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (string $operation, ?string $state, Set $set) {
                            if ($operation === 'create' && $state) {
                                $set('slug', Str::slug($state));
                            }
                        })
                        ->columnSpanFull(),

                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->helperText('Se genera automáticamente desde el título')
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('extracto')
                        ->maxLength(500)
                        ->rows(3)
                        ->helperText('Resumen breve para listados (máx. 500 caracteres)')
                        ->columnSpanFull(),

                    Forms\Components\RichEditor::make('cuerpo')
                        ->required()
                        ->toolbarButtons([
                            'bold', 'italic', 'underline', 'strike',
                            'h2', 'h3',
                            'bulletList', 'orderedList',
                            'link', 'blockquote',
                            'undo', 'redo',
                        ])
                        ->columnSpanFull(),
                ]),

            Schemas\Components\Section::make('Imagen y Categoría')
                ->columns(2)
                ->schema([

                    Forms\Components\FileUpload::make('imagen_destacada')
                        ->image()
                        ->directory('noticias')
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeTargetWidth('1200')
                        ->imageResizeTargetHeight('675')
                        ->helperText('Recomendado: 1200×675 px (16:9)')
                        ->columnSpan(1),

                    Schemas\Components\Group::make()
                        ->schema([
                            Forms\Components\Select::make('categoria')
                                ->options(Noticia::categorias())
                                ->default('comunidad')
                                ->required(),

                            Forms\Components\Select::make('author_id')
                                ->relationship('author', 'name')
                                ->label('Autor')
                                ->searchable()
                                ->preload()
                                ->default(fn () => auth()->id()),
                        ])
                        ->columnSpan(1),
                ]),

            Schemas\Components\Section::make('Publicación')
                ->columns(3)
                ->schema([

                    Forms\Components\DatePicker::make('fecha_publicacion')
                        ->label('Fecha de publicación')
                        ->default(now())
                        ->required(),

                    Forms\Components\Toggle::make('publicada')
                        ->label('Publicada')
                        ->helperText('Visible en el sitio web')
                        ->default(false),

                    Forms\Components\Toggle::make('destacada')
                        ->label('Destacada')
                        ->helperText('Aparece en el hero de noticias')
                        ->default(false),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen_destacada')
                    ->label('Imagen')
                    ->circular(false)
                    ->width(80)
                    ->height(45),

                Tables\Columns\TextColumn::make('titulo')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('categoria')
                    ->badge()
                    ->colors([
                        'primary'   => 'comunidad',
                        'success'   => 'liturgia',
                        'info'      => 'juventud',
                        'warning'   => 'voluntariado',
                        'secondary' => 'reflexion',
                    ])
                    ->sortable(),

                Tables\Columns\IconColumn::make('publicada')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\IconColumn::make('destacada')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('fecha_publicacion')
                    ->label('Fecha')
                    ->date('d/m/Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('author.name')
                    ->label('Autor')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('fecha_publicacion', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('categoria')
                    ->options(Noticia::categorias()),

                Tables\Filters\TernaryFilter::make('publicada')
                    ->label('Estado')
                    ->trueLabel('Publicadas')
                    ->falseLabel('Borradores'),

                Tables\Filters\TernaryFilter::make('destacada'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListNoticias::route('/'),
            'create' => Pages\CreateNoticia::route('/create'),
            'edit'   => Pages\EditNoticia::route('/{record}/edit'),
        ];
    }
}
