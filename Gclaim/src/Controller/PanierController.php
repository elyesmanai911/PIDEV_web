<?php

namespace App\Controller;

use App\Entity\Tournoi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProduitRepository;

class PanierController extends AbstractController
{
    /**
     * @Route("/cart", name="panier")
     */
    public function index(SessionInterface $session,ProduitRepository $produitRepository): Response
    {$user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $panier=$session->get("panier",[]);

        $dataPanier=[];
        $i=0;

        foreach ($panier as $id => $quantite ){
            $i++;

            $produit=$produitRepository->find($id);
            $dataPanier[$i] =[
                "id"=>$id,
                "produit"=>$produit->getNomProduit(),
                "quantite"=>$panier[$id]['quantite'],
                "total"=>$produit->getPrixProduit()*$panier[$id]['quantite']
            ];

        }

        $session->set('cart',$dataPanier);
        return $this->render('panier/indexPanier.html.twig', [
            'paniers' => $dataPanier, 'user' => $user,"tournois" => $tournois,

        ]);
    }
    /**
     * @Route("/cart/delete/{id}", name="cart_delete")
     */
    public function cart_delete($id,SessionInterface $session,ProduitRepository $produitRepository): Response
    {
        $cart=$session->get("cart",[]);
        $panier=$session->get('panier',[]);

        $p=[];
        $pan=[];
        $produit=$produitRepository->find($id);
        foreach ($cart as $i => $quantite ){

            if ($cart[$i]['id']!=$id){
                $pan[$id]['quantite']=$panier[$id]['quantite'];
                $p[$i]=[
                    "id"=>$id,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$cart[$i]['quantite'],
                    "total"=>$produit->getPrixProduit()*$cart[$i]['quantite']
                ];

            }
        }
        $session->set('panier',$pan);
        $session->set('cart',$p);
        return $this->redirectToRoute('panier', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/cart/plus/{id}", name="cart_plus")
     */
    public function cart_plus($id,SessionInterface $session,ProduitRepository $produitRepository): Response
    {

        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $panier=$session->get('cart',[]);
        $pan=$session->get('panier',[]);
        $produit=$produitRepository->find($id);


        foreach ($panier as $i => $quantite ){
            if ($panier[$i]['id']==$id){
                $panier[$i]=[
                    "id"=>$id,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$panier[$i]['quantite']+1,
                    "total"=>$produit->getPrixProduit()*($panier[$i]['quantite']+1)
                ];
                $pan[$id]['quantite']=$pan[$id]['quantite']+1;

            }
        }


        $session->set('panier',$pan);
        $session->set('cart',$panier);
       // return $this->redirectToRoute('panier', [], Response::HTTP_SEE_OTHER);
        return $this->render('panier/indexPanier.html.twig', [
            'paniers' => $panier,'user' => $user,"tournois" => $tournois,
        ]);
    }
    /**
     * @Route("/cart/moins/{id}", name="cart_moins")
     */
    public function cart_moins($id,SessionInterface $session,ProduitRepository $produitRepository): Response
    {

        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $panier=$session->get('cart',[]);
        $pan=$session->get('panier',[]);
        $produit=$produitRepository->find($id);
        foreach ($panier as $i => $quantite ){
            if ($panier[$i]['id']==$id){
                $panier[$i]=[
                    "id"=>$id,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$panier[$i]['quantite']-1,
                    "total"=>$produit->getPrixProduit()*($panier[$i]['quantite']-1)
                ];
                $pan[$id]['quantite']=$pan[$id]['quantite']-1;
            }
        }
        $session->set('panier',$pan);
        $session->set('cart',$panier);
        return $this->render('panier/indexPanier.html.twig', [
            'paniers' => $panier,'user' => $user,"tournois" => $tournois,
        ]);
    }
}
