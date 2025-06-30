<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionEightResource\Pages;
use App\Models\SectionEight;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class SectionEightResource extends Resource
{
    protected static ?string $model = SectionEight::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationGroup = 'Home Page Sections';
    protected static ?string $modelLabel = 'Curated African Escapes';
    protected static ?string $navigationLabel = 'Section Eight';
    protected static ?int $navigationSort = 8;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Section Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('Use HTML tags for formatting (e.g., &lt;strong&gt;Bold Text&lt;/strong&gt;)')
                            ->default('Curated African Escapes <strong>Curated for You</strong>'),
                        Forms\Components\Textarea::make('subtitle')
                            ->required()
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->helperText('Main description text for this section'),
                    ]),

                Forms\Components\Section::make('Destinations')
                    ->schema([
                        Forms\Components\Repeater::make('destinations')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(100)
                                    ->columnSpan(1),
                                Forms\Components\Textarea::make('description')
                                    ->required()
                                    ->maxLength(500)
                                    ->columnSpan(2),
                            ])
                            ->columns(3)
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                            ->addActionLabel('Add Destination')
                            ->defaultItems(1)
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Whether this section is visible on the website'),
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable()
                    ->label('Order'),
                Tables\Columns\TextColumn::make('title')
                    ->html()
                    ->searchable()
                    ->sortable()
                    ->description(fn (SectionEight $record): string => Str::limit(strip_tags($record->subtitle), 100))
                    ->wrap(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Last Updated'),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSectionEights::route('/'),
            'create' => Pages\CreateSectionEight::route('/create'),
            'edit' => Pages\EditSectionEight::route('/{record}/edit'),
        ];
    }
}
