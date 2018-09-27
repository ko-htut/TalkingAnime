<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MangasController extends AbstractController
{
    /**
     * @Route("/mangas", name="mangas")
     */
    public function index()
    {
        return $this->render('mangas/index.html.twig', [
            'controller_name' => 'MangasController',
        ]);
    }
}
