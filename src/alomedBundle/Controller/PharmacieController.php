<?php

namespace alomedBundle\Controller;

use alomedBundle\Entity\Medicaments;
use alomedBundle\Entity\Patient;
use alomedBundle\Entity\Pharmacie;
use alomedBundle\Entity\userid;
use alomedBundle\Form\Medicammentform;
use alomedBundle\Form\ModeleForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pharmacie controller.
 *
 */
class PharmacieController extends Controller
{
    /**
     * Lists all pharmacie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pharmacies = $em->getRepository('alomedBundle:Pharmacie')->findAll();

        return $this->render('pharmacie/index.html.twig', array(
            'pharmacies' => $pharmacies,
        ));
    }

    /**
     * Creates a new pharmacie entity.
     *
     */
    public function newAction(Request $request)
    {
        $pharmacie = new Pharmacie();
        $form = $this->createForm('alomedBundle\Form\PharmacieType', $pharmacie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pharmacie);
            $em->flush();

            return $this->redirectToRoute('pharmacie_show', array('id' => $pharmacie->getId()));
        }

        return $this->render('pharmacie/new.html.twig', array(
            'pharmacie' => $pharmacie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pharmacie entity.
     *
     */
    public function showAction(Pharmacie $pharmacie)
    {
        $deleteForm = $this->createDeleteForm($pharmacie);

        return $this->render('pharmacie/show.html.twig', array(
            'pharmacie' => $pharmacie,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function showallordennancephAction(Request $request){
        $userid= new userid();
        $userid= $this->getDoctrine()->getRepository('alomedBundle:userid')->find(1);
        $id= $userid->getToken();

        $pharmacie= $this->getDoctrine()->getRepository('alomedBundle:Pharmacie')->find($id);
        $ordennances = $pharmacie->getOrdonnanceph();
        return $this->render('@alomed/pages/interfacepharmacie.html.twig',array('ordennances' => $ordennances));
    }

    /**
     * Displays a form to edit an existing pharmacie entity.
     *
     */
    public function editAction(Request $request, Pharmacie $pharmacie)
    {
        $deleteForm = $this->createDeleteForm($pharmacie);
        $editForm = $this->createForm('alomedBundle\Form\PharmacieType', $pharmacie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pharmacie_edit', array('id' => $pharmacie->getId()));
        }

        return $this->render('pharmacie/edit.html.twig', array(
            'pharmacie' => $pharmacie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function showalllivraisonphAction(Request $request){
        $userid= new userid();
        $userid= $this->getDoctrine()->getRepository('alomedBundle:userid')->find(1);
        $id= $userid->getToken();
        $livreur= $this->getDoctrine()->getRepository('alomedBundle:Pharmacie')->find($id);
        $livraisons = $livreur->getLivraisons();
        return $this->render('@alomed/pages/listelivraison.html.twig',array('livraison' => $livraisons));
    }
    /**
     * Deletes a pharmacie entity.
     *
     */
    public function deleteAction(Request $request, Pharmacie $pharmacie)
    {
        $form = $this->createDeleteForm($pharmacie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pharmacie);
            $em->flush();
        }

        return $this->redirectToRoute('pharmacie_index');
    }


    /**
     * Creates a form to delete a pharmacie entity.
     *
     * @param Pharmacie $pharmacie The pharmacie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pharmacie $pharmacie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pharmacie_delete', array('id' => $pharmacie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }



}
