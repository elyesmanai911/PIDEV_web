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
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/back", name="commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository, Request $request,PaginatorInterface $paginator): Response
    {
        $donnees=$commandeRepository->findAll();
        $comm = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
        return $this->render('commande/index.html.twig', [
            'commandes' => $comm,
            'user'=>$this->getUser(),
        ]);
    }
    /**
     * @Route("/top", name="top", methods={"GET"})
     */

    public function TopCart(CommandeRepository $commandeRepository): Response
    { 
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findTopCart(),'user'=>$this->getUser(),

        ]);
    }
    /**
     * @Route("/least", name="least", methods={"GET"})
     */

    public function LeastCart(CommandeRepository $commandeRepository): Response
    {
       
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findLeastCart(),'user'=>$this->getUser(),

        ]);
    }

    /**
     * @Route("/front", name="commande", methods={"GET"})
     */

    public function indexFront(ProduitRepository $produitRepository,SessionInterface $session): Response
    {
       
        return $this->render('commande/indexFront.html.twig', [
            'produits' =>  $produitRepository->findAll(),'user'=>$this->getUser(),
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
        $commande->setUser($this->getUser());
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
            'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_show", methods={"GET"})
     */

    public function show(SessionInterface $s,LigneCommandeRepository $ligneCommandeRepository,CommandeRepository $commandeRepository,Commande $commande, Request $request,PaginatorInterface $paginator,MailerInterface $mailer): Response
    {
        $somme=0;
        $cart=$s->get('cart',[]);
        if ($cart != []){
            foreach ($cart as $c){
                $somme=$somme+$c["total"];
            }
        }
        $c=$commandeRepository->find($commande);
        $username=$c->getUser()->getUserName();
        $donnees=$ligneCommandeRepository->findByCommandeID($commande);
        $comm = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
         // Configure Dompdf according to your needs
         $pdfOptions = new Options();
         $pdfOptions->set('defaultFont', 'Arial');
         
         // Instantiate Dompdf with our options
         $dompdf = new Dompdf($pdfOptions);
         //$html= "";
         
         
         //dd($ligneCommandeRepository);
         // Retrieve the HTML generated in our twig file
         $date=new \DateTime('now');
         $html = $this->renderView('ligne_commande/toPDF.html.twig', [
            'ligne_commandes' => $comm,
            'commande'=> $c,
            'total' => $somme,
            'date' =>$date,
        ]);

         // Load HTML to Dompdf
         $dompdf->loadHtml($html);
         
         // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
         $dompdf->setPaper('A4', 'portrait');
 
         // Render the HTML as PDF
         $dompdf->render();
 
         // Output the generated PDF to Browser (force download)
         /*$dompdf->stream("mypdf.pdf", [
             "Attachment" => false
         ]);*/
         // Store PDF Binary Data
        $output = $dompdf->output();
        
        // In this case, we want to write the file in the public directory
        $publicDirectory = $this->getParameter('kernel.project_dir');
        // e.g /var/www/project/public/mypdf.pdf
        //dd($publicDirectory);
        //$pdfFilepath =  ;
        
        // Write file to the desired path
        file_put_contents($publicDirectory. '\\public\\pdf'.$commande->getId().'.pdf', $output);
        $message = (new Email())
        ->from('gclaimpidev@gmail.com')
        ->to($c->getUser()->getEmail())
        ->subject('Facture')
        ->text(
            "Bonjour Mr/Mme "
        )
        ->attachFromPath($publicDirectory. '\\public\\pdf'.$commande->getId().'.pdf', 'factre');
        $mailer->send($message);
        
        return $this->redirectToRoute('commande_index', [], Response::HTTP_SEE_OTHER);
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
            'user'=>$this->getUser(),
        ]);
    
    }

    /**
     * @Route("/cart/create-checkout-session", name="checkout")
     */
    public function checkout(SessionInterface $s)
    {
        
        $somme=0;
        $cart=$s->get('cart',[]);
        if ($cart != []){
            foreach ($cart as $c){
                $somme=$somme+$c["total"];
            }
        }
        //dd(count($cart));
        \Stripe\Stripe::setApiKey('sk_test_51KaSl9LhSkNSJwhCDDrrsGKrsD2fN2yu3Wa2d71W0BrV5LIvDWFkvNxcGWJRaknLyz2WSkk2JyNHO0CN2BzHCe5L00tUwVIS0y');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Total Commande',
                    ],
                    'unit_amount' => $somme*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('commande_new', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        $this->addFlash('success', 'Your payment is succefull!');
        return new JsonResponse([ 'id' => $session->id ]);


    }

    /**
     * @Route("/cart/succes", name="success", methods={"GET"})
     */
    public function success()
    {
        return $this->render('panier/success.html.twig', [
            
            'user'=>$this->getUser(),
        ]);
    }


    /**
     * @Route("/cart/error", name="error", methods={"GET"})
     */
    public function error()
    {
        $this->addFlash('warning', 'Your payment failed!');
        return $this->render('panier/error.html.twig', [
            
            'user'=>$this->getUser(),
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
