<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionSevenResource\Pages;
use App\Filament\Resources\SectionSevenResource\RelationManagers;
use App\Models\SectionSeven;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionSevenResource extends Resource
{
    protected static ?string $model = SectionSeven::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Home Page Sections';
    protected static ?string $navigationLabel = 'Section Seven';
    protected static ?string $modelLabel = 'Beyond Expectation';

    protected static ?int $navigationSort = 7;

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
                Forms\Components\RichEditor::make('main_heading')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                    ])
                    ->hint('Use HTML tags for formatting (e.g., <strong>text</strong> for bold)'),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('left_image')
                    ->image()
                    ->directory('section-seven')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('right_image')
                    ->image()
                    ->directory('section-seven')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('main_heading')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('left_image')
                    ->circular(),
                Tables\Columns\ImageColumn::make('right_image')
                    ->circular(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListSectionSevens::route('/'),
            'create' => Pages\CreateSectionSeven::route('/create'),
            'edit' => Pages\EditSectionSeven::route('/{record}/edit'),
        ];
    }
}
