<?php

namespace App\Controller;

use App\Entity\Rdv;
use App\Form\RdvType;
use App\Repository\ProfilRepository;
use App\Repository\RdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rdv")
 */
class RdvController extends AbstractController
{
    /**
     * @Route("/", name="rdv_index", methods={"GET"})
     */
    public function index(RdvRepository $rdvRepository): Response
    {

        $user=$this->getUser();
        return $this->render('rdv/index.html.twig', [
            'rdvs' => $rdvRepository->findAll(),
            'user' => $user,
        ]);
    }

    /**
     * @Route("/new/{id}", name="rdv_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, ProfilRepository $repository,$id, RdvRepository $rep): Response
    {

        $coach=$repository->find($id);
$error='safe';
        $rdv = new Rdv();

        $form = $this->createForm(RdvType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($rep->verif($rdv->getDate(), $id) == null) {
                $rdv->setCoach($coach);
                $entityManager->persist($rdv);
                $entityManager->flush();

                return $this->redirectToRoute('rdv_index', [], Response::HTTP_SEE_OTHER);
            } else {

                $error = 'unsafe';
            }
        }

        return $this->render('rdv/new.html.twig', [
            'rdv' => $rdv,

            'form' => $form->createView(),
            'user'=> $this->getUser(),
            'error' => $error,
        ]);
    }


    /**
     * @Route("/admin/rdv", name="rdv_show", methods={"GET"})
     */
    public function show(RdvRepository $repository): Response
    {
        $rdv=$repository->findall();
        return $this->render('rdv/list.html.twig', [
            'rdv' => $rdv,
            'user'=> $this->getUser(),

        ]);
    }

    /**
     * @Route("/{id}/edit", name="rdv_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Rdv $rdv, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RdvType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rdv/edit.html.twig', [
            'rdv' => $rdv,
            'form' => $form->createView(),
            'user'=> $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="rdv_delete", methods={"POST"})
     */
    public function delete(Request $request, Rdv $rdv, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rdv->getId(), $request->request->get('_token'))) {
            $entityManager->remove($rdv);
            $entityManager->flush();
        }

        return $this->redirectToRoute('rdv_index', [], Response::HTTP_SEE_OTHER);
    }
}
