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
        $panier=$session->get("panier",[]);
       
        $dataPanier=[];
        $i=0;
       
        foreach ($panier as $id => $quantite ){
            $i++;
            $produit=$produitRepository->find($id);
            $dataPanier[$i] =[
                "produit"=>$produit->getNomProduit(),
                "quantite"=>$quantite,
                "total"=>$produit->getPrixProduit()*$quantite
            ];
            
        }
        
        $session->set('cart',$dataPanier);
        return $this->render('panier/indexPanier.html.twig', [
            'paniers' => $dataPanier,
        ]);
    }
}
