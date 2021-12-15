<?php

namespace tests;


use Boumedyen\NorissJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
"type": "success",
"value": {
"id": 404,
"joke": "When Chuck Norris was born, he immediately had sex with the first nurse he saw. He was her first. She was his third. That afternoon.",
"categories": [ ]
}
}')
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);


       $jokes = new JokeFactory($client);

       $joke = $jokes->getRandomJoke();

       $this->assertSame("When Chuck Norris was born, he immediately had sex with the first nurse he saw. He was her first. She was his third. That afternoon.", $joke);

    }

    public function test_it_returns_a_predefined_joke()
    {

    }

}
