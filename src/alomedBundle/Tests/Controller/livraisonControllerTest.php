<?php

namespace alomedBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class livraisonControllerTest extends WebTestCase
{
    public function testCreatelivraison()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createlivraison');
    }

}
