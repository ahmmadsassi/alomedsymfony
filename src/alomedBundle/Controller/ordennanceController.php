<?php

namespace alomedBundle\Controller;

use alomedBundle\Entity\Ordonnance;
use alomedBundle\Form\Formordonnance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ordennanceController extends Controller
{
    public function creationAction(Request $request)
    {
        $ordennance = new Ordonnance();
        $ordennance->setDateconsultation(new \DateTime('now'));
        $fromor = $this->createForm(Formordonnance::class,$ordennance);
        $fromor->handleRequest($request);
        if ($fromor->isSubmitted() && $fromor->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($ordennance);
            $em->flush();
            return $this->redirect($this->generateUrl("medecin_interface"));
        }

        return $this->render('alomedBundle:ordennance:creation.html.twig', array('Formor'=>$fromor->createView()));
    }

}
