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

class SimpleutilisateurController extends AbstractController
{
    /**
     * @Route("/simpleutilisateur", name="simpleutilisateur")
     */
    public function index(): Response
    {
        return $this->render('simpleutilisateur/index.html.twig', [
            'controller_name' => 'SimpleutilisateurController',
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
        return $this->redirectToRoute("affichesimpleutilisateur");
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
            $em = $this->getDoctrine()->getManager();
            $em->persist($Utilisateur);
            $em->flush();
            return $this->redirectToRoute('affichesimpleutilisateur');
        }
        return $this->render("simpleutilisateur/add.html.twig",['form'=>$form->createView()]);
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
            return $this->redirectToRoute('affichesimpleutilisateur');
        }
        return $this->render("simpleutilisateur/add.html.twig",['form'=>$form->createView()]);
    }

}
