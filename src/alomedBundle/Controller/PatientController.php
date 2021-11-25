<?php


namespace alomedBundle\Controller;


use alomedBundle\Entity\Patient;
use alomedBundle\Entity\userid;
use alomedBundle\Form\ModeleForm;
use alomedBundle\Form\ModeleFormMedecin;
use alomedBundle\user\usercred;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PatientController extends Controller
{

    public  function  showallpatientAction(Request  $request){

        $em=$this->container->get('doctrine')->getEntityManager();
        $patient=$em->getRepository('alomedBundle:Patient')->findALL();
        return $this->render('@alomed/pages/patientindex.html.twig',array('patient'=>$patient));
    }
    public function createpatientAction(Request $request)
    {
        $Modelepatient = new Patient();
        $from = $this->createForm(ModeleForm::class,$Modelepatient);
        $from->handleRequest($request);
        if ($from->isSubmitted() && $from->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Modelepatient);
            $em->flush();
            return $this->redirect($this->generateUrl("index_patienthomepage"));
        }

        return $this->render('@alomed/pages/createPatient.html.twig',array('Formp'=>$from->createView()));

    }
    public function getpatientbyidAction( Request $request,$id)
    {
        $patient = $this->getDoctrine()->getRepository('alomedBundle:Patient')->find($id);

        return $this->render('@alomed/pages/viewpatient.html.twig',array('patient' => $patient));

    }
    public function deletepatientAction(Request $request,$id)
    {
        $em=$this->container->get('doctrine')->getManager();
        $patient=$em->getRepository('alomedBundle:Patient')->find($id);
        if ($patient !== null)
        {
            $em->remove($patient);
            $em->flush();

        }
        else{
            throw new NotFoundHttpException("patient with this id not found");
        }
        return $this->redirect($this->generateUrl("index_patienthomepage"));

    }
    public function updatepatientAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $Modelepatient=$em->getRepository('alomedBundle:Patient')->find($id);
        $editform=$this->createForm(ModeleForm::class,$Modelepatient);
        $editform->handleRequest($request);
        if($editform->isSubmitted() && $editform->isValid()){

            $em->persist($Modelepatient);
            $em->flush();
            return $this->redirect($this->generateUrl("index_patienthomepage"));

        }
        return $this->render('@alomed/pages/editpatient.html.twig',array('editForm2'=>$editform->createView()));
    }

    public function showalllivraisonAction(Request $request){
        $userid= new userid();
        $userid= $this->getDoctrine()->getRepository('alomedBundle:userid')->find(1);
        $id= $userid->getToken();
        $livreur= $this->getDoctrine()->getRepository('alomedBundle:Patient')->find($id);
        $livraisons = $livreur->getLivraisons();
        return $this->render('@alomed/pages/interfacepatient.html.twig',array('livraison' => $livraisons));
    }
    public function getlivraisonbyidAction( Request $request,$id)
    {

        $livraison = $this->getDoctrine()->getRepository('alomedBundle:Livraison')->find($id);

        return $this->render('@alomed/pages/viewlivraison.html.twig',array('livraison' => $livraison));

    }
    public function livrerAction(Request $request,$id){

        $em=$this->getDoctrine()->getManager();
        $livraisons = $this->getDoctrine()->getRepository('alomedBundle:Livraison')->find($id);
        $livraisons->setEtat("livrer");
        $em->persist($livraisons);
        $em->flush();
        return $this->redirect($this->generateUrl("index_patienthomepage"));
    }
    public function deconctionAction(){
        $em=$this->container->get('doctrine')->getManager();
        $patient=$em->getRepository('alomedBundle:userid')->find(1);
        if ($patient !== null)
        {
            $em->remove($patient);
            $em->flush();

        }
        else{
            throw new NotFoundHttpException("patient with this id not found");
        }
        return $this->redirect($this->generateUrl("alomed_role"));
    }


}