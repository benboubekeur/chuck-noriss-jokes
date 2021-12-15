<?php

namespace Boumedyen\NorissJokes;

use GuzzleHttp\Client;

class JokeFactory
{

    public const API_END_POINT = 'http://api.icndb.com/jokes/random';

    private Client $client;

    public function __construct(?Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function getRandomJoke(): string
    {
        $response = $this->client->get(self::API_END_POINT);

        return json_decode($response->getBody()->getContents())->value->joke;
    }
}
