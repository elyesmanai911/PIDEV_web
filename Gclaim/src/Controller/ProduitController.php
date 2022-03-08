<?php

namespace App\Controller;

use App\Entity\Images;
use App\Entity\Produit;
use App\Entity\Tournoi;
use App\Form\ProduitType;
use App\Repository\CategorieRepository;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use App\Services\QrcodeService;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\Material\ColumnChart;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Flex\Options;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;



/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{

    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(PaginatorInterface $paginator ,ProduitRepository $produitRepository, Request $request): Response
    {
        $donnee=$produitRepository->findAll();
        $Produits=$paginator->paginate(
            $donnee,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('produit/index.html.twig', [
            'produits' => $Produits,'user'=>$this->getUser()

        ]);

    }

    /**
     * @Route("/prod/Allproducts", name="Allproducts")
     */
    public function Allproducts(Request $request, NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $products = $repository->findAll();
        $jsonContent = $Normalizer->normalize($products, 'json',['groups'=>'post:read']);
//        return $this->render('produit/Allproducts', [
//            'data' => $jsonContent,
//        ]);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/new", name="produit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, QrcodeService $qrcodeService): Response
    {
        $Qrcode = null;
        $produit = new Produit();
        $datetime = new \DateTime('now');
        $produit->setDateAjoutProduit($datetime);
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form ->get('images')->getData();
            foreach ($images as $image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('upload_directory'),
                    $fichier

                );

                $img = new Images();
                $img->setUrlImage($fichier);
                $produit-> addImage($img);
            }
            $entityManager->persist($img);
            $entityManager->persist($produit);
            $entityManager->flush();
            $Qrcode = $qrcodeService ->qrcode("http://127.0.0.1:8000/produit/prod/{{id_produit}}",$produit -> getid_produit());

            return $this->redirectToRoute('produit_index', ['user'=>$this->getUser()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'user'=>$this->getUser(),
            'Qrcode' => $Qrcode,
        ]);
    }

    /**
     * @Route("/{id_produit}", name="produit_show", methods={"GET"})
     */
    public function show($id_produit,ProduitRepository $repository): Response
    {
        $produit=$repository->find($id_produit);
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/{id_produit}/edit", name="produit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form ->get('images')->getData();
            foreach ($images as $image) {
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $image->move(
                    $this->getParameter('upload_directory'),
                    $fichier

                );

                $img = new Images();
                $img->setUrlImage($fichier);
                $produit-> addImage($img);
            }

            $entityManager->persist($img);
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),'user'=>$this->getUser(),
        ]);
    }

    /**
     * @Route("/{id_produit}", name="produit_delete", methods={"POST"})
     */
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getid_produit(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/prod/frontp", name="produit", methods={"GET"})
     */
    public function indexFront(ProduitRepository $produitRepository, CategorieRepository $categorieRepository,  PaginatorInterface $paginator, Request $request): Response
    {$user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by p.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();
        $Produits=$paginator->paginate(
            $produitRepository->findAll(),
            $request->query->getInt('page',1),
            4

        );
        return $this->render('produit/indexFrontP.html.twig', [
            'produits' => $Produits,
            'categories' => $categorieRepository->findAll(),
            'prods' => $products,'user' => $user,"tournois" => $tournois,
        ]);
    }
    /**
     * @Route("/prod/filtreprod", name="filtre", methods={"GET", "POST"})
     */
    public function filtreprod(ProduitRepository $produitRepository, CategorieRepository $categorieRepository, Request $request,  PaginatorInterface $paginator): Response
    {$user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $cat = $request->get('cat');


        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by p.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();
        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p  WHERE p.categorie in (:list) ')
            ->setParameter('list',$cat)
            ->getResult();
        $produits=$paginator->paginate(
            $products,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('produit/indexFrontP.html.twig', [
            'produits' => $produits,
            'categories' => $categorieRepository->findAll(),
            'prods' => $products,'user'=>$user,"tournois" => $tournois,
        ]);

    }

    /**
     * @Route("/prod/filtreprodprix", name="prixfiltre", methods={"GET", "POST"})
     */
    public function filtreprodprix(ProduitRepository $produitRepository, CategorieRepository $categorieRepository, Request $request,  PaginatorInterface $paginator): Response
    {

        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $min = $request->get('min');
        $max = $request->get('max');

        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p  WHERE p.prix_produit between :min and :max ')
            ->setParameter('min',$min)
            ->setParameter('max',$max)
            ->getResult();
        $produits=$paginator->paginate(
            $products,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('produit/indexFrontP.html.twig', [
            'produits' => $produits,
            'categories' => $categorieRepository->findAll(),
            'prods' => $products,'user' => $user,"tournois" => $tournois,
        ]);

    }

    /**
     * @Route("/prod/{id_produit}", name="detailprod", methods={"GET"})
     */
    public function detailpr(Produit $produit, EntityManagerInterface $entityManager): Response
    {$user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $produit ->setNbrVu($produit ->getNbrVu()+1);
        $entityManager->persist($produit);
        $entityManager->flush();
        return $this->render('produit/detailsproduit.html.twig', [
            'produit' => $produit,'user' => $user,"tournois" => $tournois,
        ]);
    }

    /**
     * @Route("/prod/prod1/searchp", name="searchprod", methods={"GET"})
     */
    public function searchprod(Request $request, NormalizerInterface $Normalizer, PaginatorInterface $paginator)
    {
        $Produits=$paginator->paginate(
            $this->getDoctrine()->getRepository(Produit::class)->findBy(['nom_produit' => $request->get('search')]),
            $request->query->getInt('page',1),
            4

        );
        dump($request->get('search'));
        if (null != $request->get('search')) {
            return $this->render('/produit/index.html.twig', [
                'produits' => $Produits,
            ]);
        }
    }
    /**
     * @Route("/prod/prods/pdfd/{id_produit}", name="pdfd11", methods={"GET"})
     */
    public function pdfd (Produit $produit , Request $request): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
//        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

//        $produit = $produitRepository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('/produit/pdfproduit.html.twig',[
            'produit' => $produit,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Produit.pdf", [
            "Attachment" => true
        ]);
    }

    /**
     * @Route("/prod/prod1/produi", name="excel")
     */
    public function excel(){
        $spreadsheet = new Spreadsheet();

        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet(0);
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setTitle("My First Worksheet");
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        $sheet->setCellValue('A1', 'id_produit');
        $sheet->setCellValue('B1', 'nom_produit');
        $sheet->setCellValue('C1', 'prix_produit ');
        $sheet->setCellValue('D1', 'dateAjout_produit');
        $sheet->setCellValue('E1', 'categorie');
        $orders =  $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by  p.dateAjout_produit desc')
            ->getResult();

        $i=0;
        foreach ($produits as $p) {
            $sheet->setCellValue('A' . $i, $p->getid_produit());
            $sheet->setCellValue('B' . $i, $p->getNomProduit());
            $sheet->setCellValue('C' . $i, $p->getPrixProduit());
            $sheet->setCellValue('D' . $i, $p->getDateAjoutProduit());
            $sheet->setCellValue('E' . $i, $p->getCategorie());
            $i++;
        }
        // Create a Temporary file in the system
        $fileName = 'produit.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }


        /**
         * @Route("/prod/prod1/orderbydate", name="orderdateproduit", methods={"GET"})
         */
        public function orderbydateproduit(ProduitRepository $produitRepository, CategorieRepository $categorieRepository, PaginatorInterface $paginator, Request $request ): Response
    {$user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by p.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();
        $produits = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by  p.dateAjout_produit desc')
            ->getResult();
        $produits=$paginator->paginate(
            $produits,
            $request->query->getInt('page',1),
            4
        );
        return $this->render('produit/indexFrontP.html.twig', [
            'produits' => $produits,
            'categories' => $categorieRepository->findAll(),
            'prods' => $products,'user' => $user,"tournois" => $tournois,
        ]);
    }

    /**
     * @Route("/prod/prod1/barchart", name="barchart")
     */
    public function barchart()
    {

        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by p.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();

        $em = $this->getDoctrine()->getManager();

        $col = new ColumnChart();
        foreach ($products as $p) {

        $data[]=array($p ->getNomProduit(), $p->getNbrVu());

        }
        $col->getData()->setArrayToDataTable([
            ['nom produit','nombre de vu'],
            [$data[0][0],$data[0][1]],
            [$data[1][0],$data[1][1]],
            [$data[2][0],$data[2][1]],
            [$data[3][0],$data[3][1]],
            [$data[4][0],$data[4][1]],

        ]);
        $col->getOptions()->setTitle('les produits les plus vues');
        $col->getOptions()->getAnnotations()->setAlwaysOutside(true);
        $col->getOptions()->getAnnotations()->getTextStyle()->setFontSize(14);
        $col->getOptions()->getAnnotations()->getTextStyle()->setColor('#000');
        $col->getOptions()->getAnnotations()->getTextStyle()->setAuraColor('none');
        $col->getOptions()->getHAxis()->setTitle('Produits');
        $col->getOptions()->getVAxis()->setTitle('Nombre de vue');
        $col->getOptions()->setWidth(900);
        $col->getOptions()->setHeight(500);
        dump($data[1][0]);
        return $this->render('produit/statproduitback.html.twig', array('barchart' => $col));
    }

    /**
     * @Route("/prod/prod1/searchpfront", name="searchprodfront", methods={"GET"})
     */
    public function searchprodfr(Request $request, NormalizerInterface $Normalizer, PaginatorInterface $paginator, CategorieRepository $categorieRepository)
    { $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $Produits=$paginator->paginate(
            $this->getDoctrine()->getRepository(Produit::class)->findBy(['nom_produit' => $request->get('search')]),
            $request->query->getInt('page',1),
            4

        );
        $products = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Produit p order by p.nbr_vu desc')
            ->setMaxResults(5)
            ->getResult();


        if (null != $request->get('search')) {
            return $this->render('/produit/indexFrontp.html.twig', [
                'produits' => $Produits,
                'categories' => $categorieRepository->findAll(),
                'prods' => $products,'user' => $user,"tournois" => $tournois,
            ]);
        }
    }
}
