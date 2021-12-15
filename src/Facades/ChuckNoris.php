<?php

namespace Boumedyen\NorissJokes\Facades;

use Illuminate\Support\Facades\Facade;

class ChuckNoris extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chuck-noris';
    }

}
