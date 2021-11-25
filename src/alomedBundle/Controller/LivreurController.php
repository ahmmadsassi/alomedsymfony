<?php


namespace alomedBundle\Controller;


use alomedBundle\Entity\livreur;
use alomedBundle\Entity\userid;
use alomedBundle\Form\ModeleForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class LivreurController extends Controller
{

    //home page for livreur
    public function showalllivreurAction(Request $request){

        $em=$this->container->get('doctrine')->getEntityManager();
        $livreur=$em->getRepository('alomedBundle:livreur')->findALL();
        return $this->render('@alomed/pages/index.html.twig',array('livreur'=>$livreur));}


    //create livreur account
    public function createlivreurAction(Request $request)
    {
          $Modele = new livreur();
          $from = $this->createForm(ModeleForm::class,$Modele);
          $from->handleRequest($request);
          if ($from->isSubmitted() && $from->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->persist($Modele);
             $em->flush();
             return $this->redirect($this->generateUrl("index_homepage"));
}

        return $this->render('@alomed/pages/create.html.twig',array('Form'=>$from->createView()));
    }
    //get livreur by id
    public function getlivreurbyidAction( Request $request,$id)
    {
$livreur = $this->getDoctrine()->getRepository('alomedBundle:livreur')->find($id);

return $this->render('@alomed/pages/view.html.twig',array('livreur' => $livreur));

    }



    //update livreur
    public function updatelivreurAction(Request $request, $id)
    {
       $em=$this->getDoctrine()->getManager();
       $Modele=$em->getRepository('alomedBundle:livreur')->find($id);
       $editform=$this->createForm(ModeleForm::class,$Modele);
       $editform->handleRequest($request);
       if($editform->isSubmitted() && $editform->isValid()){

           $em->persist($Modele);
           $em->flush();
     return $this->redirect($this->generateUrl("index_homepage"));

       }
        return $this->render('@alomed/pages/edit.html.twig',array('editForm'=>$editform->createView()));


    }
    //delete livreur
    public function deletelivreurAction(Request $request,$id)
    {
        $em=$this->container->get('doctrine')->getManager();
        $livreur=$em->getRepository('alomedBundle:livreur')->find($id);
        if ($livreur !== null)
        {
            $em->remove($livreur);
            $em->flush();

        }
         else{
             throw new NotFoundHttpException("livreur with this id not found");
         }
        return $this->redirect($this->generateUrl("index_homepage"));

    }
public  function  rechrercherAction(Request  $request){

        $em =$this->container->get('doctrine')->getEntityManager();
         $livreur=$em->getRepository('alomedBundle:livreur')->findAll();
         if($request->isMethod('POST')){
             $motcle=$request->get('input_recherche');
             $query=$em->createQuery("SELECT m FROM alomedBundle:livreur m WHERE m.prenom LIKE '".$motcle."%'");
             $livreur=$query->getResult();
         }
    return $this->render('@alomed/pages/Rechercher.html.twig',array('livreur'=>$livreur));
}

    public function showalllivraisonAction(Request $request){
        $userid= new userid();
        $userid= $this->getDoctrine()->getRepository('alomedBundle:userid')->find(1);
        $id= $userid->getToken();
        $livreur= $this->getDoctrine()->getRepository('alomedBundle:livreur')->find($id);
        $livraisons = $livreur->getLivraisons();
        return $this->render('@alomed/pages/interfacelivreur.html.twig',array('livraison' => $livraisons));
    }



}