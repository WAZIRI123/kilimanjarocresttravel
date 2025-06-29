<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionFourResource\Pages;
use App\Filament\Resources\SectionFourResource\RelationManagers;
use App\Models\SectionFour;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionFourResource extends Resource
{
    protected static ?string $model = SectionFour::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Section Four';
    protected static ?string $modelLabel = 'Hero Section';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Home Page Sections';
    
    public static function canCreate(): bool
    {
        // Only allow one instance
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
                Forms\Components\Section::make('Hero Section Content')
                    ->schema([
                        Forms\Components\RichEditor::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'orderedList',
                                'bulletList',
                            ]),
                        
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->rows(3),
                        
                        Forms\Components\FileUpload::make('main_image_path')
                            ->label('Main Image')
                            ->directory('section-four')
                            ->image()
                            ->required()
                            ->columnSpanFull(),
                            
                        Forms\Components\TextInput::make('main_image_alt')
                            ->label('Main Image Alt Text')
                            ->maxLength(255),
                        
                        Forms\Components\FileUpload::make('thumbnail1_path')
                            ->label('Thumbnail 1')
                            ->directory('section-four/thumbnails')
                            ->image(),
                            
                        Forms\Components\TextInput::make('thumbnail1_alt')
                            ->label('Thumbnail 1 Alt Text')
                            ->maxLength(255),
                        
                        Forms\Components\FileUpload::make('thumbnail2_path')
                            ->label('Thumbnail 2')
                            ->directory('section-four/thumbnails')
                            ->image(),
                            
                        Forms\Components\TextInput::make('thumbnail2_alt')
                            ->label('Thumbnail 2 Alt Text')
                            ->maxLength(255),
                        
                        Forms\Components\FileUpload::make('thumbnail3_path')
                            ->label('Thumbnail 3')
                            ->directory('section-four/thumbnails')
                            ->image(),
                            
                        Forms\Components\TextInput::make('thumbnail3_alt')
                            ->label('Thumbnail 3 Alt Text')
                            ->maxLength(255),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->required()
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(100),
                    
                Tables\Columns\ImageColumn::make('main_image_path')
                    ->label('Main Image')
                    ->circular(),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
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
                    ->label('Status'),
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
            'index' => Pages\ListSectionFours::route('/'),
            'create' => Pages\CreateSectionFour::route('/create'),
            'edit' => Pages\EditSectionFour::route('/{record}/edit'),
        ];
    }
}
