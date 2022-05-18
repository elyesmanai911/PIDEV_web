<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Profil;
use App\Entity\Rdv;
use App\Entity\Tournoi;
use App\Entity\Utilisateur;
use App\Form\ProfilType;
use App\Repository\EquipeRepository;
use App\Repository\ProfilRepository;
use ContainerXwnxeG5\PaginatorInterface_82dac15;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

/**
 * @Route("/profil")
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/", name="profil_index", methods={"GET"})
     */
    public function index(ProfilRepository $profilRepository, PaginatorInterface $paginator, Request $request): Response
    { $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $donnee=$profilRepository->findAll();
        $profil=$paginator->paginate(
            $donnee,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('profil/index.html.twig', [
            'profils' => $profil,
            'user'=> $this->getUser(),"tournois" => $tournois,

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

    }

    /**
     * @Route("/new", name="profil_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {$tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
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
            'user'=> $this->getUser(),"tournois" => $tournois,
        ]);
    }
    /**
     * @Route("/ajoutProfilMobile", name="ajoutProfilMobile")
     */
    public function ajoutProfilMobile(Request $request,NormalizerInterface $normalizer)
    {

        $profil=new Profil();
        $username=$request->query->get("username");

        $description=$request->query->get("description");
        $game=$request->query->get("game");
        $numero=$request->query->get("numero");
        $idUser=$request->query->get("user");
        $em=$this->getDoctrine()->getManager();
        $profil->setusername($username);

        $profil->setDescription($description);
        $profil->setGame($game);
        $profil->setNumero($numero);
        $profil->setUser($this->getDoctrine()->getRepository(Utilisateur::class)->find($idUser));

        $em->persist($profil);
        $em->flush();
        $jsonContent=$normalizer->normalize($profil,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/updateProfilMobile/{id}", name="updateProfilMobile")
     */
    public function updatProfiMobile($id,Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $profil=$em->getRepository(Profil::class)->find($id);

        $username=$request->query->get("username");
        $description=$request->query->get("description");
        $game=$request->query->get("game");
        $numero=$request->query->get("numero");
        $profil->setusername($username);
        $profil->setDescription($description);
        $profil->setGame($game);
        $profil->setNumero($numero);
        $em->persist($profil);
        $em->flush();
        $jsonContent=$normalizer->normalize($profil,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/{id}", name="profil_show", methods={"GET"})
     */
    public function show(Profil $profil): Response
    {$tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $coach = $this->getDoctrine()->getRepository(Rdv::class)->findBycoach($profil->getId());

        return $this->render('profil/show.html.twig', [
            'profil' => $profil,
            'coach' =>$coach,
            'user'=> $this->getUser(),"tournois" => $tournois,

        ]);
    }

    /**
     * @Route("/{id}/edit", name="profil_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Profil $profil, EntityManagerInterface $entityManager): Response
    {$tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $form = $this->createForm(ProfilType::class, $profil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('profil_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profil/edit.html.twig', [
            'profil' => $profil,
            'form' => $form->createView(),
            'user'=> $this->getUser(),"tournois" => $tournois,
        ]);
    }

    /**
     * @Route("/deleteProfilMobile/{id}", name="deleteProfilMobile")
     */
    public function deleteProfilMobile($id,ProfilRepository  $repository,Request $request,NormalizerInterface $normalizable)
    {$em=$this->getDoctrine()->getManager();
        $profil=$repository->find($id);
        $em->remove($profil);
        $em->flush();
        $jsonContent =$normalizable->normalize($profil,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/{id}", name="pro_delete", methods={"GET" , "POST"}))
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
