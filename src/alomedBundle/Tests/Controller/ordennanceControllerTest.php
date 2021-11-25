<?php

namespace alomedBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ordennanceControllerTest extends WebTestCase
{
    public function testCreation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ordennance');
    }

}
