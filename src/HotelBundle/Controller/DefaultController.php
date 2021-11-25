<?php

namespace HotelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HotelBundle:Default:index.html.twig');
    }
}
