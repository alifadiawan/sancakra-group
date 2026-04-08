<?php

namespace App\Filament\Resources\Joblistings\Pages;

use App\Filament\Resources\Joblistings\JoblistingsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJoblistings extends EditRecord
{
    protected static string $resource = JoblistingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
