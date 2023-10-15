<?php

namespace App\Filament\Resources\AgeResource\Pages;

use App\Filament\Resources\AgeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAge extends ViewRecord
{
    protected static string $resource = AgeResource::class;

    /**
     * @return Actions\EditAction[]
     *
     * @psalm-return list{Actions\EditAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
