<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    function testRouteIndex(): void
    {
        $client = static::createClient();
        if (empty($_ENV['HTTP_HOST'])) {
            self::fail();
        }
        $uri = $_ENV['HTTP_HOST'] . '/';
        $client->request('GET', $uri);
        self::assertSame(200, $client->getResponse()->getStatusCode());
    }
}
