<?php

namespace App\Filament\Resources\Joblistings;

use App\Filament\Resources\Joblistings\Pages\CreateJoblistings;
use App\Filament\Resources\Joblistings\Pages\EditJoblistings;
use App\Filament\Resources\Joblistings\Pages\ListJoblistings;
use App\Filament\Resources\Joblistings\Schemas\JoblistingsForm;
use App\Filament\Resources\Joblistings\Tables\JoblistingsTable;
use App\Models\Joblistings;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JoblistingsResource extends Resource
{
    protected static ?string $model = Joblistings::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Briefcase;

    protected static ?string $recordTitleAttribute = 'Job Listings';

    public static function form(Schema $schema): Schema
    {
        return JoblistingsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JoblistingsTable::configure($table);
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
            'index' => ListJoblistings::route('/'),
            'create' => CreateJoblistings::route('/create'),
            'edit' => EditJoblistings::route('/{record}/edit'),
        ];
    }
}
