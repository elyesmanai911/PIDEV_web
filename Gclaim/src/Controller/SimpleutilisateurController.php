<?php

namespace App\Controller;
use App\Entity\SimpleUtilisateur;
use App\Form\SimpleUtilisateurType;
use App\Repository\SimpleUtilisateurRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder;

class SimpleutilisateurController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(): Response
    {
        $user = $this->getUser();

        if(!$user){
            return $this->redirectToRoute('app_login');
        }

        return $this->render('simpleutilisateur/profile.html.twig', [
            'user' => $user
        ]);
    }
    /**
     * @Route("/affichesimpleutilisateur", name="affichesimpleutilisateur")
     */
    public function readsimpleutilisateur(SimpleUtilisateurRepository  $repository)
    {
        $simple=$repository->findall();
        return $this->render('simpleutilisateur/list.html.twig',["l"=>$simple]);
    }

    /**
     * @Route("/deletesimpleutilisateur/{id}", name="deletesimpleutilisateur")
     */
    public function deletesimpleutilisateur($id,SimpleUtilisateurRepository $repository)
    {
        $simpleutilisateur=$repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($simpleutilisateur);
        $em->flush();
        return $this->redirectToRoute("profile");
    }
    /**
     * @Route("/addUtilisateur", name="addUtilisateur")
     */

    public function addUtilisateur(Request $request)
    {
        $Utilisateur = new SimpleUtilisateur();
        $form = $this->createForm(SimpleUtilisateurType::class, $Utilisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($form["verifpassword"]->getData() != $form["password"]->getData()) {
                return $this->render('simpleutilisateur/add.html.twig', [
                    "form" => $form->createView(),
                    "error" => "Les mots de passe ne correspondent pas!",
                    "user"=>$Utilisateur
                ]);
            }
            else {
                //$Utilisateur->setPassword(MD5($Utilisateur->getPassword(), PASSWORD_DEFAULT));
                // $Utilisateur->setVerifPassword(password_hash($Utilisateur->getVerifPassword(), PASSWORD_DEFAULT));
                $Utilisateur->setRoles(['ROLE_USER']);
                $em = $this->getDoctrine()->getManager();
                $em->persist($Utilisateur);
                $em->flush();
                return $this->redirectToRoute("app_login");
            }
        }
        return $this->render("simpleutilisateur/add.html.twig",['form'=>$form->createView(),"user"=>$Utilisateur,'error'=>'']);
    }
    /**
     * @Route("/updateUtilisateur/{id}", name="updateUtilisateur")
     */

    public function updateUtilisateur($id,Request $request,UtilisateurRepository $repository)
    {
        $simpleutilisateur=$repository->find($id);
        $form = $this->createForm(SimpleUtilisateurType::class, $simpleutilisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($simpleutilisateur);
            $em->flush();
            return $this->redirectToRoute('profile');
        }
        return $this->render("simpleutilisateur/modif.html.twig",['form'=>$form->createView(),'user'=>$simpleutilisateur,'error'=>'']);
    }


}