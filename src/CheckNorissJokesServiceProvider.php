<?php

namespace Boumedyen\NorissJokes;

use Boumedyen\NorissJokes\Facades\ChuckNoris;
use Illuminate\Support\ServiceProvider;

class CheckNorissJokesServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind('chuck-noris', fn () => new JokeFactory());
    }

    public function boot()
    {
    }
}
