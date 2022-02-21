<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\SimpleUtilisateur;
use App\Form\CoachType;
use App\Form\SimpleUtilisateurType;
use App\Repository\CoachRepository;
use App\Repository\SimpleUtilisateurRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachController extends AbstractController
{
    /**
     * @Route("/coach", name="coach")
     */
    public function index(): Response
    {
        return $this->render('coach/index.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }
    /**
     * @Route("/affichecoach", name="affichecoach")
     */
    public function readcoach(CoachRepository $repository)
    {
        $simple=$repository->findall();
        return $this->render('coach/list.html.twig',["l"=>$simple]);
    }
    /**
     * @Route("/deletecoach/{id}", name="deletecoach")
     */
    public function deletecoach($id,CoachRepository $repository)
    {
        $coach=$repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($coach);
        $em->flush();
        return $this->redirectToRoute("affichecoach");
    }
    /**
     * @Route("/addcoach", name="addcoach")
     */

    public function addcoach(Request $request)
    {
        $coach = new Coach();
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coach);
            $em->flush();
            return $this->redirectToRoute('affichecoach');
        }
        return $this->render("coach/add.html.twig",['form'=>$form->createView()]);
    }
    /**
     * @Route("/updatecoach/{id}", name="updatecoach")
     */

    public function updatecoach($id,Request $request,CoachRepository $repository)
    {
        $coach=$repository->find($id);
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coach);
            $em->flush();
            return $this->redirectToRoute('affichecoach');
        }
        return $this->render("coach/add.html.twig",['form'=>$form->createView()]);
    }
    /**
     * @Route("/deletesimpleutilisateur1/{id}", name="deletesimpleutilisateur1")
     */
    public function deletesimpleutilisateur1($id,SimpleUtilisateurRepository $repository)
    {
        $simpleutilisateur=$repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($simpleutilisateur);
        $em->flush();
        return $this->redirectToRoute("affichesimpleutilisateur");
    }
}
