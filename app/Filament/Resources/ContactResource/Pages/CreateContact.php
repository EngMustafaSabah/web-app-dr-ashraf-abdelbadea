<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactsResource::class;
}
