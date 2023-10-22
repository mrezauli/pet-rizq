<?php

namespace App\Filament\Resources;

use App\Models\Job;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JobResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Awcodes\Curator\Components\Tables\CuratorColumn;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    /**
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('location_id')
                    ->relationship(name: 'location', titleAttribute: 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('company_id')
                    ->relationship(name: 'company', titleAttribute: 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('designation_id')
                    ->relationship(name: 'designation', titleAttribute: 'title')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('salary_id')
                    ->relationship(name: 'salary', titleAttribute: 'grade')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('age_id')
                    ->relationship(name: 'age', titleAttribute: 'years')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('qualification_id')
                    ->relationship(name: 'qualification', titleAttribute: 'requirements')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('experience_id')
                    ->relationship(name: 'experience', titleAttribute: 'requirements')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('time_id')
                    ->relationship(name: 'time', titleAttribute: 'opening')
                    ->required()
                    ->searchable()
                    ->preload(),
                CuratorPicker::make('media_id')
                    ->relationship('media', 'id'),
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
                Forms\Components\TextInput::make('count')
                    ->numeric(),
                Forms\Components\TextInput::make('fee')
                    ->numeric(),
                Forms\Components\Toggle::make('top_rated'),
            ]);
    }

    /**
     * @return Table
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('location.name'),
                Tables\Columns\TextColumn::make('time.closing')
                    ->sortable(),
                Tables\Columns\TextColumn::make('company.name'),
                Tables\Columns\TextColumn::make('designation.title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('salary.grade')
                    ->searchable(),
                Tables\Columns\TextColumn::make('age.years')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qualification.requirements')
                    ->searchable(),
                Tables\Columns\TextColumn::make('experience.requirements')
                    ->searchable(),
                CuratorColumn::make('media')
                    ->size(40),
                Tables\Columns\TextColumn::make('short_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_nature')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('count')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fee')
                    ->searchable(),
                Tables\Columns\IconColumn::make('top_rated')
                    ->boolean(),
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
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    /**
     * @return array
     *
     * @psalm-return array<never, never>
     */
    public static function getRelations(): array
    {
        return [];
    }

    /**
     * @return \Filament\Resources\Pages\PageRegistration[]
     *
     * @psalm-return array{index: \Filament\Resources\Pages\PageRegistration, create: \Filament\Resources\Pages\PageRegistration, view: \Filament\Resources\Pages\PageRegistration, edit: \Filament\Resources\Pages\PageRegistration}
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'view' => Pages\ViewJob::route('/{record}'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }

    /**
     * @return Builder
     */
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
