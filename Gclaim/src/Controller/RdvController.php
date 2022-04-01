<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Entity\Profil;
use App\Entity\Rdv;
use App\Entity\Tournoi;
use App\Entity\Utilisateur;
use App\Form\RdvType;
use App\Repository\ProfilRepository;
use App\Repository\RdvRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use App\Security\EmailVerifier;
use Symfony\Component\Mime\Address;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Twilio\Rest\Client;

/**
 * @Route("/rdv")
 */
class RdvController extends AbstractController
{

    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }
    /**
     * @Route("/", name="rdv_index", methods={"GET"})
     */
    public function index(RdvRepository $rdvRepository): Response
    {$tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();

        $user=$this->getUser();
        return $this->render('rdv/index.html.twig', [
            'rdvs' => $rdvRepository->findAll(),
            'user' => $user,"tournois" => $tournois,
        ]);
    }
    /**
     * @Route("/AllRdvs",name="AllRdv")
     */
    public function AllRdvs(Request $request, NormalizerInterface $normalizer)
    {

        $repository = $this->getDoctrine()->getRepository(Rdv::class);
        $rdv = $repository->findAll();
        $jsonContent =$normalizer->normalize($rdv, 'json' ,['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
        // return $this->render('profil/allProfilJSON.html.twig', ['data'=>$jsonContent,]);
    }
    /**
     * @Route("/ajoutRdvMobile", name="ajoutRdvMobile")
     */
    public function ajoutRdvMobile(Request $request,NormalizerInterface $normalizer)
    {

        $rdv=new Rdv();
        $coach=$request->query->get("coach");
        $user=$request->query->get("user");
        $date=$request->query->get("date");

        $em=$this->getDoctrine()->getManager();
        $rdv->setDate(new \DateTime($date));
        $rdv->setUsername($user);
        $rdv->setCoachname($coach);

        $em->persist($rdv);
        $em->flush();
        $jsonContent=$normalizer->normalize($rdv,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/updateRdvMobile/{id}", name="updateRdvMobile")
     */
    public function updateRdvMobile($id,Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();

        $rdv=$em->getRepository(Rdv::class)->find($id);

        $date=$request->query->get("date");
        $rdv->setDate(new \DateTime($date));
        $em->persist($rdv);
        $em->flush();
        $jsonContent=$normalizer->normalize($rdv,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/new/{id}", name="rdv_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, ProfilRepository $repository,$id, RdvRepository $rep): Response
    {
        $tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $coach=$repository->find($id);
$error='safe';
        $rdv = new Rdv();
        $user=$this->getUser();

        $form = $this->createForm(RdvType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($rep->verif($rdv->getDate(), $id) == null) {
                $rdv->setCoach($coach);
                $rdv->setIsVerified(false);
                $rdv->setUser($user);
                $entityManager->persist($rdv);
                $entityManager->flush();


                $this->emailVerifier->sendEmailConfirmation('app_rdv_verify_email', $user,
                    (new TemplatedEmail())
                        ->from(new Address('Gclaim.Gclaim@esprit.tn', 'G_Claim'))
                        ->to($user->getEmail())
                        ->subject('Confirmer votre rendez-vous')
                        ->htmlTemplate('rdv/confirmation_email.html.twig')
                );

                return $this->redirectToRoute('profil_index', [], Response::HTTP_SEE_OTHER);
            } else {

                $error = 'unsafe';
            }
        }

        return $this->render('rdv/new.html.twig', [
            'rdv' => $rdv,

            'form' => $form->createView(),
            'user'=> $this->getUser(),
            'error' => $error,"tournois" => $tournois,
        ]);
    }


    /**
     * @Route("/admin/rdv", name="rdv_show", methods={"GET"})
     */
    public function show(RdvRepository $repository): Response
    {
        $rdv=$repository->findall();
        return $this->render('rdv/list.html.twig', [
            'rdv' => $rdv,
            'user'=> $this->getUser(),

        ]);
    }

    /**
     * @Route("/{id}/edit", name="rdv_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Rdv $rdv, EntityManagerInterface $entityManager): Response
    {$tournois=$this->getDoctrine()->getRepository(Tournoi::class)->findAll();
        $form = $this->createForm(RdvType::class, $rdv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('rdv_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rdv/edit.html.twig', [
            'rdv' => $rdv,
            'form' => $form->createView(),
            'user'=> $this->getUser(),"tournois" => $tournois,
        ]);
    }
    /**
     * @Route("/tri", name="tri1")
     */
    public function Tri(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $query = $em->createQuery(
            'SELECT a FROM App\Entity\Rdv a 
            ORDER BY a.date DESC '
        );

        $activites = $query->getResult();
        return $this->render('rdv/list.html.twig',
            array('rdv' => $activites));

    }
    /**
     * @Route("/verify/rdv/email", name="app_rdv_verify_email")
     */
    public function verifyRdvEmail(Request $request, RdvRepository $rep): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists

        $val = $rep->verifRDV($this->getUser()->getId());

        try {
            $this->emailVerifier->handleEmailConfirmation1($request, $this->getUser(),$val);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $exception->getReason());

            return $this->redirectToRoute('app_login');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('rdv_index');
    }
    /**
     * @Route("/deleteRdvMobile/{id}", name="deleteRdvMobile")
     */
    public function deleteRdvMobile($id,RdvRepository  $repository,Request $request,NormalizerInterface $normalizable)
    {$em=$this->getDoctrine()->getManager();
        $rdv=$repository->find($id);
        $em->remove($rdv);
        $em->flush();
        $jsonContent =$normalizable->normalize($rdv,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/{id}", name="rdv_delete", methods={"GET" , "POST"})
     */
    public function delete(Request $request, Rdv $rdv, EntityManagerInterface $entityManager): Response
    {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rdv);
            $em->flush();

            $repo =$this->getDoctrine()->getRepository(Rdv::class);
            return $this->redirectToRoute("rdv_index");

            /*$em = $this->getDoctrine()->getManager();
            $em->remove($profil);
            $em->flush();

            $repo =$this->getDoctrine()->getRepository(Profil::class);
            return $this->redirectToRoute("profil_index");*/

        }


}
