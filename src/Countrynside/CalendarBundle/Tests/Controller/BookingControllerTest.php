<?php

namespace Countrynside\CalendarBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookingControllerTest extends WebTestCase
{

    public function testCompleteScenario()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/booking/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        $form = $crawler->selectButton('Create')->form(array(
            'booking[field_name]' => 'Test',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        $this->assertTrue($crawler->filter('td:contains("Test")')->count() > 0);

        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'booking[field_name]' => 'Foo',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        $this->assertTrue($crawler->filter('[value="Foo"]')->count() > 0);

        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

}
