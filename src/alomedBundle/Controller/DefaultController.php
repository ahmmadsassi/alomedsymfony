<?php

namespace alomedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('alomedBundle:Default:index.html.twig');
    }
    public function indexaboutAction()
    {
        return $this->render('alomedBundle:Default:about.html.twig');
    }
    public function indexcontactAction()
    {
        return $this->render('alomedBundle:Default:contact.html.twig');
    }
    public function indexroleAction()
    {
        return $this->render('alomedBundle:Default:role.html.twig');
    }
}

