<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/commentaire")
 */
class CommentaireController extends AbstractController
{
    /**
     * @Route("/", name="commentaire_index", methods={"GET"})
     */
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findAll(),'user'=>$this->getUser(),
        ]);
    }
    /**
     * @Route("/AffcheCommentaire/{id}", name="AffcheCommentaire")
     */
    public function AffcheCommentaire($id,NormalizerInterface $normalizer,CommentaireRepository $commentaireRepository)
    {

        $commentaire =$commentaireRepository->findByArticleId($id);


        $jsonContent=$normalizer->normalize($commentaire,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));


    }
    /**
     * @Route("/new", name="commentaire_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $commentaire->setCreation(new \DateTime('now'));
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="commentaire_show", methods={"GET"})
     */
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,'user'=>$this->getUser(),

        ]);
    }

    /**
     * @Route("/{id}/edit", name="commentaire_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('commentaire_index', ['user'=>$this->getUser(),], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commentaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commentaire_index', ['user'=>$this->getUser(),], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/com/AllCommentaires",name="AllCommentaires")
     */
    public function AllCommentaires(Request $request, NormalizerInterface $normalizer)
    {

        $repository = $this->getDoctrine()->getRepository(Commentaire::class);

        $commentaires = $repository->findAll();
        $jsonContent =$normalizer->normalize($commentaires, 'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
        // return $this->render('profil/allProfilJSON.html.twig', ['data'=>$jsonContent,]);
    }
    /**
     * @Route("/com/addCommobile/{id}/new", name="addCommobile")
     */
    public function addCommobile(Request $request,NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $user=new Commentaire();
        $user->setCommentaire($request->get('commentaire'));
        $user->setUser($request->get('user'));
        $user->setArticle($this->getDoctrine()->getRepository(Article::class)->find($id));
        $em->persist($user);
        $em->flush();
        $jsonContent=$normalizer->normalize($user,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
}
