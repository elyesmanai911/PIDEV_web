<?php

namespace App\Controller;
use App\Entity\Coach;
use App\Entity\SimpleUtilisateur;
use App\Entity\Utilisateur;
use App\Form\CoachType;
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
    /**
     * @Route("/simpleutilisateur/tri", name="tri")
     */
    public function Tri(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $query = $em->createQuery(
            'SELECT a FROM App\Entity\SimpleUtilisateur a 
            ORDER BY a.username'
        );

        $activites = $query->getResult();
        return $this->render('simpleutilisateur/list.html.twig',
            array('l' => $activites));

    }
    /**
     * @Route("/demandecoach/{id}", name="demandecoach")
     */
    public function demandecoach(Request $request,$id,UtilisateurRepository $utilisateurRepository)
    {    $user=$utilisateurRepository->find($id);
         $user->setIsVerified(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute("profile");
    }
    /**
     * @Route("/listedesdemandes", name="listedesdemandes")
     */
    public function listedesdemandes()
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT a FROM App\Entity\SimpleUtilisateur a 
            where a.isVerified = 1'
        );

        $u = $query->getResult();
        return $this->render('simpleutilisateur/listdesdemandes.html.twig',
            array('l' => $u));
    }

    /**
     * @Route("/devenircoach/{id}", name="devenircoach")
     */
    public function devenircoach($id,SimpleUtilisateurRepository  $utilisateurRepository)
    {$user=$utilisateurRepository->find($id);
        $this->container->get('security.token_storage')->setToken(null);
        $coach = new Coach();
        $coach->setIsVerified(0);
        $coach->setUserName($user->getUserName());
        $coach->setVerifPassword($user->getVerifPassword());
        $coach->setEmail($user->getEmail());
        $coach->setPassword($user->getPassword());

        $coach->setRoles(['ROLE_COACH']);
        $coach->setSpecialite("rien");
        $em = $this->getDoctrine()->getManager();

        $em->persist($coach);
        $em->remove($user);
        $em->flush();


        return $this->redirectToRoute('affichecoach');

    }
    /**
     * @Route("/annulerlademande/{id}", name="annulerlademande")
     */
    public function annulerlademande($id,SimpleUtilisateurRepository  $utilisateurRepository)
    {$user=$utilisateurRepository->find($id);
       $user->setIsVerified(0);
        $em = $this->getDoctrine()->getManager();

        $em->persist($user);

        $em->flush();


        return $this->redirectToRoute('affichecoach');

    }
}
