<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TemperatureController extends AbstractController {

    #[Route('/', name: "name variation")]
    public function nameVariation(Request $request) {
        $name = $request->query->get('name', '');

        $nameDetails = [];
		if (!empty($name)) { 
			$nameDetails = [
					'number_of_characters' => strlen($name),
					'first_character' => $name[0],
					'last_character' => $name[strlen($name) - 1],
					'lower_case' => strtolower($name),
					'upper_case' => strtoupper($name), 
				]; 
			}
			
			return $this->render('name_variation/index.html.twig', [
				'name' => $name,
				'nameDetails' => $nameDetails, 
			]); 
		}
	}