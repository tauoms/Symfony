<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PalindromeController extends AbstractController {

    #[Route('/', name: "palindrome_checker")]
    public function index(Request $request) : Response
    { 
        $inputStr = $request->query->get('inputStr');
        $isPalindrome = false;

		if (!empty($inputStr)) { 
			if ($inputStr === strrev($inputStr)) {
				$isPalindrome = true;
			} else {
				$isPalindrome = false;
			}
			}
			
			return $this->render('palindrome_checker/index.html.twig', [
				'inputStr' => $inputStr,
				'isPalindrome' => $isPalindrome, 
			]); 
		}
	}