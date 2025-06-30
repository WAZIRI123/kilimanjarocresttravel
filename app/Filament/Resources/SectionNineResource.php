<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionNineResource\Pages;
use App\Models\SectionNine;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class SectionNineResource extends Resource
{
    protected static ?string $model = SectionNine::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Home Page Sections';
    protected static ?string $modelLabel = 'Activities';
    protected static ?string $navigationLabel = 'Section Nine';
    protected static ?int $navigationSort = 9;

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
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                
                // First Image Group
                FileUpload::make('image')
                    ->image()
                    ->directory('section-nine')
                    ->imageEditor()
                    ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                    ->columnSpan(1),
                TextInput::make('caption')
                    ->required()
                    ->columnSpan(1),
                
                // Second Image Group
                FileUpload::make('image2')
                    ->image()
                    ->directory('section-nine')
                    ->imageEditor()
                    ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                    ->columnSpan(1),
                TextInput::make('caption2')
                    ->required()
                    ->columnSpan(1),
                
                // Third Image Group
                FileUpload::make('image3')
                    ->image()
                    ->directory('section-nine')
                    ->imageEditor()
                    ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                    ->columnSpan(1),
                TextInput::make('caption3')
                    ->required()
                    ->columnSpan(1),
                
                // Fourth Image Group
                FileUpload::make('image4')
                    ->image()
                    ->directory('section-nine')
                    ->imageEditor()
                    ->imageEditorAspectRatios(['16:9', '4:3', '1:1'])
                    ->columnSpan(1),
                TextInput::make('caption4')
                    ->required()
                    ->columnSpan(1),
                
                Toggle::make('is_active')
                    ->default(true)
                    ->inline(false)
                    ->label('Active')
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('caption')
                    ->label('First Caption')
                    ->wrap()
                    ->limit(30),
                ToggleColumn::make('is_active')
                    ->label('Active')
                    ->sortable(),
            ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSectionNines::route('/'),
            'create' => Pages\CreateSectionNine::route('/create'),
            'edit' => Pages\EditSectionNine::route('/{record}/edit'),
        ];
    }
}
