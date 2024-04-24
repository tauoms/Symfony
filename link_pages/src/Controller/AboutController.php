<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends AbstractController {

    #[Route('/about', name: "about")]
    public function homePage() : Response
    { 
        $aboutString = "This is the about page";

		
			
			return $this->render('link_pages/about.html.twig', [
				'aboutString' => $aboutString, 
			]); 
		}
	}