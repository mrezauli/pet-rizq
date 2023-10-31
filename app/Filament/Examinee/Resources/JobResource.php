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
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\ImageEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Examinee\Resources\JobResource\Pages;
use App\Filament\Examinee\Resources\JobResource\RelationManagers;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('short_description')
                    ->maxLength(255),
                Forms\Components\Textarea::make('full_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('requirements')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('job_nature')
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\Toggle::make('top_rated'),
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
                Forms\Components\Select::make('media_id')
                    ->relationship('media', 'name')
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
                    Tables\Columns\TextColumn::make('short_description')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('job_nature')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('address')
                        ->searchable(),
                    Tables\Columns\IconColumn::make('top_rated')
                        ->boolean(),
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
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('short_description'),
                ImageEntry::make('media.name'),
                Infolists\Components\TextEntry::make('job_nature'),
                Infolists\Components\IconEntry::make('top_rated')->boolean(),
                Infolists\Components\TextEntry::make('count'),
                Infolists\Components\TextEntry::make('fee'),
                Infolists\Components\TextEntry::make('company.name'),
                Infolists\Components\TextEntry::make('location.name'),
                Infolists\Components\TextEntry::make('designation.title'),
                Infolists\Components\TextEntry::make('location.name'),
                Infolists\Components\TextEntry::make('salary.grade'),
                Infolists\Components\TextEntry::make('age.years'),
                Infolists\Components\TextEntry::make('qualification.requirements'),
                Infolists\Components\TextEntry::make('experience.requirements'),
                Infolists\Components\TextEntry::make('address')
                    ->columnSpanFull(),
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
