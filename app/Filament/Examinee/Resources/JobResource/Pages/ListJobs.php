<?php

namespace App\Filament\Examinee\Resources\JobResource\Pages;

use App\Filament\Examinee\Resources\JobResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJobs extends ListRecords
{
    protected static string $resource = JobResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}