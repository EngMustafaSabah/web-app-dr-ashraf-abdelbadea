<?php

namespace App\Filament\Pages;

use App\Settings\MainSettings ;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class GeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = MainSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('copyright')
                    ->label('Copyright notice')
                    ->required(),
            ]);
    }
}
