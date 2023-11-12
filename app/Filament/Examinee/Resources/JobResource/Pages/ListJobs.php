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
            '1st Class' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('salary', function ($query) {
                    $query->where('grade', '>=', '9');
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('salary', function ($query) {
                    $query->where('grade', '>=', '9');
                })),
            '2nd Class' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('salary', function ($query) {
                    $query->whereBetween('grade', [10, 13]);
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('salary', function ($query) {
                    $query->whereBetween('grade', [10, 13]);
                })),
            '3rd Class' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('salary', function ($query) {
                    $query->whereBetween('grade', [13, 16]);
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('salary', function ($query) {
                    $query->whereBetween('grade', [13, 16]);
                })),
            '4th Class' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->badge(Job::query()->whereHas('salary', function ($query) {
                    $query->whereBetween('grade', [17, 20]);
                })->count())
                ->badgeColor('success')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('salary', function ($query) {
                    $query->whereBetween('grade', [17, 20]);
                })),
        ];
    }
}
