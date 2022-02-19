<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Equipe;
use App\Entity\SimpleUtilisateur;
use App\Form\CoachType;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use App\Repository\SimpleUtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index(): Response
    { $user = $this->getUser();
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController', 'user' => $user
        ]);
    }


    /**
     * @Route("/affichetoutequipe", name="affichetoutequipe")
     */
    public function readequipe(EquipeRepository  $repository)
    {
        $equipe=$repository->findall();
        return $this->render('equipe/list.html.twig',["equipe"=>$equipe,]);
    }
    /**
     * @Route("/afficheequipe", name="afficheequipe")
     */
    public function afficheequipe(EquipeRepository  $repository)
    {$user = $this->getUser();
        $equipe=$repository->findall();
        return $this->render('equipe/showequipe.html.twig',["equipe"=>$equipe,'user' => $user]);
    }
    /**
     * @Route("/addequipe", name="addequipe")
     */

    public function addequipe(Request $request)
    { $user = $this->getUser();
        $equipe = new Equipe();

        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            date_default_timezone_set('Europe/Paris');
            $dateTime = date_create_immutable_from_format('m/d/Y', date('m/d/Y'));
            $em = $this->getDoctrine()->getManager();
            $equipe->addSimpleutilisateur($user);
            $equipe->setDateCreation($dateTime);
            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute("gclaim");
        }
        return $this->render("equipe/add.html.twig",['form'=>$form->createView(),'user' => $user]);
    }
    /**
     * @Route("/afficheparequipe/{id}", name="afficheparequipe")
     */
    public function afficheparclub($id,EquipeRepository  $repository)
    {
        $equipe = $repository->find($id);
        return $this->render('equipe/show.html.twig', array("equipe" => $equipe));
    }
    /**
     * @Route("/deleteequipe/{id}", name="deleteequipe")
     */
    public function deleteequipe($id,EquipeRepository  $repository)
    {
        $equipe = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($equipe);
        $em->flush();
        return $this->redirectToRoute("affichetoutequipe");
    }
    /**
     * @Route("/rejoindreequipe/{id}", name="rejoindreequipe")
     */
    public function rejoindreequipe($id,EquipeRepository  $repository,Request $request)
    {   $user = $this->getUser();
        $equipe = $repository->find($id);
        $equipe->addSimpleutilisateur($user);
        $em = $this->getDoctrine()->getManager();

        $em->persist($equipe);
        $em->flush();
        return $this->redirectToRoute("afficheequipe");
    }
    /**
     * @Route("/updateequipe/{id}", name="updateequipe")
     */
    public function updateequipe(Request $request,$id,EquipeRepository  $repository)
    {
        $equipe = $repository->find($id);
        $form = $this->createForm(EquipeType::class, $equipe);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('affichetoutequipe');
        }
        return $this->render("equipe/add.html.twig",array('form'=>$form->createView()));
    }
}
