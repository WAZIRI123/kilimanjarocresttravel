<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoSectionResource\Pages;
use App\Models\VideoSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class VideoSectionResource extends Resource
{
    protected static ?string $model = VideoSection::class;
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationGroup = 'Home Page Sections';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Section Two';

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
        return $form->schema([
            Forms\Components\Section::make('Video Information')
                ->schema([
                    Forms\Components\RichEditor::make('title')
                        ->required()
                        ->columnSpanFull()
                        ->toolbarButtons([
                            'bold',
                            'italic',
                            'link',
                            'redo',
                            'undo',
                        ]),
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\TextInput::make('video_id')
                                ->label('YouTube Video ID')
                                ->required()
                                ->helperText('Only the video ID from YouTube URL (e.g., zU7YkmqiqPI)')
                                ->columnSpan(1),
                            Forms\Components\Toggle::make('is_active')
                                ->required()
                                ->default(true)
                                ->columnSpan(1)
                                ->inline(false),
                        ]),
                    Forms\Components\TextInput::make('thumbnail_url')
                        ->label('Custom Thumbnail URL')
                        ->helperText('Leave empty to use YouTube default thumbnail')
                        ->columnSpanFull()
                        ->nullable(),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->html()
                    ->searchable()
                    ->sortable()
                    ->description(fn (VideoSection $record) => 'Video ID: ' . $record->video_id)
                    ->wrap()
                    ->limit(50),
                Tables\Columns\TextColumn::make('video_id')
                    ->label('Video ID')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Remove bulk actions
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVideoSections::route('/'),
            'create' => Pages\CreateVideoSection::route('/create'),
            'edit' => Pages\EditVideoSection::route('/{record}/edit'),
        ];
    }
}
