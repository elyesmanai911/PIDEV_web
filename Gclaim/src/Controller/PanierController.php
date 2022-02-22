<?php

namespace App\Controller;

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
    {
        $panier=$session->get("cart",[]);
        
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
            'paniers' => $dataPanier,
            
        ]);
    }
    /**
     * @Route("/cart/delete/{id}", name="cart_delete")
     */
    public function cart_delete($id,SessionInterface $session,ProduitRepository $produitRepository): Response
    {
        $panier=$session->get("cart",[]);
        
        
        $p=[];
        $produit=$produitRepository->find($id);
        foreach ($panier as $i => $quantite ){
            
            
               
            if ($panier[$i]['id']!=$id){
                
                $p[$i]=[
                    "id"=>$id,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$panier[$i]['quantite'],
                    "total"=>$produit->getPrixProduit()*$panier[$i]['quantite']
                ];
               
            }
        }
        
        $session->set('cart',$p);
        return $this->redirectToRoute('panier', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/cart/plus/{id}", name="cart_plus")
     */
    public function cart_plus($id,SessionInterface $session,ProduitRepository $produitRepository): Response
    {
        
     
        $panier=$session->get('cart',[]);
        $produit=$produitRepository->find($id);
        
        foreach ($panier as $i => $quantite ){          
            if ($panier[$i]['id']==$id){
                $panier[$i]=[
                    "id"=>$id,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$panier[$i]['quantite']+1,
                    "total"=>$produit->getPrixProduit()*$panier[$i]['quantite']
                ];
               
            }
        }
        $session->set('cart',$panier);
        return $this->redirectToRoute('panier', [], Response::HTTP_SEE_OTHER);
        /*return $this->render('panier/indexPanier.html.twig', [
            'paniers' => $panier,
        ]);*/
    }
    /**
     * @Route("/cart/moins/{id}", name="cart_moins")
     */
    public function cart_moins($id,SessionInterface $session,ProduitRepository $produitRepository): Response
    {
        
        $panier=$session->get('cart',[]);
        $produit=$produitRepository->find($id);
        foreach ($panier as $i => $quantite ){           
            if ($panier[$i]['id']==$id){
                $panier[$i]=[
                    "id"=>$id,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$panier[$i]['quantite']-1,
                    "total"=>$produit->getPrixProduit()*$panier[$i]['quantite']
                ];
               
            }
        }
        $session->set('cart',$panier);
        return $this->redirectToRoute('panier', [], Response::HTTP_SEE_OTHER);
    }
}
