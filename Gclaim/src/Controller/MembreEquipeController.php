<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MembreEquipeController extends AbstractController
{
    /**
     * @Route("/membre/equipe", name="membre_equipe")
     */
    public function index(): Response
    {
        return $this->render('membre_equipe/index.html.twig', [
            'controller_name' => 'MembreEquipeController',
        ]);
    }
}
