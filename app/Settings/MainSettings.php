<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class MainSettings extends Settings
{

    public static function group(): string
    {
        return 'default';
    }
}
