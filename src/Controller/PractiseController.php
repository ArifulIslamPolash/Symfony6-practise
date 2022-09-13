<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PractiseController extends AbstractController
{
    #[Route('/practise', name: 'app_practise')]
    public function index(): Response
    {
        return $this->render('practise/index.html.twig', [
            'controller_name' => 'PractiseController',
        ]);
    }
}
