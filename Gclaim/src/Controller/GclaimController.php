<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GclaimController extends AbstractController
{
    /**
     * @Route("/", name="gclaim")
     */
    public function index(): Response
    {
        $user = $this->getUser();



        return $this->render('gclaim/index.html.twig', [
            'user' => $user
        ]);
    }
}
