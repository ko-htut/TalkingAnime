<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimesController extends AbstractController
{
    /**
     * @Route("/animes", name="animes")
     */
    public function index()
    {
        return $this->render('animes/index.html.twig', [
            'controller_name' => 'AnimesController',
        ]);
    }
}
