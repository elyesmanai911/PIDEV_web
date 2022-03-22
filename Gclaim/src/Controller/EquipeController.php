<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Equipe;
use App\Entity\SimpleUtilisateur;
use App\Entity\Tournoi;
use App\Entity\Utilisateur;
use App\Form\CoachType;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use App\Repository\SimpleUtilisateurRepository;
use Knp\Component\Pager\PaginatorInterface;
use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index(): Response
    { $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController', "tournois" => $tournois,'user' => $user
        ]);
    }


    /**
     * @Route("/affichetoutequipe", name="affichetoutequipe")
     */
    public function readequipe(EquipeRepository  $repository,Request $request,PaginatorInterface $paginator)
    {        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $donnee=$repository->findall();
        $equipe=$paginator->paginate(
            $donnee,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('equipe/list.html.twig',["equipe"=>$equipe,"tournois" => $tournois,'user'=>$this->getUser()]);
    }
    /**
     * @Route("/equipe/tri", name="tridate")
     */
    public function Tridate(Request $request,PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();


        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Equipe a 
            ORDER BY a.dateCreation DESC'
        );

        $activites = $query->getResult();
        $activites=$paginator->paginate(
            $activites,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('equipe/list.html.twig',
            array('equipe' => $activites,'user'=>$this->getUser()));

    }
    /**
     * @Route("/afficheequipe", name="afficheequipe")
     */
    public function afficheequipe(EquipeRepository  $repository,Request $request,PaginatorInterface $paginator)
    {$user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $donnee=$repository->findall();
        $equipe=$paginator->paginate(
            $donnee,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('equipe/showequipe.html.twig',["equipe"=>$equipe,'user' => $user,"tournois" => $tournois,'user'=>$this->getUser()]);
    }
    /**
     * @Route("/equipe/AllEquipes", name="AllEquipes")
     */
    public function AllEquipes(EquipeRepository  $repository,Request $request,NormalizerInterface $normalizable)
    {
        $equipe=$repository->findall();
        $jsonContent =$normalizable->normalize($equipe,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/addequipe", name="addequipe")
     */

    public function addequipe(Request $request)
    {
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $user = $this->getUser();
        $equipe = new Equipe();
        $equipe->setNb(1);
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            date_default_timezone_set('Europe/Paris');
            $dateTime = date_create_immutable_from_format('m/d/Y', date('m/d/Y'));
            $em = $this->getDoctrine()->getManager();
            $equipe->setChef($this->getUser()->getUsername());
            $equipe->addSimpleutilisateur($user);
            $equipe->setDateCreation($dateTime);
            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute("gclaim");
        }
        return $this->render("equipe/add.html.twig",['form'=>$form->createView(),'user' => $user, "tournois" => $tournois]);
    }
    /**
     * @Route("/afficheparequipe/{id}", name="afficheparequipe")
     */
    public function afficheparEquipe($id,EquipeRepository  $repository)
    {
        $equipe = $repository->find($id);
        return $this->render('equipe/show.html.twig', array("equipe" => $equipe));
    }
    /**
     * @Route("/deleteequipe/{id}", name="deleteequipe")
     */
    public function deleteequipe($id,EquipeRepository  $repository)
    {
        $equipe = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($equipe);
        $em->flush();
        return $this->redirectToRoute("affichetoutequipe");
    }
    /**
     * @Route("/rejoindreequipe/{id}", name="rejoindreequipe")
     */
    public function rejoindreequipe($id,EquipeRepository  $repository,Request $request)
    {
        $user = $this->getUser();
        $equipe = $repository->find($id);
        $equipe->addSimpleutilisateur($user);
        $equipe->setNb($equipe->getNb()+1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($equipe);
        $em->flush();
        return $this->redirectToRoute('afficheequipe');


    }
    /**
     * @Route("/updateequipe/{id}", name="updateequipe")
     */
    public function updateequipe(Request $request,$id,EquipeRepository  $repository)
    {  $user = $this->getUser();
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $equipe = $repository->find($id);
        $form = $this->createForm(EquipeType::class, $equipe);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('afficheequipe');

        }
        return $this->render("equipe/add.html.twig",array('form'=>$form->createView(),'user' => $user,"tournois" => $tournois,));
    }

    /**
     * @Route("/stat", name="stat")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Equipe::class);
        $Equipe = $repository->findAll();
        $em = $this->getDoctrine()->getManager();

        $rd=0;
        $qu=0;



        foreach ($Equipe as $Equipe)
        {
            if (  $Equipe->getEtat()==1):
                $rd+=1;
            else :

                $qu+=1;
            endif;

        }

        $pieChart=new PieChart();

        $pieChart->getData()->setArrayToDataTable(
            [['Etat', 'nombres'],
                ['Overte',     $rd],
                ['Fermé',      $qu]
            ]
        );
        $pieChart->getOptions()->setTitle('Top categories');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('equipe/stat.html.twig', array('piechart' => $pieChart,'user'=>$this->getUser()));
    }

    /**
     * @Route("/ajoutEquipeMobile", name="ajoutEquipeMobile")
     */
    public function ajoutEquipeMobile(Request $request,NormalizerInterface $normalizer)
    {   $equipe=new Equipe();
        $nom=$request->query->get("nomEquipe");
        $description=$request->query->get("description");
        $etat=$request->query->get("Etat");
        $date=new \DateTime('now');
        $chef=$request->query->get("chef");
        $idUser=$request->query->get("simpleutilisateurs");
        $equipe->setNb(1);
        $em=$this->getDoctrine()->getManager();
        $equipe->setChef($chef);
        $equipe->setDateCreation($date);
        $equipe->setEtat($etat);
        $equipe->setNomEquipe($nom);
        $equipe->setDescription($description);
        $equipe->addSimpleutilisateur($this->getDoctrine()->getRepository(Utilisateur::class)->find($idUser));
        $em->persist($equipe);
        $em->flush();
        $jsonContent=$normalizer->normalize($equipe,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
        
    }
    /**
     * @Route("/updateEquipeMobile/{id}", name="updateEquipeMobile")
     */
    public function updateEquipeMobile($id,Request $request,NormalizerInterface $normalizer)
    {     $em=$this->getDoctrine()->getManager();

        $equipe=$em->getRepository(Equipe::class)->find($id);
        $nom=$request->query->get("nomEquipe");
        $description=$request->query->get("description");
        $etat=$request->query->get("Etat");
        $equipe->setEtat($etat);
        $equipe->setNomEquipe($nom);
        $equipe->setDescription($description);
        $em->persist($equipe);
        $em->flush();
        $jsonContent=$normalizer->normalize($equipe,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }


    /**
     * @Route("/rejoindreequipeMOBILE/{id}", name="rejoindreequipeMOBILE")
     */
    public function rejoindreequipeMOBILE($id,EquipeRepository  $repository,Request $request,NormalizerInterface $normalizer)
    {  $em = $this->getDoctrine()->getManager();
        $iduser=$request->query->get("simpleutilisateurs");
        $user=$em->getRepository(Utilisateur::class)->find($iduser);
        $equipe = $repository->find($id);
        $equipe->addSimpleutilisateur($user);
        $equipe->setNb($equipe->getNb()+1);

        $em->persist($equipe);
        $em->flush();
        $jsonContent=$normalizer->normalize($equipe,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));


    }
    /**
     * @Route("/MemebreEQuipe/{id}", name="MemebreEQuipe")
     */
    public function MemebreEQuipe($id,EquipeRepository  $repository,Request $request,NormalizerInterface $normalizer)
    {
        $equipe = $repository->find($id);
        $x=$equipe->getSimpleutilisateurs();
        $jsonContent=$normalizer->normalize($x,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));


    }
}