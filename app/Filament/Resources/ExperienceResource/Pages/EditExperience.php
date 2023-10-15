<?php

namespace App\Filament\Resources\ExperienceResource\Pages;

use App\Filament\Resources\ExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExperience extends EditRecord
{
    protected static string $resource = ExperienceResource::class;

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
