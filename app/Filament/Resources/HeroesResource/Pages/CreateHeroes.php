<?php

namespace App\Filament\Resources\HeroesResource\Pages;

use App\Filament\Resources\HeroesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroes extends CreateRecord
{
    protected static string $resource = HeroesResource::class;
}
