<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/pages/{slug}', name: 'app_pages_show')]
    public function show(): Response
    {
        return $this->render('pages/show.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
