<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/categorie")
 */
class CategorieController extends AbstractController
{
    /**
     * @Route("/", name="categorie_index", methods={"GET"})
     */
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/categ/Allcategories", name="Allcategories")
     */
    public function Allcategories(Request $request, NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Categorie::class);
        $categories = $repository->findAll();
        $jsonContent = $Normalizer->normalize($categories, 'json',['groups'=>'post:read']);
//        return $this->render('produit/Allproducts', [
//            'data' => $jsonContent,
//        ]);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/new", name="categorie_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/addcategoriejson/new", name="addcategoriejson")
     */
    public function addcategoriejson(NormalizerInterface $Normalizer,Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        $categorie->setNomCategorie($request->get('nom_categorie'));
        $categorie->setTypeCategorie($request->get('type_categorie'));
            $entityManager->persist($categorie);
            $entityManager->flush();

        $jsonContent = $Normalizer->normalize($categorie, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));


    }

    /**
     * @Route("/{id_categorie}", name="categorie_show", methods={"GET"})
     */
    public function show(Categorie $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/{id_categorie}/edit", name="categorie_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),'user'=>$this->getUser(),
        ]);
    }


    /**
     * @Route("/updatecategoriejson/{id_categorie}/edit", name="updatecategoriejson")
     */
    public function updatecategoriejson(NormalizerInterface $Normalizer,Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        $categorie->setNomCategorie($request->get('nom_categorie'));
        $categorie->setTypeCategorie($request->get('type_categorie'));
            $entityManager->flush();

        $jsonContent = $Normalizer->normalize($categorie, 'json',['groups'=>'post:read']);
        return new Response("information updated successfully".json_encode($jsonContent));

    }


    /**
     * @Route("/{id_categorie}", name="categorie_delete", methods={"POST"})
     */
    public function delete(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getidCategorie(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/deletecategoriejson/{id}", name="deletecategoriejson")
     */
    public function deletecategoriejson(NormalizerInterface $Normalizer,Request $request, $id): Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $categorie=$entityManager->getRepository(Categorie::class)->find($id);
            $entityManager->remove($categorie);
            $entityManager->flush();
        $jsonContent = $Normalizer->normalize($categorie, 'json',['groups'=>'post:read']);
        return new Response("information deleted successfully".json_encode($jsonContent));


    }

    /**
     * @Route("/categ/searchc", name="searchcateg", methods={"GET"})
     */
    public function searchcategorie(Request $request, NormalizerInterface $Normalizer)
    {
        dump($request->get('search'));
        if (null != $request->get('search')) {
            return $this->render('/categorie/index.html.twig', ['user'=>$this->getUser(),
                'categories' => $this->getDoctrine()->getRepository(Categorie::class)->findBy(['nom_categorie' => $request->get('search')]),
            ]);
        }
        return  $this->redirectToRoute('categorie_index');
    }
}
