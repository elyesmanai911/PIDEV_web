<?php

namespace App\Controller;


use App\Entity\Jeu;
use App\Form\JeuType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class JeuController extends AbstractController
{
    /**
     * @Route("/jeu", name="jeu")
     */
    public function index(): Response
    {
        return $this->render('jeu/index.html.twig', [
            'controller_name' => 'JeuController',
        ]);
    }
    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'JeuController',
        ]);
    }

    /**
     * @Route("/show", name="show")
     */
    public function show(): Response
    {
        return $this->render('jeu/show.html.twig', [
            'controller_name' => 'JeuController',
        ]);
    }
    /**
     * @Route("/listtJeu", name="listtJeu")
     */
    public function listtJeu()
    {
        $jeus=$this->getDoctrine()->getRepository(Jeu::class)->findAll();
        return $this->render('jeu/show.html.twig', array("jeus" => $jeus));
    }

    /**
     * @Route("/listJeu", name="listJeu")
     */
    public function listJeu()
    {
        $jeus=$this->getDoctrine()->getRepository(Jeu::class)->findAll();
        return $this->render('jeu/list.html.twig', array("jeus" => $jeus));
    }

    /**
     * @Route("/deleteJeu/{id}", name="deleteJeu")
     */
    public function deleteJeu($id)
    {
        $jeu = $this->getDoctrine()->getRepository(Jeu::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($jeu);
        $em->flush();
        return $this->redirectToRoute("listJeu");
    }

    /**
     * @Route("/addJeu", name="addJeu")
     */
    public function addJeu(Request $request)
    {
        $jeu = new Jeu();
        $form = $this->createForm(JeuType::class, $jeu);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jeu);
            $em->flush();
            return $this->redirectToRoute('listJeu');
        }
        return $this->render("jeu/add.html.twig",array('jeu'=>$form->createView()));
    }

    /**
     * @Route("/updateJeu/{id}", name="updateJeu")
     */
    public function updateJeu(Request $request,$id)
    {
        $jeu = $this->getDoctrine()->getRepository(Jeu::class)->find($id);
        $form = $this->createForm(JeuType::class, $jeu);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listJeu');
        }
        return $this->render("jeu/update.html.twig",array('jeu'=>$form->createView()));
    }

}
