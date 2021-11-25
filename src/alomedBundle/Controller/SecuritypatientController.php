<?php


namespace alomedBundle\Controller;

use alomedBundle\Entity\Admin;
use alomedBundle\Entity\livreur;
use alomedBundle\Entity\Medecin;
use alomedBundle\Entity\Patient;
use alomedBundle\Entity\Pharmacie;
use alomedBundle\Entity\userid;
use alomedBundle\user\usercred;
use alomedBundle\Form\LoginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;

class SecuritypatientController extends Controller
{

    public function Login2Action()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(LoginForm::class, [
        ]);

        return $this->render(
            "alomedBundle:Security:login2.html.twig",
            array(
                // last username entered by the user
                'form' => $form->createView(),
                'error' => $error,
            )
        );
    }

    public function verifpatientAction(Request $request)
    {

        if ($request->isMethod('POST')) {
            $patient = new Patient();
            $email = $request->get('email');
            $password = $request->get('mdp');
            $em = $this->getDoctrine()->getManager();
            $patient = $em->getRepository('alomedBundle:Patient')
                ->getUserByUsernameAndPassword($email, $password);

            echo json_encode($patient);
            if ($patient == null  ) {

                $this->addFlash(
                    'info','Email ou mot de passe invalide'

                );

            }
            else{


                $idp = $patient[0]->getId();
                $entityManager = $this->getDoctrine()->getManager();
                $userid = new userid();
                $userid ->setIdu(1);
                $userid->setToken($idp);
                $entityManager->persist($userid);
                $entityManager->flush();
                return $this->redirect($this->generateUrl("patient_interface"));
            }
        }
        return $this->render('@alomed/Security/login2.html.twig');
    }

    public function  veriflivreurAction(Request $request){

        if ($request->isMethod('POST')) {
            $livreur = new livreur();
            $email = $request->get('email');
            $password = $request->get('mdp');
            $em = $this->getDoctrine()->getManager();
            $livreur = $em->getRepository('alomedBundle:livreur')
                ->getlivreurByUsernameAndPassword($email, $password);
            if ($livreur == null  ) {

                $this->addFlash(
                    'info','Email ou mot de passe invalide'

                );

            }else {
                $idp = $livreur[0]->getId();
                $entityManager = $this->getDoctrine()->getManager();
                $userid = new userid();
                $userid ->setIdu(1);
                $userid->setToken($idp);
                $entityManager->persist($userid);
                $entityManager->flush();
                return $this->redirect($this->generateUrl("livreur_interface"));
            }

        }

        return $this->render('@alomed/Security/login4.html.twig');

    }

    public function medecinverifAction(Request $request ){
        if ($request->isMethod('POST')) {
            $medecin = new Medecin();
            $email = $request->get('email');
            $password = $request->get('mdp');
            $em = $this->getDoctrine()->getManager();
            $livreur = $em->getRepository('alomedBundle:Medecin')
                      ->getmedecinByUsernameAndPassword($email, $password);
            if ($livreur == null  ) {

                $this->addFlash(
                    'info','Email ou mot de passe invalide'

                );}else{
                $idp = $livreur[0]->getId();
                $entityManager = $this->getDoctrine()->getManager();
                $userid = new userid();
                $userid ->setIdu(1);
                $userid->setToken($idp);
                $entityManager->persist($userid);
                $entityManager->flush();
                return $this->redirect($this->generateUrl("medecin_interface"));

            }
        }
        return $this->render('@alomed/Security/login.html.twig');



    }
public function phverfifAction(Request $request){

    if ($request->isMethod('POST')) {
        $ph = new Pharmacie();
        $email = $request->get('email');
        $password = $request->get('mdp');
        $em = $this->getDoctrine()->getManager();
        $ph = $em->getRepository('alomedBundle:Pharmacie')
            ->getpharByUsernameAndPassword($email, $password);
        if ($ph == null  ) {

            $this->addFlash(
                'info','Email ou mot de passe invalide'

            );}else{
            $idp = $ph[0]->getId();
            $entityManager = $this->getDoctrine()->getManager();
            $userid = new userid();
            $userid ->setIdu(1);
            $userid->setToken($idp);
            $entityManager->persist($userid);
            $entityManager->flush();
            return $this->redirect($this->generateUrl("pharmacie_interface"));

        }
    }
    return $this->render('@alomed/Security/login3.html.twig');










}








    public function verifadminmeAction(Request $request){

        if ($request->isMethod('POST')) {
            $admin = new Admin();
            $email = $request->get('emailadmin');
            $password = $request->get('mdpadmin');
            $em = $this->getDoctrine()->getManager();
          $admin =$em->getRepository('alomedBundle:Admin')
                   ->getadminByUsernameAndPassword( $email,  $password);
            if ($admin == null  ) {

                $this->addFlash(
                    'info','Email ou mot de passe invalide'

                );}
            else{
                return $this->redirect($this->generateUrl("index_homepage"));

            }
        }
        return $this->render('@alomed/Security/login1.html.twig');

    }






}