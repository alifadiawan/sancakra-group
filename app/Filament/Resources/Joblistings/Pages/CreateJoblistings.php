<?php

namespace App\Filament\Resources\Joblistings\Pages;

use App\Filament\Resources\Joblistings\JoblistingsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJoblistings extends CreateRecord
{
    protected static string $resource = JoblistingsResource::class;
}
