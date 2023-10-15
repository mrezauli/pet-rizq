<?php

namespace App\Filament\Resources\AgeResource\Pages;

use App\Filament\Resources\AgeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAges extends ListRecords
{
    protected static string $resource = AgeResource::class;

    /**
     * @return Actions\CreateAction[]
     *
     * @psalm-return list{Actions\CreateAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
