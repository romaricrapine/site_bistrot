<?php

namespace App\Controller\Admin;

use App\Entity\Administrateur;;

use App\Entity\Categories;
use App\Entity\Events;
use App\Entity\Informations;
use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'app_home_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('B HDV');
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Gérér les Produits');
        yield MenuItem::subMenu('Les Produits', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Ajouter un Produit', 'fas fa-plus', Products::class)->setAction(Crud::PAGE_NEW)->setPermission('ROLE_ADMIN'),
                MenuItem::linkToCrud('Afficher les Produits', 'fas fa-eye', Products::class)
            ]);

//        yield MenuItem::section('Gérér les Catégories');
//        yield MenuItem::subMenu('Les Catégories', 'fas fa-bars')
//            ->setSubItems([
//                MenuItem::linkToCrud('Ajouter uns Catégorie', 'fas fa-plus', Categories::class)->setAction(Crud::PAGE_NEW)->setPermission('ROLE_ADMIN'),
//                MenuItem::linkToCrud('Afficher les Catégories', 'fas fa-eye', Categories::class)
//            ]);

        yield MenuItem::section('Gérer les Informations');
        yield MenuItem::subMenu('Les Informations', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Afficher les Informations', 'fas fa-eye', Informations::class)
            ]);

        yield MenuItem::section('Gérer l\'équipe');
        yield MenuItem::subMenu('L\'équipe du Bistrot', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Montrer l\'équipe', 'fas fa-eye', Administrateur::class)
            ]);

    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('admin');
    }

}
