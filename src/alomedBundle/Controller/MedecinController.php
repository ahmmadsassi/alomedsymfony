<?php


namespace alomedBundle\Controller;


use  alomedBundle\Entity\Medecin;
use alomedBundle\Entity\userid;
use alomedBundle\Form\ModeleFormMedecin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MedecinController extends  Controller
{
public  function  showallmedecinAction(Request  $request){

    $em=$this->container->get('doctrine')->getEntityManager();
    $medecin=$em->getRepository('alomedBundle:Medecin')->findALL();
    return $this->render('@alomed/pages/indexmedecin.html.twig',array('medecin'=>$medecin));
}
    public function createmedecinAction(Request $request)
    {
        $Modelemedecin = new Medecin();
        $from = $this->createForm(ModeleFormMedecin::class,$Modelemedecin);
        $from->handleRequest($request);
        if ($from->isSubmitted() && $from->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Modelemedecin);
            $em->flush();
            return $this->redirect($this->generateUrl("index_medecinhomepage"));
        }

        return $this->render('@alomed/pages/createmedecin.html.twig',array('Form1'=>$from->createView()));

}
    public function getmedecinbyidAction( Request $request,$id)
    {
        $medecin = $this->getDoctrine()->getRepository('alomedBundle:Medecin')->find($id);

        return $this->render('@alomed/pages/viewmedecin.html.twig',array('medecin' => $medecin));

    }

    public function showallordennanceAction(Request $request){

        $userid= new userid();
        $userid= $this->getDoctrine()->getRepository('alomedBundle:userid')->find(1);
        $id= $userid->getToken();
     $medecin= $this->getDoctrine()->getRepository('alomedBundle:Medecin')->find($id);
    $ordennances = $medecin->getOrdonnances();

        return $this->render('@alomed/pages/interfacemedecin.html.twig',array('ordennances' => $ordennances));
    }




    public function deletemedecinAction(Request $request,$id)
    {
        $em=$this->container->get('doctrine')->getManager();
        $medecin=$em->getRepository('alomedBundle:Medecin')->find($id);
        if ($medecin !== null)
        {
            $em->remove($medecin);
            $em->flush();

        }
        else{
            throw new NotFoundHttpException("medecin with this id not found");
        }
        return $this->redirect($this->generateUrl("index_medecinhomepage"));

    }
    public function updatemedecinAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $Modelemedecin=$em->getRepository('alomedBundle:Medecin')->find($id);
        $editform=$this->createForm(ModeleFormMedecin::class,$Modelemedecin);
        $editform->handleRequest($request);
        if($editform->isSubmitted() && $editform->isValid()){

            $em->persist($Modelemedecin);
            $em->flush();
            return $this->redirect($this->generateUrl("index_medecinhomepage"));

        }
        return $this->render('@alomed/pages/editmedecin.html.twig',array('editForm1'=>$editform->createView()));


    }



}