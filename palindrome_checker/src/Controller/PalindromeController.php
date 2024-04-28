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
		$message= '';

		if (!empty($inputStr) && !preg_match('~[0-9]+~', $inputStr) && !preg_match('/[\'^£€$%&*()}{@#~?><>,|=_+¬-]/', $inputStr)) { 
			if (strtolower($inputStr) === strrev(strtolower($inputStr))) {
				$isPalindrome = true;
			} else {
				$isPalindrome = false;
			}
		} else if (!empty($inputStr) && preg_match('~[0-9]+~', $inputStr)) {
			$inputStr = null;
			$isPalindrome = false;
			$message = 'You entered numbers. Please enter a word with only letters.';
		} else if (!empty($inputStr) && preg_match('/[\'^£€$%&*()}{@#~?><>,|=_+¬-]/', $inputStr)) {
			$inputStr = null;
			$isPalindrome = false;
			$message = "Please don't include special characters in your input.";
		}
		
			return $this->render('palindrome_checker/index.html.twig', [
				'inputStr' => $inputStr,
				'isPalindrome' => $isPalindrome,
				'message' => $message
			]); 
		}
	}