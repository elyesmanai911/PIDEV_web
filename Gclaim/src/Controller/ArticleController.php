<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
    /**
     * @Route("/affichage", name="affichage", methods={"GET"})
     */
    public function affichage(ArticleRepository $articleRepository): Response
    {
        return $this->render('article/affichage.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="article_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $article->setCreateAt(new \DateTime('now'));

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new=$form->getData();
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        'img\article',
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $article->setImage($newFilename);
            }
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new=$form->getData();
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        'img\article',
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $article->setImage($newFilename);
            }
            $entityManager->flush();

            return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="article_delete",methods={"GET" , "POST"})
     */
    public function delete( Article $article ): Response
    {
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            $repo =$this->getDoctrine()->getRepository(Article::class);
            return $this->redirectToRoute("article_index");
        }

    }

    /**
     * @Route("/{id}/afficheA", name="article_afficheA", methods={"GET" , "POST"})
     */
    public function afficheA(ArticleRepository $articleRepository,CommentaireRepository $commentaireRepository,$id ,Request $request, EntityManagerInterface $entityManager): Response
    {
        $article=$this->getDoctrine()->getRepository(Article::class)->find($id);
        $commentaire =new Commentaire();
        $commentaire->setCreation(new \DateTime('now'));
        $commentaire->setArticle($article);

        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('article_afficheA', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/afficheA.html.twig', [
            'articles' => $articleRepository->find($id),
            'form' => $form->createView(),
            'commentaire'=>$commentaire,
           'commentaires' => $commentaireRepository->findAll(),

        ]);

    }
}
