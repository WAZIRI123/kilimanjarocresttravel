<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionFiveResource\Pages;
use App\Filament\Resources\SectionFiveResource\RelationManagers;
use App\Models\SectionFive;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionFiveResource extends Resource
{
    protected static ?string $model = SectionFive::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'Section Five';
    protected static ?string $modelLabel = 'About Stan Safari';
    protected static ?string $navigationGroup = 'Home Page Sections';
    protected static ?int $navigationSort = 5;

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
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('first_paragraph')
                    ->required()
                    ->columnSpanFull()
                    ->rows(5),
                Forms\Components\Textarea::make('second_paragraph')
                    ->required()
                    ->columnSpanFull()
                    ->rows(5),
                Forms\Components\Textarea::make('third_paragraph')
                    ->label('Third Paragraph')
                    ->columnSpanFull()
                    ->rows(5)
                    ->nullable(),
                Forms\Components\Toggle::make('is_active')
                    ->label('Visible')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListSectionFives::route('/'),
            'create' => Pages\CreateSectionFive::route('/create'),
            'edit' => Pages\EditSectionFive::route('/{record}/edit'),
        ];
    }
}
