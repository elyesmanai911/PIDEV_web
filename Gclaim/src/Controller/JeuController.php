<?php

namespace App\Controller;

use App\Entity\Tournoi;
use App\Entity\Jeu;
use App\Form\JeuType;
use App\Repository\JeuRepository;
use App\Repository\TournoiRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;


class   JeuController extends AbstractController
{
    /**
     * @Route("/jeu", name="jeu")
     */
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->render('jeu/index.html.twig', [
            'controller_name' => 'JeuController','user' => $user
        ]);
    }
    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('back.html.twig', [
            'controller_name' => 'JeuController','user'=>$this->getUser()
        ]);
    }

    /**
     * @Route("/show", name="show")
     */
    public function show(): Response
    {
        return $this->render('jeu/show.html.twig', [
            'controller_name' => 'JeuController','user'=>$this->getUser()
        ]);
    }

    /**
     * @Route("/listTournoisByJeu/{id}", name="listTournoisByJeu")
     */
    public function listTournoisByJeu(TournoiRepository  $repository,$id,PaginatorInterface $paginator,Request $request)
    {
        $tournois=$paginator->paginate(
        $tr=$repository->listTournoiByJeu($id), $request->query->getInt('page',1),
            2

        );
        return $this->render("tournoi/list.html.twig",array("tournois"=>$tournois,'user'=>$this->getUser()));
    }
    /**
     * @Route("/listJeu", name="listJeu")
     */
    public function listJeu(PaginatorInterface $paginator,Request $request)
    {
        $jeus=$paginator->paginate(
            $this->getDoctrine()->getRepository(Jeu::class)->findAll(), $request->query->getInt('page',1),
            2

        );
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('jeu/list.html.twig', array("jeus" => $jeus,"tournois" => $tournois,'user'=>$this->getUser()));
    }
    /**
     * @Route("/listtJeu", name="listtJeu")
     */
    public function listtJeu(PaginatorInterface $paginator,Request $request)
    {

        $jeus=$paginator->paginate(
            $this->getDoctrine()->getRepository(Jeu::class)->findAll(), $request->query->getInt('page',1),
            4

        );
        $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('jeu/show.html.twig', array("jeus" => $jeus,"tournois" => $tournois, 'user' => $user));
    }
    /**
     * @Route("/deleteJeu/{id}", name="deleteJeu")
     */
    public function deleteJeu($id)
    {
        $jeu = $this->getDoctrine()->getRepository(Jeu::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($jeu);
        $em->flush();
        return $this->redirectToRoute("listJeu");
    }

    /**
     * @Route("/addJeu", name="addJeu")
     */
    public function addJeu(Request $request)
    {
        $jeu = new Jeu();
        $form = $this->createForm(JeuType::class, $jeu);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $file = $jeu->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);

            $em = $this->getDoctrine()->getManager();
            $jeu->setImage($fileName);
            $em->persist($jeu);
            $em->flush();
            return $this->redirectToRoute('listJeu');
        }
        return $this->render("jeu/add.html.twig",array('jeu'=>$form->createView(),'user'=>$this->getUser()));
    }

    /**
     * @Route("/updateJeu/{id}", name="updateJeu")
     */
    public function updateJeu(Request $request,$id)
    {
        $jeu = $this->getDoctrine()->getRepository(Jeu::class)->find($id);
        $form = $this->createForm(JeuType::class, $jeu);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()) {
            $file = $jeu->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);
            $em = $this->getDoctrine()->getManager();
            $jeu->setImage($fileName);
            $em->persist($jeu);
            $em->flush();
            return $this->redirectToRoute('listJeu');
        }
        return $this->render("jeu/update.html.twig",array('jeu'=>$form->createView(),'user'=>$this->getUser()));
    }
    /**
     * @Route("/searchJ", name="searchJ", methods={"GET"})
     */
    public function searchJ(Request $request, NormalizerInterface $Normalizer, PaginatorInterface $paginator)
    {
            $jeus=$paginator->paginate(
            $this->getDoctrine()->getRepository(Jeu::class)->findBy(['nomjeu' => $request->get('search')]),
            $request->query->getInt('page',1),
            4

        );
        dump($request->get('search'));
        if (null != $request->get('search')) {
            return $this->render('/jeu/list.html.twig', [
                'jeus' => $jeus,'user'=>$this->getUser(),
            ]);
        }
    }
    /**
     * @Route("/orderbydateJ", name="orderdateJ", methods={"GET"})
     */
    public function orderbydatejeu(JeuRepository  $jeuRepository, PaginatorInterface $paginator, Request $request ): Response
    {

        $jeus = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT p FROM App\Entity\Jeu p order by  p.dateS asc')
            ->getResult();
        $jeu=$paginator->paginate(
            $jeus,
            $request->query->getInt('page',1),
            2

        );


        return $this->render('jeu/list.html.twig', [
            'jeus' => $jeu,'user'=>$this->getUser()

        ]);
    }

}