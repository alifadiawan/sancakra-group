<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;


class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Main Content Section
                Section::make('Content')
                    ->columnSpan(['lg' => 2])
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255)
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $state) {
                                if (filled($get('slug'))) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique('news', 'slug', ignoreRecord: true)
                            ->maxLength(255),

                        Textarea::make('excerpt')
                            ->label('Excerpt')
                            ->rows(3)
                            ->maxLength(500),

                        RichEditor::make('content')
                            ->label('Content')
                            ->required()
                            ->columnSpan('full')
                            ->fileAttachmentsMaxSize(5120)
                            ->fileAttachmentsAcceptedFileTypes(['image/png', 'image/jpeg', 'image/gif', 'image/webp']),
                    ]),

                // Media Section
                Section::make('Media')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->maxSize(5120)
                            ->disk('public')
                            ->directory('news'),

                        TextInput::make('featured_image_alt')
                            ->label('Image Alt Text')
                            ->maxLength(255),
                    ]),

                // Publishing Section
                Section::make('Publishing')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'draft' => 'Draft',
                                'published' => 'Published',
                                'scheduled' => 'Scheduled',
                            ])
                            ->default('draft')
                            ->selectablePlaceholder(false)
                            ->required(),

                        DateTimePicker::make('published_at')
                            ->label('Published At')
                            ->displayFormat('d/m/Y H:i'),
                    ]),

                // SEO Section
                Section::make('SEO')
                    ->columnSpan(['lg' => 2])
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->helperText('Recommended max 60 characters'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(2)
                            ->maxLength(160)
                            ->helperText('Recommended max 160 characters'),

                        TextInput::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->maxLength(255),

                        TextInput::make('canonical_url')
                            ->label('Canonical URL')
                            ->url()
                            ->maxLength(255),
                    ]),

                // Author Section
                Section::make('Author')
                    ->schema([
                        Select::make('author_id')
                            ->label('Author')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload(),
                    ]),

                // Additional Options
                Section::make('Options')
                    ->schema([
                        Checkbox::make('is_featured')
                            ->label('Feature this article')
                            ->default(false),

                        TextInput::make('views_count')
                            ->label('View Count')
                            ->numeric()
                            ->default(0)
                            ->disabled(fn() => true),
                    ])
            ]);
    }
}
