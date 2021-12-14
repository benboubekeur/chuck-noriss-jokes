<?php

namespace Boumedyen\NorissJokes;

class JokeFactory
{
    private array $jokes = [
        'Chuck Norris’ tears cure cancer. Too bad he has never cried.',
        'When God said, “Let there be light!” Chuck said, “Say Please.”',
        'The chief export of Chuck Norris is pain.'
    ];

    public function __construct(array $jokes = null)
    {
        if (is_null($jokes)) {
            return $this->jokes;
        }
        $this->jokes = $jokes;
    }

    public function getRandomJoke(): string
    {
        //Comment
        return $this->jokes[array_rand($this->jokes)];
    }
}
