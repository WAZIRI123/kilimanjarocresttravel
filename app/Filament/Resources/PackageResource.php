<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('PackageTabs')
                    ->tabs([
                        // Package Details Tab
                        Forms\Components\Tabs\Tab::make('Package Details')
                            ->schema([
                                // Package Details Section
                                Forms\Components\Section::make('Package Information')
                                    ->schema([
                                        // All fields will be full width
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => 
                                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                                            )
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(ignoreRecord: true)
                                            ->disabled()
                                            ->dehydrated()
                                            ->helperText('Auto-generated from the title')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('duration')
                                            ->required()
                                            ->maxLength(100)
                                            ->columnSpanFull(),

                                        Forms\Components\RichEditor::make('overview')
                                            ->required()
                                            ->columnSpanFull()
                                            ->helperText('A brief overview of the package')
                                            ->disableToolbarButtons([
                                                'blockquote',
                                                'bold',
                                                'bulletList',
                                                'codeBlock',
                                                'h2',
                                                'h3',
                                                'italic',
                                                'link',
                                                'orderedList',
                                                'redo',
                                                'strike',
                                                'underline',
                                                'undo',
                                            ])
                                            ->toolbarButtons([]),

                                        Forms\Components\Textarea::make('short_description')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpanFull(),
                                            
                                        Forms\Components\TextInput::make('category')
                                            ->label('Category')
                                            ->maxLength(100)
                                            ->helperText(' kilimanjaro,
                                            zanzibar,
                                            short-safaris,
                                            northern-safaris,
                                            southern-safaris')
                                            ->columnSpanFull(),
                                            
                                        Forms\Components\TextInput::make('country')
                                            ->required()
                                            ->maxLength(100)
                                            ->default('Tanzania')
                                            ->helperText('E.g., Tanzania, Kenya, Rwanda, etc.')
                                            ->columnSpanFull(),

               Forms\Components\RichEditor::make('best_time_to_visit')
                                            ->label('Best Time to Visit')
                                            ->columnSpanFull()
                                            ->disableToolbarButtons([
                                                'blockquote',
                                                'bold',
                                                'bulletList',
                                                'codeBlock',
                                                'h2',
                                                'h3',
                                                'italic',
                                                'link',
                                                'orderedList',
                                                'redo',
                                                'strike',
                                                'underline',
                                                'undo',
                                            ])
                                            ->toolbarButtons([]),

                                        Forms\Components\FileUpload::make('featured_image')
                                            ->image()
                                            ->directory('packages')
                                            ->imageResizeMode('cover')
                                            ->imagePreviewHeight('250')
                                            ->imageResizeTargetWidth('800')
                                            ->imageResizeTargetHeight('600')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->acceptedFileTypes(['image/*'])
                                            ->maxSize(2048)
                                            ->required()
                                            ->columnSpanFull()
                                            ->helperText('Maximum file size: 2MB. Allowed types: jpg, jpeg, png, gif'),

                                        // Gallery Images
                                        Forms\Components\FileUpload::make('gallery_image_1')
                                            ->label('Gallery Image 1')
                                            ->image()
                                            ->directory('packages/gallery')
                                            ->imageResizeMode('cover')
                                            ->imagePreviewHeight('150')
                                            ->imageResizeTargetWidth('800')
                                            ->imageResizeTargetHeight('600')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->acceptedFileTypes(['image/*'])
                                            ->maxSize(2048)
                                            ->columnSpanFull()
                                            ->helperText('Maximum file size: 2MB. Allowed types: jpg, jpeg, png, gif'),

                                        Forms\Components\FileUpload::make('gallery_image_2')
                                            ->label('Gallery Image 2')
                                            ->image()
                                            ->directory('packages/gallery')
                                            ->imageResizeMode('cover')
                                            ->imagePreviewHeight('150')
                                            ->imageResizeTargetWidth('800')
                                            ->imageResizeTargetHeight('600')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->acceptedFileTypes(['image/*'])
                                            ->maxSize(2048)
                                            ->columnSpanFull()
                                            ->helperText('Maximum file size: 2MB. Allowed types: jpg, jpeg, png, gif'),

                                        Forms\Components\FileUpload::make('gallery_image_3')
                                            ->label('Gallery Image 3')
                                            ->image()
                                            ->directory('packages/gallery')
                                            ->imageResizeMode('cover')
                                            ->imagePreviewHeight('150')
                                            ->imageResizeTargetWidth('800')
                                            ->imageResizeTargetHeight('600')
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                '16:9',
                                                '4:3',
                                                '1:1',
                                            ])
                                            ->acceptedFileTypes(['image/*'])
                                            ->maxSize(2048)
                                            ->columnSpanFull()
                                            ->helperText('Maximum file size: 2MB. Allowed types: jpg, jpeg, png, gif'),

                                        Forms\Components\TextInput::make('price')
                                            ->required()
                                            ->prefix('$')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('discount_percentage')
                                            ->numeric()
                                            ->maxValue(100)
                                            ->minValue(0)
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('valid_until')
                                            ->columnSpanFull(),

                                        Forms\Components\Toggle::make('is_featured')
                                            ->required()
                                            ->columnSpanFull(),

                                        Forms\Components\Toggle::make('is_special')
                                            ->columnSpanFull(),

                                        Forms\Components\Toggle::make('is_active')
                                            ->default(true)
                                            ->required()
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('sort_order')
                                            ->numeric()
                                            ->default(0)
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(1),  // Set to 1 column for full width

                                // Included/Excluded Items Section
                                Forms\Components\Section::make('Included/Excluded Items & Tips')
                                    ->schema([
                                        Forms\Components\Repeater::make('included_items')
                                            ->label('Included Items')
                                            ->schema([
                                                Forms\Components\TextInput::make('item')
                                                    ->required()
                                                    ->columnSpanFull()
                                            ])
                                            ->itemLabel(fn (array $state): ?string => $state['item'] ?? null)
                                            ->defaultItems(3)
                                            ->collapsible()
                                            ->grid(1)
                                            ->columnSpanFull(),

                                        Forms\Components\Repeater::make('excluded_items')
                                            ->label('Excluded Items')
                                            ->schema([
                                                Forms\Components\TextInput::make('item')
                                                    ->required()
                                                    ->columnSpanFull()
                                            ])
                                            ->itemLabel(fn (array $state): ?string => $state['item'] ?? null)
                                            ->defaultItems(3)
                                            ->collapsible()
                                            ->grid(1)
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(1)  // Set to 1 column for full width
                                    ->columnSpanFull(),

                                // SEO Section
                                Forms\Components\Section::make('SEO')
                                    ->schema([
                                        Forms\Components\TextInput::make('meta_title')
                                            ->maxLength(255)
                                            ->columnSpanFull(),
                                        Forms\Components\Textarea::make('meta_description')
                                            ->maxLength(255)
                                            ->columnSpanFull(),
                                        Forms\Components\TagsInput::make('meta_keywords')
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(1)  // Set to 1 column for full width
                                    ->columnSpanFull(),
                            ])
                            ->columnSpanFull(),  // Make tab content full width

                        // Itineraries Tab
                        Forms\Components\Tabs\Tab::make('Itineraries')
                            ->schema([
                                Forms\Components\Repeater::make('itineraries')
                                    ->label('')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Day Title')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpanFull(),
                                            
                                        Forms\Components\FileUpload::make('image')
                                            ->label('Day Image')
                                            ->image()
                                            ->directory('itineraries')
                                            ->imageEditor()
                                            ->columnSpanFull(),
                                            
                                        Forms\Components\Repeater::make('descriptions')
                                            ->label('Day Descriptions')
                                            ->schema([
                                                Forms\Components\RichEditor::make('content')
                                                    ->label('')
                                                    ->required()
                                                    ->disableToolbarButtons([
                                                        'blockquote',
                                                        'bold',
                                                        'bulletList',
                                                        'codeBlock',
                                                        'h2',
                                                        'h3',
                                                        'italic',
                                                        'link',
                                                        'orderedList',
                                                        'redo',
                                                        'strike',
                                                        'underline',
                                                        'undo',
                                                    ])
                                                    ->toolbarButtons([])
                                                    ->columnSpanFull()
                                            ])
                                            ->itemLabel(fn (array $state): ?string => $state['content'] ?? null)
                                            ->defaultItems(1)
                                            ->addActionLabel('Add Description')
                                            ->collapsible()
                                            ->grid(1)
                                            ->columnSpanFull(),
                                            
                                        // Tips for this day
                                        Forms\Components\Textarea::make('tips')
                                            ->label('Day Tips (comma-separated)')
                                            ->helperText('Enter tips for this day separated by commas. Example: "Wear comfortable shoes, Bring a camera, Pack a light jacket"')
                                            ->columnSpanFull()
                                            ->maxLength(65535)
                                    ])
                                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? 'New Itinerary Day')
                                    ->defaultItems(1)
                                    ->addActionLabel('Add Itinerary Day')
                                    ->collapsible()
                                    ->grid(1)
                                    ->columnSpanFull()
                            ])
                            ->columnSpanFull(),  // Make tab content full width
                    ])
                    ->columnSpanFull()
            ])
            ->columns(1)
            ->extraAttributes(['class' => 'max-w-full']);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->circular(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_percentage')
                    ->sortable(),
                Tables\Columns\TextColumn::make('valid_until')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_special')
                    ->boolean()
                    ->sortable(),
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
                Tables\Filters\SelectFilter::make('is_featured')
                    ->options([
                        '1' => 'Featured',
                        '0' => 'Not Featured',
                    ])
                    ->label('Featured'),
                Tables\Filters\SelectFilter::make('is_active')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ])
                    ->label('Status'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            // Add any relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
            'view' => Pages\ViewPackage::route('/{record}'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getFormActions(): array
    {
        return [
            'save' => \Filament\Actions\Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save')
                ->keyBindings(['mod+s']),
            'saveAndClose' => \Filament\Actions\Action::make('saveAndClose')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save_and_close.label'))
                ->submit('save')
                ->keyBindings(['mod+shift+s']),
            'cancel' => \Filament\Actions\Action::make('cancel')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.cancel.label'))
                ->url(static::getUrl())
                ->color('gray'),
        ];
    }

    
}