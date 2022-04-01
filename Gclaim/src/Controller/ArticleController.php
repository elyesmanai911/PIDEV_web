<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Cat;
use App\Entity\Commentaire;
use App\Entity\Tournoi;
use App\Form\ArticleType;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CatRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(Request $request ,PaginatorInterface $paginator)
    { $donnees = $this->getDoctrine()->getRepository(Article::class)->findBy([],['createAt' => 'desc']);

        $articles = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1),
           3
        );
        return $this->render('article/index.html.twig', [
            'articles' => $articles,'user'=>$this->getUser(),
        ]);
    }
    /**
     * @Route("/affichage", name="affichage", methods={"GET"})
     */
    public function affichage(Request $request,CatRepository $catRepository,PaginatorInterface $paginator)
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $donnees = $this->getDoctrine()->getRepository(Article::class)->findBy([],['createAt' => 'desc']);

        $articles = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('article/affichage.html.twig', [
            'articles' => $articles,
            'user' => $user,
            'tournois' => $tournois,
            'categories'=>$catRepository->findAll(),



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
            //$flashy->success('Article Ajouté!', 'http://your-awesome-link.com');


            return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,

            'form' => $form->createView(),'user'=>$this->getUser(),
        ]);
    }

//    /**
//     * @Route("/{id}/show", name="article_show", methods={"GET", "POST"})
//     */
//    public function show(Article $article): Response
//    {
//        return $this->render('article/show.html.twig', [
//            'article' => $article,
//        ]);
//    }

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new = $form->getData();
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

            return $this->redirectToRoute('article_index', ['user'=>$this->getUser(),], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),'user'=>$this->getUser(),
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
    {   $user = $this->getUser();

        $article=$this->getDoctrine()->getRepository(Article::class)->find($id);
        $article ->setNbrVu($article ->getNbrVu()+1);
        $entityManager->persist($article);
        $entityManager->flush();
        $commentaire = new Commentaire();
        $commentaire->setCreation(new \DateTime('now'));
        $commentaire->setArticle($article);

        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('article_afficheA', array('id'=>$id), Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/afficheA.html.twig', [
            'articles' => $articleRepository->find($id),
            'form' => $form->createView(),
            'commentaire'=>$commentaire,
            'commentaires' => $commentaireRepository->findAll(),
            'id'=>$id,
            'user' => $user,
            'tournois' => $tournois,

        ]);

    }
    /**
     * @Route("/stats", name="stats")
     */

    public function statistiques(CatRepository $categRepo, ArticleRepository $annRepo){
        // On va chercher toutes les catégories
        $categories = $categRepo->findAll();

        $categNom = [];
        $categColor = [];
        $categCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($categories as $cat){
            $categNom[] = $cat->getNom();
            $categColor[] = $cat->getCouleur();
            $categCount[] = count($cat->getArticles());
        }

        return $this->render('article/stats.html.twig', [
            'categNom' => json_encode($categNom),
            'categColor' => json_encode($categColor),
            'categCount' => json_encode($categCount),
            'user'=>$this->getUser(),

        ]);
    }
    /**
     * @Route("/article/filtre_article", name="filtre_article", methods={"GET", "POST"})
     */
    public function filtre_article(ArticleRepository $articleRepository, CatRepository $catRepository, Request $request,  PaginatorInterface $paginator): Response
    {
        $categorie = $request->get('cat');

        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $articles = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Article a order by a.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();
        $articles = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Article a  WHERE a.cat in (:list) ')
            ->setParameter('list',$categorie)
            ->getResult();
        $ar =$paginator->paginate(
            $articles,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('article/affichage.html.twig', [
            'categories'=>$catRepository->findAll(),
            'articles' => $ar,
            'user' => $user,
            'tournois' => $tournois,
        ]);

    }
    /**
     * @Route("/searcharticle", name="searcharticle", methods={"GET"})
     */
    public function searcharticle(Request $request, NormalizerInterface $Normalizer, PaginatorInterface $paginator)
    {
        $articles=$paginator->paginate(
            $this->getDoctrine()->getRepository(Article::class)->findBy(['titre' => $request->get('search')]),
            $request->query->getInt('page',1),
            4

        );
        dump($request->get('search'));
        if (null != $request->get('search')) {
            return $this->render('/article/index.html.twig', [
                'articles' => $articles,
                'user'=>$this->getUser(),

            ]);
        }
    }
    /**
     * @Route("/AllArticles",name="AllArticles")
     */
    public function AllArticles(Request $request, NormalizerInterface $normalizer)
    {

        $repository = $this->getDoctrine()->getRepository(Article::class);

        $articles = $repository->findAll();
        $jsonContent =$normalizer->normalize($articles, 'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
        // return $this->render('profil/allProfilJSON.html.twig', ['data'=>$jsonContent,]);
    }
    /**
     * @Route("/addarticlesjson/new", name="addarticlesjson")
     */
    public function addarticlesjson(Request $request, EntityManagerInterface $entityManager, NormalizerInterface $normalizer ): Response
    {
        $article = new Article();
        $article->setCreateAt(new \DateTime('now'));
        $datetime = new \DateTime('now');

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        $article->setTitre($request->get('titre'));
        $article->setImage($request->get('image'));
        $article->setDescription($request->get('description'));
        $article->setCreateAt($datetime);

        $article->setNbrVu(0);

        $entityManager->persist($article);
        $entityManager->flush();
        $jsonContent =$normalizer->normalize($article, 'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/editarticlejson/{id}/edit", name="editarticlejson")
     */
    public function editarticlejson (Request $request, Article $article, EntityManagerInterface $entityManager , NormalizerInterface $normalizer ): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        $datetime = new \DateTime('now');

        $article->setTitre($request->get('titre'));
        $article->setImage($request->get('image'));
        $article->setDescription($request->get('description'));
        $article->setCreateAt($datetime);
        $article->setNbrVu(0);

        $entityManager->flush();
        $jsonContent =$normalizer->normalize($article, 'json' ,['groups'=>'post:read']);
        return new Response("information updated successfully". json_encode($jsonContent));

    }
    /**
     * @Route("/deletearticlejson/{id}", name="deletearticlejson")
     */
    public function deletearticlejson( Article $article ,NormalizerInterface $normalizer, $id): Response
    {
        {
            $em = $this->getDoctrine()->getManager();
            $article=$em->getRepository(Article::class)->find($id);
            $em->remove($article);
            $em->flush();
            $jsonContent =$normalizer->normalize($article, 'json' ,['groups'=>'post:read']);
            return new Response("information deleted successfully".json_encode($jsonContent));
        }

    }
    /**
     * @Route("/affichearticlejson/{id}/affiche", name="affichearticlejson")
     */
    public function affichearticlejson(Request $request, NormalizerInterface $normalizer , $id)
    {

        $repository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repository->find($id);
        $jsonContent =$normalizer->normalize($articles, 'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
        // return $this->render('profil/allProfilJSON.html.twig', ['data'=>$jsonContent,]);
    }


 }