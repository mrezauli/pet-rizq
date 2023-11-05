<?php

namespace App\Filament\Examinee\Resources\JobResource\Pages;

use App\Filament\Examinee\Resources\JobResource;
use App\Models\Job;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListJobs extends ListRecords
{
    protected static string $resource = JobResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->count())
                ->badgeColor('success'),
            'Smith-Beatty' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Smith-Beatty');
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Smith-Beatty');
                })),
            'Graham PLC' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Graham PLC');
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Graham PLC');
                })),
            'Cassin Group' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Cassin Group');
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Cassin Group');
                })),
            'Legros, Pfeffer and Toy' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Legros, Pfeffer and Toy');
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('company', function ($query) {
                    $query->where('name', '=', 'Legros, Pfeffer and Toy');
                })),
        ];
    }
}