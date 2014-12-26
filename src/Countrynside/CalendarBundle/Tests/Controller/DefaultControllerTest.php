<?php

namespace Countrynside\CalendarBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Julien');

        $this->assertTrue($crawler->filter('html:contains("Hello Julien")')->count() > 0);
    }

}
