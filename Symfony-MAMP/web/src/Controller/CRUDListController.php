<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CRUDListController extends AbstractController
{
    #[Route('/crud', name: 'app_crud_list')]
    public function index()
    {
        return $this->render('crudlist/index.html.twig');
    }

    #[Route('/create', name: 'create_task', methods: ['POST'])]
    public function create()
    {
        exit('to do: create new task');
    }
}