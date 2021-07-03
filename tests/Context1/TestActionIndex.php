<?php

declare(strict_types=1);

namespace Cmas\MyApp\Tests\Context1;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class TestActionIndex extends TestCase
{
    private Client $client;

    public function setUp(): void
    {
        $this->client = new Client([
            'base_uri' => $_ENV['BASE_URI']
        ]);
    }

    public function testEndpointRunsSuccessfully(): void
    {
        $response = $this->client->request('GET', '/api/context1');
        $contents = $response->getBody()->getContents();
        $responseInJson = json_decode(json_decode($contents, true), true) ;

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('Hello world', $responseInJson['message']);
    }
}