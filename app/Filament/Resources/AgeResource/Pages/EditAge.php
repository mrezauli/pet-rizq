<?php

namespace App\Filament\Resources\AgeResource\Pages;

use App\Filament\Resources\AgeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAge extends EditRecord
{
    protected static string $resource = AgeResource::class;

    /**
     * @return (Actions\DeleteAction|Actions\ForceDeleteAction|Actions\RestoreAction|Actions\ViewAction)[]
     *
     * @psalm-return list{Actions\ViewAction, Actions\DeleteAction, Actions\ForceDeleteAction, Actions\RestoreAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
