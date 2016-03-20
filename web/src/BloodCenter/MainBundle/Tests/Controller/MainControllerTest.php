<?php

namespace BloodCenter\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertGreaterThan(0, $crawler->filter("html:contains('Our Portfolio')")->count()
        );
    }

}
