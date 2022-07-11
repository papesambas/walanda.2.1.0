<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/categories/{slug}', name: 'app_categories_show')]
    public function show(): Response
    {
        return $this->render('categories/show.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }
}
