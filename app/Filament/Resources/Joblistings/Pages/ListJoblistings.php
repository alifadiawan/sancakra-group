<?php

namespace App\Filament\Resources\Joblistings\Pages;

use App\Filament\Resources\Joblistings\JoblistingsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJoblistings extends ListRecords
{
    protected static string $resource = JoblistingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
