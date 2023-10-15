<?php

namespace App\Filament\Resources\QualificationResource\Pages;

use App\Filament\Resources\QualificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQualification extends EditRecord
{
    protected static string $resource = QualificationResource::class;

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
