<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceAfricaResource\Pages;
use App\Models\ExperienceAfrica;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ExperienceAfricaResource extends Resource
{
    protected static ?string $model = ExperienceAfrica::class;
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationGroup = 'Content';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Section One';

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
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('heading')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('subheading')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\Repeater::make('benefits')
                        ->label('Benefits')
                        ->schema([
                            Forms\Components\TextInput::make('benefit')
                                ->label('Benefit')
                                ->required(),
                        ])
                        ->itemLabel(fn (array $state): ?string => $state['benefit'] ?? null)
                        ->collapsible()
                        ->collapsed()
                        ->cloneable()
                        ->defaultItems(3)
                        ->grid(2),
                    Forms\Components\FileUpload::make('image_path')
                        ->label('Featured Image')
                        ->image()
                        ->directory('experience-africa')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str(Str::slug($file->getClientOriginalName()))
                                ->prepend('experience-africa-')
                                ->append('.' . $file->getClientOriginalExtension())
                        )
                        ->required()
                        ->columnSpanFull()
                        ->preserveFilenames(),
                    Forms\Components\TextInput::make('button_text')
                        ->required()
                        ->maxLength(50),
                    Forms\Components\TextInput::make('button_link')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Toggle::make('is_active')
                        ->required()
                        ->default(true),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Image')
                    ->disk('public')
                    ->searchable(),
                Tables\Columns\TextColumn::make('heading')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperienceAfricas::route('/'),
            'create' => Pages\CreateExperienceAfrica::route('/create'),
            'edit' => Pages\EditExperienceAfrica::route('/{record}/edit'),
        ];
    }
}
