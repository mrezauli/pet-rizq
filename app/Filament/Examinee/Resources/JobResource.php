<?php

namespace App\Filament\Examinee\Resources;

use App\Models\Job;
use Filament\Forms;
use Filament\Tables;
use Filament\Infolists;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Resources\Components\Tab;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\ViewEntry;
use Filament\Infolists\Components\ImageEntry;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use App\Filament\Examinee\Resources\JobResource\Pages;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                CuratorPicker::make('media_id')
                    ->label('Ad')
                    ->relationship('media', 'id')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('count')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('fee')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
                Forms\Components\Select::make('location_id')
                    ->relationship('location', 'name')
                    ->required(),
                Forms\Components\Select::make('designation_id')
                    ->relationship('designation', 'title')
                    ->required(),
                Forms\Components\Select::make('salary_id')
                    ->relationship('salary', 'id')
                    ->required(),
                Forms\Components\Select::make('age_id')
                    ->relationship('age', 'id')
                    ->required(),
                Forms\Components\Select::make('qualification_id')
                    ->relationship('qualification', 'id')
                    ->required(),
                Forms\Components\Select::make('experience_id')
                    ->relationship('experience', 'id')
                    ->required(),
                Forms\Components\Select::make('time_id')
                    ->relationship('time', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 1,
                'xl' => 2,
            ])
            ->columns([
                Grid::make([
                    'md' => 1,
                    'xl' => 2,
                ])->schema([
                    Tables\Columns\TextColumn::make('count')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('fee')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('company.name')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('location.name')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('designation.title')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('salary.grade')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('age.years')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('qualification.requirements')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('experience.requirements')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('time.closing')
                        ->sortable(),
                ])
            ])
            ->filters([
                Filter::make('top_rated')
                    ->query(fn (Builder $query): Builder => $query->where('top_rated', true))
                    ->toggle(),
                SelectFilter::make('designation')
                    ->relationship('designation', 'title')
                    ->preload()
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('ad download')
                    ->url(fn (Job $record): string => route('job.show', $record))
                    ->color('warning')
                    ->icon('heroicon-o-arrow-down-tray')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }



    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'view' => Pages\ViewJob::route('/{record}'),
        ];
    }
}
