<?php

declare(strict_types=1);

namespace Cmas\MyApp\Tests\Context1;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\MockObject\MockClass;
use PHPUnit\Framework\TestCase;

class TestActionIndex extends TestCase
{
    /** @var MockClass */
    private $client;

    public function setUp(): void
    {
        $this->client = $this->getMockBuilder(Client::class)->getMock();
    }

    public function testEndpointRunsSuccessfully(): void
    {
        $responseObj = new Response(200, [], json_encode(['message' => 'Hello world']));

        $this->client->expects(self::once())
            ->method('request')
            ->with('GET','/api/context1')
            ->willReturn($responseObj) ;

        $response = $this->client->request('GET', '/api/context1');
        $contents = $response->getBody()->getContents();
        $responseInJson = json_decode($contents, true) ;

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('Hello world', $responseInJson['message']);
    }
}