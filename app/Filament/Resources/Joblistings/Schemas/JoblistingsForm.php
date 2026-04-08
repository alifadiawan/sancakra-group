<?php

namespace App\Filament\Resources\Joblistings\Schemas;

use Filament\Forms\Components\DateTimePicker;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;

use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class JoblistingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Job Title')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                            ]),

                        Grid::make(3)
                            ->schema([
                                Select::make('employment_type')
                                    ->required()
                                    ->options([
                                        'full_time' => 'Full Time',
                                        'part_time' => 'Part Time',
                                        'contract' => 'Contract',
                                        'internship' => 'Internship',
                                        'freelance' => 'Freelance',
                                        'temporary' => 'Temporary',
                                    ])
                                    ->searchable(),

                                Select::make('workplace_type')
                                    ->nullable()
                                    ->options([
                                        'onsite' => 'On Site',
                                        'remote' => 'Remote',
                                        'hybrid' => 'Hybrid',
                                    ])
                                    ->searchable(),

                                Select::make('status')
                                    ->required()
                                    ->default('draft')
                                    ->options([
                                        'draft' => 'Draft',
                                        'published' => 'Published',
                                        'closed' => 'Closed',
                                        'archived' => 'Archived',
                                    ]),
                            ]),

                        Grid::make(2)
                            ->schema([
                                TextInput::make('department')
                                    ->maxLength(255),

                                TextInput::make('team')
                                    ->maxLength(255),
                            ]),
                    ]),

                Section::make('Location')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('country')
                                    ->maxLength(100),

                                TextInput::make('city')
                                    ->maxLength(100),

                                TextInput::make('location_text')
                                    ->label('Display Location')
                                    ->placeholder('e.g. Surabaya, Indonesia / Remote - Indonesia')
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('Job Content')
                    ->schema([
                        Textarea::make('summary')
                            ->rows(3)
                            ->columnSpanFull(),

                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),

                        RichEditor::make('responsibilities')
                            ->columnSpanFull(),

                        RichEditor::make('requirements')
                            ->columnSpanFull(),

                        RichEditor::make('nice_to_have')
                            ->columnSpanFull(),

                        RichEditor::make('benefits')
                            ->columnSpanFull(),
                    ]),

                Section::make('Compensation')
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                TextInput::make('salary_min')
                                    ->numeric()
                                    ->prefix('Rp'),

                                TextInput::make('salary_max')
                                    ->numeric()
                                    ->prefix('Rp'),

                                Select::make('salary_period')
                                    ->options([
                                        'hourly' => 'Hourly',
                                        'monthly' => 'Monthly',
                                        'yearly' => 'Yearly',
                                    ]),

                                Toggle::make('salary_visible')
                                    ->label('Show Salary')
                                    ->default(false),
                            ]),
                    ]),

                Section::make('Hiring Settings')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('vacancies')
                                    ->numeric()
                                    ->minValue(1),

                                Toggle::make('is_urgent')
                                    ->label('Urgent Hiring')
                                    ->default(false),

                                Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(false),
                            ]),
                    ]),

                Section::make('Publishing')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                DateTimePicker::make('published_at')
                                    ->seconds(false),

                                DateTimePicker::make('expires_at')
                                    ->seconds(false),

                                DateTimePicker::make('closed_at')
                                    ->seconds(false),
                            ]),
                    ]),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255),

                        Textarea::make('meta_description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->collapsed(),

                Hidden::make('created_by')
                    ->default(fn() => Auth::id())
                    ->dehydrated(fn($state, $record) => blank($record)),

                Hidden::make('updated_by')
                    ->default(fn() => Auth::id())
                    ->dehydrated(),
            ]);
    }
}
