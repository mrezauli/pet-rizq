<?php

namespace App\Filament\Resources\DesignationResource\Pages;

use App\Filament\Resources\DesignationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDesignation extends EditRecord
{
    protected static string $resource = DesignationResource::class;

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
