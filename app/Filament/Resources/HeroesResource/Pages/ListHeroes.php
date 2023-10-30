<?php

namespace App\Filament\Resources\HeroesResource\Pages;

use App\Filament\Resources\HeroesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroes extends ListRecords
{
    protected static string $resource = HeroesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
