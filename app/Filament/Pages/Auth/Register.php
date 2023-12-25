<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Pages\Auth\Register as AuthRegister;

class Register extends AuthRegister
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Using CheckboxList Component
                // Using Select Component
                Select::make('roles')
                    //->relationship('roles', 'name')
                    ->multiple()
                    ->preload(),
                    //->searchable(),
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }
}
