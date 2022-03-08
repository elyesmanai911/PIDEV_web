<?php

namespace App\Controller;
use App\Entity\Jeu;
use App\Entity\Tournoi;
use App\Entity\SimpleUtilisateur;
use App\Entity\Utilisateur;
use App\Entity\Equipe;
use App\Controller\EquipeController;
use App\Entity\MembreEquipe;
use App\Form\TournoiType;
use App\Repository\EquipeRepository;
use App\Repository\SimpleUtilisateurRepository;
use App\Repository\TournoiRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Validator\Constraints\Email;
use MercurySeries\FlashyBundle\FlashyNotifier;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class TournoiController extends AbstractController
{
    /**
     * @Route("/tournoi", name="tournoi")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('test.html.twig', array("tournois" => $tournois, 'user' => $user));
    }
    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'TournoiController',
        ]);
    }
    /**
     * @Route("/traff/{id}", name="traff")
     */
    public function traff($id): Response
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $tournoi = $this->getDoctrine()->getRepository(Tournoi::class)->find($id);
        return $this->render('tournoi/tournoi.html.twig', [
            'controller_name' => 'TournoiController', 'tournoi'=>$tournoi,'tournois'=>$tournois, 'user' => $user
        ]);
    }
    /**
     * @Route("/listTournois/{id}", name="listTournois")
     */
    public function listTournois($id)
    {
        $tournoi=$this->getDoctrine()->getRepository(Tournoi::class)->find($id);
        return $this->render("tournoi/liste.html.twig",array("tournoi"=>$tournoi,'user'=>$this->getUser()));
    }
    /**
     * @Route("/rejoindre/{id}", name="rejoindre")
     */
    public function rejoindre($id,TournoiRepository $repository,Request $request,UtilisateurRepository $rep,EquipeRepository $repp)
    {
        $userr = $this->getUser()->getUsername();
        $idd=$rep->utilisateurbyname($userr);
        $equipe =$repp->listEquipeparuti($idd);
        $tournoi = $repository->find($id);
        if($equipe==Null)
        {
            $user=$this->getUser();
            $equip =$repp->equip();

            $eq=$equip[0];

            $eq->addSimpleutilisateur($user);
            $tournoi->addEquipe($eq);
            $eq->setNb($eq->getNb()+1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($eq);
            $em->flush();
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $em->flush();

        }
        else {
            $equipp = $equipe[0];
            $tournoi->addEquipe($equipp);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $em->flush();

        }

        return $this->redirectToRoute('listtTournoi');


    }
    /**
     * @Route("/show", name="show")
     */
    public function show(): Response
    {
        return $this->render('tournoi/show.html.twig', [
            'controller_name' => 'TournoiController',
        ]);
    }
    /**
     * @Route("/Tournoi/AllTournois", name="AllTournois")
     */
    public function AllTournois(TournoiRepository  $repository,Request $request,NormalizerInterface $normalizable)
    {
        $tournoi=$repository->findall();
        $jsonContent =$normalizable->normalize($tournoi,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/listtTournoi", name="listtTournoi")
     */
    public function listtTournoi()
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('tournoi/show.html.twig', array("tournois" => $tournois, 'user' => $user));
    }

    /**
     * @Route("/listTournoi", name="listTournoi")
     */
    public function listTournoi()
    {
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('tournoi/list.html.twig', array("tournois" => $tournois,'user' => $user));
    }
    /**
     * @Route("/deleteTournoi/{id}", name="deleteTournoi")
     */
    public function deleteTournoi($id,\Swift_Mailer $mailer )
    {
        $tournoi = $this->getDoctrine()->getRepository(Tournoi::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($tournoi);
        $em->flush();

        $message = (new \Swift_Message('New'))

            ->setFrom('elyesmanai7@gmail.com')

            ->setTo('elyesmanai7@gmail.com')

            ->setSubject('Tournoi Annulé !')


            ->setBody(
                $this->renderView('emails/emails/tournoi.html.twig', compact('tournoi')),
                'text/html'
            );

        $mailer->send($message);
        return $this->redirectToRoute("listTournoi");
    }

    /**
     * @Route("/addTournoi", name="addTournoi")
     */
    public function addTournoi(Request $request)
    {
        $user = $this->getUser();

        $tournoi = new Tournoi();
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->add('save',SubmitType::class,['label' => 'Enregistrer']);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $file = $tournoi->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);
            $em = $this->getDoctrine()->getManager();
            $tournoi->setImage($fileName);
            $em->persist($tournoi);
            $em->flush();
            return $this->redirectToRoute('listTournoi', array('user' => $user));
        }
        return $this->render("tournoi/add.html.twig",array('tournoi'=>$form->createView(),'user'=>$this->getUser(),));
    }

    /**
     * @Route("/updateTournoi/{id}", name="updateTournoi")
     */
    public function updateTournoi(Request $request,$id)
    {
        $tournoi = $this->getDoctrine()->getRepository(Tournoi::class)->find($id);
        $form = $this->createForm(TournoiType::class, $tournoi);
        $form->add('save',SubmitType::class,['label' => 'Enregistrer']);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $file = $tournoi->getImage();
            $fileName =md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tournoi);
            $tournoi->setImage($fileName);
            $em->flush();
            return $this->redirectToRoute('listTournoi');
        }
        return $this->render("tournoi/update.html.twig",array('tournoi'=>$form->createView(),'user'=>$this->getUser()));
    }

    /**
     * @Route("/pdfd/{id}", name="pdfd", methods={"GET"})
     */
    public function pdfd ($id,TournoiRepository $repository,Request $request,UtilisateurRepository $rep,EquipeRepository $repp): Response
    {
        $user=$this->getUser();
        $userr=$this->getUser()->getUsername();
        $idd=$rep->utilisateurbyname($userr);
        $equipe =$repp->listEquipeparuti($idd);
        $eq=$equipe[0];
        $ut=$rep->listutiparequip($equipe[0]->getId());
        $tournoi = $repository->find($id);
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('/tournoi/pdftournoi.html.twig',[
            'tournoi' => $tournoi,'user' => $user,'uts' => $idd[0],'equipe'=>$eq
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Tournoi.pdf", [
            "Attachment" => true
        ]);
        return $this->render('tournoi/pdftournoi.html.twig', [
            'controller_name' => 'TournoiController', 'tournoi'=>$tournoi,'uts'=>$idd, 'user' => $user,'equipe'=>$eq
        ]);
    }
    /**
     * @Route("/calendar", name="tournoicalendar", methods={"GET"})
     */
    public function calendar(): Response
    {
        $user=$this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('tournoi/calendar.html.twig', [ 'user' => $user ,'tournois'=>$tournois,]);
    }

}