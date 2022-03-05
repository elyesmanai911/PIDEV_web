<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Entity\Rdv;
use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use ContainerXwnxeG5\PaginatorInterface_82dac15;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/profil")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="profil_index", methods={"GET"})
     */
    public function index(ProfilRepository $profilRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $donnee=$profilRepository->findAll();
        $profil=$paginator->paginate(
            $donnee,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('profil/index.html.twig', [
            'profils' => $profil,
            'user'=> $this->getUser()

        ]);
    }
    /**
     * @Route("/AllProfils",name="AllProfils")
     */
    public function AllProfils(Request $request, NormalizerInterface $normalizer)
    {

        $repository = $this->getDoctrine()->getRepository(Profil::class);
        $profils = $repository->findAll();
        $jsonContent =$normalizer->normalize($profils, 'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
        // return $this->render('profil/allProfilJSON.html.twig', ['data'=>$jsonContent,]);
    }

    /**
     * @Route("/new", name="profil_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user=$this->getUser();
        $profil = new Profil();
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $profil->setUser($user);
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
        $coach = $this->getDoctrine()->getRepository(Rdv::class)->findBycoach($profil->getId());

        return $this->render('profil/show.html.twig', [
            'profil' => $profil,
            'coach' =>$coach,
            'user'=> $this->getUser()
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
            'user'=> $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="profil_delete", methods={"GET" , "POST"}))
     */
    public function delete(Request $request, Profil $profil, EntityManagerInterface $entityManager): Response
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($profil);
        $em->flush();

        $repo =$this->getDoctrine()->getRepository(Profil::class);
        return $this->redirectToRoute("profil_index");

        /* if ($this->isCsrfTokenValid('delete'.$profil->getId(), $request->request->get('_token'))) {
            $entityManager->remove($profil);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profil_index', [], Response::HTTP_SEE_OTHER);*/
    }


}
