<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController {

    #[Route('/', name: "home")]
    public function homePage() : Response
    { 
        $homeData = [
			"Home data 1" => "some data",
			"Home data 2" => "some more data",
			"Home data 3" => "even more data",
		];

		
			
			return $this->render('link_pages/index.html.twig', [
				'homeData' => $homeData, 
			]); 
		}
	}