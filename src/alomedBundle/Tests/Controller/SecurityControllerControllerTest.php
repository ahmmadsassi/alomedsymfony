<?php

namespace alomedBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');
    }

    public function testRedirect()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/home');
    }

}
