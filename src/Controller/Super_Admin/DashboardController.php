<?php

namespace App\Controller\Super_Admin;

use App\Entity\Categories;
use App\Entity\Classes;
use App\Entity\Comments;
use App\Entity\Cycles;
use App\Entity\Enseignements;
use App\Entity\Etablissements;
use App\Entity\Medias;
use App\Entity\Niveaux;
use App\Entity\Options;
use App\Entity\Pages;
use App\Entity\Publications;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/super/admin', name: 'super_admin')]
    public function index(): Response
    {
        return $this->render('super_admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Walanda');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::subMenu('Etablissements', 'fas fa-university')->setSubItems([
            MenuItem::linkToCrud('Tous les établissements', 'fas fa-list', Etablissements::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Etablissements::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Tous les enseignements', 'fas fa-list', Enseignements::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Enseignements::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Tous les cycles', 'fas fa-list', Cycles::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Cycles::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Tous les Niveaux', 'fas fa-list', Niveaux::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Niveaux::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Toutes les classes', 'fas fa-list', Classes::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Classes::class)->setAction(Crud::PAGE_NEW),
        ]);
        yield MenuItem::subMenu('Publications', 'fas fa-university')->setSubItems([
            MenuItem::linkToCrud('Toutes les publications', 'fas fa-list', Publications::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Publications::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Toutes les catégories', 'fas fa-list', Categories::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Categories::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Tous les commentaires', 'fas fa-list', Comments::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Comments::class)->setAction(Crud::PAGE_NEW),
        ]);
        yield MenuItem::subMenu('Pages', 'fas fa-university')->setSubItems([
            MenuItem::linkToCrud('Toutes les pages', 'fas fa-list', Pages::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Pages::class)->setAction(Crud::PAGE_NEW),
        ]);
        yield MenuItem::subMenu('Médias', 'fas fa-university')->setSubItems([
            MenuItem::linkToCrud('Tous les médias', 'fas fa-list', Medias::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Medias::class)->setAction(Crud::PAGE_NEW),
        ]);
        yield MenuItem::subMenu('Options', 'fas fa-university')->setSubItems([
            MenuItem::linkToCrud('Toutes les options', 'fas fa-list', Options::class),
            MenuItem::linkToCrud('Ajouter', 'fas fa-plus', Options::class)->setAction(Crud::PAGE_NEW),
        ]);
    }
}
