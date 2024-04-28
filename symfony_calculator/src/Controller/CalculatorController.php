<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;

class CalculatorController extends AbstractController {

    #[Route('/', name: "calculator")]
    public function index(Request $request, LoggerInterface $logger) : Response
    { 
		$logger->info('Using Logger service.');

        $value1 = $request->query->get('value1');
        $value2 = $request->query->get('value2');
        $operation = $request->query->get('operation');
        $solution = 0;
		$message = '';

		if (!empty($value1) && !empty($value2)) { 
			switch ($operation) {
				case 'addition':
					$solution = $value1 + $value2;
					break;
				case 'subtraction':
					$solution = $value1 - $value2;
					break;
				case 'multiplication':
					$solution = $value1 * $value2;
					break;
				case 'division':
					if ($value2 == 0) {
						$value2 = 1;
						$solution = $value1 / $value2;
						$message = 'Can not divide by zero.';
					} else {
						$solution = $value1 / $value2;
					}
					break;
				default:
					$message = 'Something went wrong. Please try again.';
					break;
				}
			}
			
			return $this->render('calculator/index.html.twig', [
				'solution' => $solution,
				'message' => $message
			]); 
		}
	}