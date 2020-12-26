<?php

namespace alomedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('alomedBundle:Default:index.html.twig');
    }
}
