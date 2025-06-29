<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionSixResource\Pages;
use App\Filament\Resources\SectionSixResource\RelationManagers;
use App\Models\SectionSix;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionSixResource extends Resource
{
    protected static ?string $model = SectionSix::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Section Six';
    protected static ?string $modelLabel = 'Experience Section';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationGroup = 'Home Page Sections';
    
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
                            
                        Forms\Components\RichEditor::make('first_paragraph')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'orderedList',
                                'bulletList',
                            ]),
                            
                        Forms\Components\RichEditor::make('second_paragraph')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'orderedList',
                                'bulletList',
                            ]),
                            
                        Forms\Components\FileUpload::make('main_image_path')
                            ->label('Main Image')
                            ->required()
                            ->directory('images')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ]),
                            
                        Forms\Components\TextInput::make('main_image_alt')
                            ->label('Main Image Alt Text')
                            ->maxLength(255),
                            
                        Forms\Components\FileUpload::make('thumbnail1_path')
                            ->label('Thumbnail 1')
                            ->directory('images')
                            ->image(),
                            
                        Forms\Components\TextInput::make('thumbnail1_alt')
                            ->label('Thumbnail 1 Alt Text')
                            ->maxLength(255),
                            
                        Forms\Components\FileUpload::make('thumbnail2_path')
                            ->label('Thumbnail 2')
                            ->directory('images')
                            ->image(),
                            
                        Forms\Components\TextInput::make('thumbnail2_alt')
                            ->label('Thumbnail 2 Alt Text')
                            ->maxLength(255),
                            
                        Forms\Components\FileUpload::make('thumbnail3_path')
                            ->label('Thumbnail 3')
                            ->directory('images')
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
                    ->limit(50),
                    
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
            'index' => Pages\ListSectionSixes::route('/'),
            'create' => Pages\CreateSectionSix::route('/create'),
            'edit' => Pages\EditSectionSix::route('/{record}/edit'),
        ];
    }
}
