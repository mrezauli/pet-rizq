<?php

namespace App\Filament\Examinee\Resources;

use App\Filament\Examinee\Resources\JobResource\Pages;
use App\Filament\Examinee\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
            ->columns([
                Split::make([
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
                    Tables\Columns\TextColumn::make('created_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('updated_at')
                        ->dateTime()
                        ->sortable()
                        ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\TextColumn::make('deleted_at')
                        ->dateTime()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('company.name')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('location.name')

                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('designation.title')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('salary.id')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('age.id')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('qualification.id')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('experience.id')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('time.id')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('media.name')
                        ->numeric()
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