<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController {

    #[Route('/hello')]
    public function helloWorld() {
        return new Response('Hello Symfony 7');
    }

}