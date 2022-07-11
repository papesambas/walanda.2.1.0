<?php

namespace App\Controller;

use App\Entity\Publications;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationsController extends AbstractController
{
    #[Route('/publications/{slug}', name: 'app_publications_show')]
    public function show(?Publications $publications): Response
    {
        if (!$publications) {
            return $this->redirectToRoute('app_blog');
        }
        return $this->render('publications/show.html.twig', [
            'publication' => $publications,
        ]);
    }
}
