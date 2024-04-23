<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TemperatureController extends AbstractController {

    #[Route('temp/', name: "temperature converter")]
    public function temperatureConversion(Request $request) {
        $temp = $request->query->get('temperature');

        if (!is_numeric($temp)) {    
            // Return an error if the temperature is invalid     
            return new Response("Error: Temperature must be a number", 400);     
        } else {
            $fahrenheit = ($temp * 9 / 5) + 32;     
            // Return the converted temperature     
            return new Response("The temperature in Fahrenheit : " . $fahrenheit);   
        }
    }

}