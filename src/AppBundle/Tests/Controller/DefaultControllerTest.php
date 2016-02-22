<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author Koen Vinken <vinkenkoen@gmail.com>
 */
class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
//        dump($client->getResponse()->getContent());exit;

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
