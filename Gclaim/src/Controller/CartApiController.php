<?php

namespace App\Controller;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use App\Repository\LigneCommandeRepository;
use App\Repository\UtilisateurRepository;
use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;

class CartApiController extends AbstractController
{
    /**
     * @Route("/Api/AllCommandes", name="AllCommandes")
     */
    public function AllCommandes(CommandeRepository $commandeRepository, Request $request,NormalizerInterface $normalizer): Response
    {
        $donnees=$commandeRepository->findAll();
        $jsonContent =$normalizer->normalize($donnees,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/Api/NewCommande", name="NewCommande")
     */
    public function new(Request $request, EntityManagerInterface $entityManager,SessionInterface $session,ProduitRepository $produitRepository,CommandeRepository $commandeRepository,NormalizerInterface $normalizer,UtilisateurRepository $utilisateurRepository): Response
    {
        $somme=0;
        $cart=$session->get('cart',[]);
        $commande = new Commande();
        $user=$utilisateurRepository->find($request->get('User'));
        if ($cart != []){
            foreach ($cart as $c){
                $somme=$somme+$c["total"];
            }

            $commande->setUser($user);
            $commande->setDateAchat(new \DateTime('now'));
            $commande->setTotal($somme);
            $commande->setLivrer(false);

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
        $jsonContent =$normalizer->normalize($commande,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/Api/ToPDF", name="toPDF", methods={"GET"})
     */

    public function show(SessionInterface $s,LigneCommandeRepository $ligneCommandeRepository,CommandeRepository $commandeRepository, Request $request,PaginatorInterface $paginator,MailerInterface $mailer,NormalizerInterface $normalizer): Response
    {
        $id=$request->get('id');
        $somme=0;
        $cart=$s->get('cart',[]);
        if ($cart != []){
            foreach ($cart as $c){
                $somme=$somme+$c["total"];
            }
        }
        $commande=$commandeRepository->find($id);
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

        //$pdfFilepath =  ;

        // Write file to the desired path
        file_put_contents($publicDirectory. '\\public\\pdf'.$commande->getId().'.pdf', $output);
        $Mailhtml = $this->renderView('ligne_commande/email.html.twig', [
            'commande'=> $c,
            'total' => $somme,
            'date' =>$date,
        ]);
        $message = (new Email())
            ->from('gclaimpidev@gmail.com')
            ->to($c->getUser()->getEmail())
            ->subject('Facture')
            /*->text(
                "Bonjour Mr/Mme ".$c->getUser()->getUserName()."\n Voici Votre Facture"
            )*/
            ->html($Mailhtml)
            ->attachFromPath($publicDirectory. '\\public\\pdf'.$commande->getId().'.pdf', 'facture');
        $mailer->send($message);
        $jsonContent =$normalizer->normalize($commande,'json',['groups'=>'post:read']);
        return new Response(json_encode(null));

    }
    /**
     * @Route("/Api/AddToCart",name="AddToCart")
     */
    public function add(Request $request,SessionInterface $session)
    {

        $id=$request->get('id');

        $panier = $session->get("panier",[]);
        if (!empty($panier[$id])){
            $panier[$id]['quantite']=$panier[$id]['quantite']+1;
        }else{
            $panier[$id]['quantite']=1;
        }
        $session->set("panier",$panier);

        return new Response(json_encode(null));
    }
    /**
     * @Route("/Api/TopCart", name="TopCart")
     */

    public function TopCart(CommandeRepository $commandeRepository, Request $request,NormalizerInterface $normalizer): Response
    {
        $donnees=$commandeRepository->findTopCart();
        $jsonContent =$normalizer->normalize($donnees,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/Api/LeastCart", name="LeastCart")
     */

    public function LeastCart(CommandeRepository $commandeRepository, Request $request,NormalizerInterface $normalizer): Response
    {
        $donnees=$commandeRepository->findLeastCart();
        $jsonContent =$normalizer->normalize($donnees,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/Api/GetCart", name="GetCart")
     */
    public function GetCart(SessionInterface $session,Request $request,ProduitRepository $produitRepository,NormalizerInterface $normalizer): Response
    {
        $id=$request->get('idCart');
        $quantite=$request->get('quantiteCart');
        $data=[];
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
            $data[]=$dataPanier[$i];
        }

        $session->set('cart',$dataPanier);

        $jsonContent =$normalizer->normalize($data,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/Api/Cartdelete", name="CartDelete")
     */
    public function cart_delete(SessionInterface $session,Request $request,ProduitRepository $produitRepository,NormalizerInterface $normalizer): Response
    {
        $id=$request->get('id');
        $panier=$session->get('cart',[]);
        $updatedPanier=[];
        $pan=$session->get('panier',[]);
        $updatedpan=[];
        $d=[];

        foreach ($panier as $i => $quantite ){
            $produit=$produitRepository->find($i);
            if ($panier[$i]['id']!=$id){
                $updatedPanier[$i]=[
                    "id"=>$i,
                    "produit"=>$produit->getNomProduit(),
                    "quantite"=>$panier[$i]['quantite'],
                    "total"=>$produit->getPrixProduit()*($panier[$i]['quantite']+1)
                ];
                $updatedpan[$id]['quantite']=$pan[$id]['quantite'];
                $d[]=$updatedPanier[$i];
            }
        }
        $session->set('panier',$pan);
        $session->set('cart',$d);
        $jsonContent =$normalizer->normalize($d,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/Api/Cartplus", name="CartPlus")
     */
    public function cart_plus(SessionInterface $session,Request $request,ProduitRepository $produitRepository,NormalizerInterface $normalizer): Response
    {
        $id=$request->get('id');
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
        $jsonContent =$normalizer->normalize($panier,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/Api/Cartmoins", name="CartMoins")
     */
    public function cart_moins(SessionInterface $session,Request $request,ProduitRepository $produitRepository,NormalizerInterface $normalizer): Response
    {
        $id=$request->get('id');
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
        $jsonContent =$normalizer->normalize($panier,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/Api/statusUpdate", name="statusUpdate")
     */
    public function statusUpdate(Request $request, CommandeRepository $commandeRepository, EntityManagerInterface $entityManager,NormalizerInterface $normalizer): Response
    {
        $id=$request->get('id');
        $commande=$commandeRepository->find($id);
        $commande->setLivrer(!$commande->getLivrer());
        $entityManager->persist($commande);
        $entityManager->flush();

        return new Response(json_encode(null));
    }
}