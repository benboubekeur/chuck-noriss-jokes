<?php

namespace tests;


use Boumedyen\NorissJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {

        $factory = new JokeFactory(['This is a joke']);

        $this->assertSame('This is a joke', $factory->getRandomJoke());
    }

    public function test_it_returns_a_predefined_joke()
    {
        $jokes = [
            'If Chuck Norris were to travel to an alternate dimension in which there was another 
            Chuck Norris and they both fought, they would both win.',
            'Chuck Norris has a mug of nails instead of coffee in the morning.'
        ];
        $factory = new JokeFactory($jokes);

        $randomJoke = $factory->getRandomJoke();

        $this->assertContains ($randomJoke, $jokes);
    }

}
