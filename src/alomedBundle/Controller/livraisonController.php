<?php

namespace alomedBundle\Controller;

use alomedBundle\Entity\Livraison;
use alomedBundle\Entity\Ordonnance;
use alomedBundle\Form\Formlivraison;
use alomedBundle\Form\Formordonnance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class livraisonController extends Controller
{
    public function createlivraisonAction(Request $request)
    {
        $livraison = new Livraison();
        $livraison->setEtat("non livré");
        $fromor = $this->createForm(Formlivraison::class,$livraison);
        $fromor->handleRequest($request);
        if ($fromor->isSubmitted() && $fromor->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($livraison);
            $em->flush();
            return $this->redirect($this->generateUrl("view_patientlistelivraison"));
        }
        return $this->render('alomedBundle:livraison:createlivraison.html.twig', array('Formoliv'=>$fromor->createView()));
    }


}
