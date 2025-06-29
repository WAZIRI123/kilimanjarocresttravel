<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscoverAfricaBestResource\Pages;
use App\Filament\Resources\DiscoverAfricaBestResource\RelationManagers;
use App\Models\DiscoverAfricaBest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscoverAfricaBestResource extends Resource
{
    protected static ?string $model = DiscoverAfricaBest::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Section Three';
    protected static ?string $modelLabel = 'Discover Africa Best';
    protected static ?int $navigationSort = 3;
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
                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\RichEditor::make('heading')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'orderedList',
                                'bulletList',
                            ]),
                        Forms\Components\Textarea::make('subheading')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                
                Forms\Components\Section::make('Images')
                    ->schema([
                        Forms\Components\FileUpload::make('image1_path')
                            ->label('Image 1')
                            ->image()
                            ->directory('images')
                            ->required(),
                        Forms\Components\TextInput::make('image1_alt')
                            ->label('Image 1 Alt Text')
                            ->maxLength(255),
                            
                        Forms\Components\FileUpload::make('image2_path')
                            ->label('Image 2')
                            ->image()
                            ->directory('images')
                            ->required(),
                        Forms\Components\TextInput::make('image2_alt')
                            ->label('Image 2 Alt Text')
                            ->maxLength(255),
                            
                        Forms\Components\FileUpload::make('image3_path')
                            ->label('Image 3')
                            ->image()
                            ->directory('images')
                            ->required(),
                        Forms\Components\TextInput::make('image3_alt')
                            ->label('Image 3 Alt Text')
                            ->maxLength(255),
                    ]),
                
                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('heading')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subheading')
                    ->limit(50)
                    ->searchable(),
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
            'index' => Pages\ListDiscoverAfricaBests::route('/'),
            'create' => Pages\CreateDiscoverAfricaBest::route('/create'),
            'edit' => Pages\EditDiscoverAfricaBest::route('/{record}/edit'),
        ];
    }
}
