<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Formula1Controller extends AbstractController
{
    #[Route('/', name: 'app_formula1')]
    public function index(): Response
    {
        return $this->render('formula1/index.html.twig', [
            'controller_name' => 'Formula1Controller',
        ]);
    }
}
