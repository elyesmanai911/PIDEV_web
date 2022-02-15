<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profil")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="profil_index", methods={"GET"})
     */
    public function index(ProfilRepository $profilRepository): Response
    {
        return $this->render('profil/index.html.twig', [
            'profils' => $profilRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="profil_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $profil = new Profil();
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($profil);
            $entityManager->flush();

            return $this->redirectToRoute('profil_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profil/new.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
            'user'=> $this->getUser()
        ]);
    }

    /**
     * @Route("/{id}", name="profil_show", methods={"GET"})
     */
    public function show(Profil $profil): Response
    {
        return $this->render('profil/show.html.twig', [
            'profil' => $profil,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="profil_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Profil $profil, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('profil_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profil/edit.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="profil_delete", methods={"POST"})
     */
    public function delete(Request $request, Profil $profil, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$profil->getId(), $request->request->get('_token'))) {
            $entityManager->remove($profil);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profil_index', [], Response::HTTP_SEE_OTHER);
    }
}
