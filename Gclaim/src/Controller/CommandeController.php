<?php

namespace App\Controller;

use App\Entity\Commande;

use App\Entity\LigneCommande;
use App\Entity\Achat;
use App\Form\CommandeType;
use App\Form\AchatType;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\LigneCommandeRepository;
// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;


/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/back", name="commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }
    /**
     * @Route("/top", name="top", methods={"GET"})
     */

    public function TopCart(CommandeRepository $commandeRepository): Response
    {
      //dd($commandeRepository);
      
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findTopCart(),

        ]);
    }
    /**
     * @Route("/least", name="least", methods={"GET"})
     */

    public function LeastCart(CommandeRepository $commandeRepository): Response
    {
        //dd($commandeRepository->findLeastCart());
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findLeastCart(),

        ]);
    }

    /**
     * @Route("/front", name="commande", methods={"GET"})
     */

    public function indexFront(ProduitRepository $produitRepository,SessionInterface $session): Response
    {
       
        return $this->render('commande/indexFront.html.twig', [
            'produits' =>  $produitRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="commande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,SessionInterface $session,ProduitRepository $produitRepository,CommandeRepository $commandeRepository): Response
    {
        $somme=0;
        $cart=$session->get('cart',[]);
        if ($cart != []){
        foreach ($cart as $c){
            
            $somme=$somme+$c["total"];
        }
        
        $commande = new Commande();
        $commande->setIdUser(2);
        $commande->setDateAchat(new \DateTime('now'));
        $commande->setTotal($somme);
       // $form = $this->createForm(CommandeType::class, $commande);
        //$form->handleRequest($request);
        $commande->setLivrer(false);
        
        //if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();
            
            foreach ($cart as $p ){
              
            $produit=$produitRepository->find($p['id']);
            $ligneCommande= new LigneCommande();
            $ligneCommande->setProduit($produit);
            $ligneCommande->setQuantite($p['quantite']);
            $comm=$commandeRepository->find($commande->getId());
            $ligneCommande->setCommande($comm);

            $entityManager->persist($ligneCommande);
            $entityManager->flush();
            
            }
           
        
        $session->set('cart',[]);
        $session->set('panier',[]);
    }
            return $this->redirectToRoute('produit', [], Response::HTTP_SEE_OTHER);
        //}


        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_show", methods={"GET"})
     */

    public function show(LigneCommandeRepository $ligneCommandeRepository,Commande $commande): Response
    {
         // Configure Dompdf according to your needs
         $pdfOptions = new Options();
         $pdfOptions->set('defaultFont', 'Arial');
         
         // Instantiate Dompdf with our options
         $dompdf = new Dompdf($pdfOptions);
         
         // Retrieve the HTML generated in our twig file
         $html = $this->renderView('ligne_commande/index.html.twig', [
            'ligne_commandes' => $ligneCommandeRepository->findByCommandeID($commande),

        ]);
        $html .='<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />';

         // Load HTML to Dompdf
         $dompdf->loadHtml($html);
         
         // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
         $dompdf->setPaper('A4', 'portrait');
 
         // Render the HTML as PDF
         $dompdf->render();
 
         // Output the generated PDF to Browser (force download)
         $dompdf->stream("mypdf.pdf", [
             "Attachment" => false
         ]);
 
        return $this->render('ligne_commande/index.html.twig', [
            'ligne_commandes' => $ligneCommandeRepository->findByCommandeID($commande),

        ]);
    }

    

    /**
     * @Route("/{id}/edit", name="commande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
       // $form = $this->createForm(CommandeType::class, $commande);
        $commande->setLivrer(!$commande->getLivrer());
        $entityManager->flush();
       // $form->handleRequest($request);

     //   if ($form->isSubmitted() && $form->isValid()) {
           

            return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
        //}
     

      /*  return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);*/
    }

    /**
     * @Route("/{id}", name="commande_delete", methods={"POST"})
     */
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/cart", name="cart", methods={"GET"})
     */
    public function ToCart(): Response
    {
        return $this->redirectToRoute('panier', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/cart/form", name="form")
     */
    public function ToConfirmCart(Request $request ): Response
    {
        $achat = new Achat();
        $form = $this->createForm(AchatType::class, $achat);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            return $this->redirectToRoute('commande_new', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('panier/form.html.twig', [
            'achat' => $achat,
            'form' => $form->createView(),
        ]);
    
    }


    /**
     * @Route("/add/{id}",name="add")
     */
    public function add($id ,SessionInterface $session)
    {
        $panier = $session->get("cart",[]);
        

        
        if (!empty($panier[$id])){
            $panier[$id]['quantite']=$panier[$id]['quantite']+1;
        }else{
            $panier[$id]['quantite']=1;
        }
       
        $session->set("cart",$panier);
    
        return $this->redirectToRoute('produit', [], Response::HTTP_SEE_OTHER);
    }

}