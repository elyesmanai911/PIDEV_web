<?php

namespace App\Controller;
use App\Entity\Jeu;
use App\Entity\Tournoi;
use App\Form\TournoiType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class TournoiController extends AbstractController
{
    /**
     * @Route("/tournoi", name="tournoi")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('tournoi/index.html.twig', array("tournois" => $tournois, 'user' => $user));
    }
    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'TournoiController',
        ]);
    }
    /**
     * @Route("/traff", name="traff")
     */
    public function traff(): Response
    {
        $user = $this->getUser();
        return $this->render('tournoi/tournoi.html.twig', [
            'controller_name' => 'TournoiController', 'user' => $user
        ]);
    }

    /**
     * @Route("/show", name="show")
     */
    public function show(): Response
    {
        return $this->render('tournoi/show.html.twig', [
            'controller_name' => 'TournoiController',
        ]);
    }
    /**
     * @Route("/listtTournoi", name="listtTournoi")
     */
    public function listtTournoi()
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('tournoi/show.html.twig', array("tournois" => $tournois, 'user' => $user));
    }

    /**
     * @Route("/listTournoi", name="listTournoi")
     */
    public function listTournoi()
    {
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('tournoi/list.html.twig', array("tournois" => $tournois));
    }

    /**
     * @Route("/deleteTournoi/{id}", name="deleteTournoi")
     */
    public function deleteTournoi($id)
    {
        $tournoi = $this->getDoctrine()->getRepository(Tournoi::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($tournoi);
        $em->flush();
        return $this->redirectToRoute("listTournoi");
    }

    /**
     * @Route("/addTournoi", name="addTournoi")
     */
    public function addTournoi(Request $request)
    {
        $tournoi = new Tournoi();
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->add('save',SubmitType::class,['label' => 'Enregistrer']);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $em->flush();
            return $this->redirectToRoute('listTournoi');
        }
        return $this->render("tournoi/add.html.twig",array('tournoi'=>$form->createView()));
    }

    /**
     * @Route("/updateTournoi/{id}", name="updateTournoi")
     */
    public function updateTournoi(Request $request,$id)
    {
        $tournoi = $this->getDoctrine()->getRepository(Tournoi::class)->find($id);
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->add('save',SubmitType::class,['label' => 'Enregistrer']);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listTournoi');
        }
        return $this->render("tournoi/update.html.twig",array('tournoi'=>$form->createView()));
    }



}
