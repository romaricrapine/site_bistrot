<?php

namespace App\Controller\Users;

use App\Repository\CategoriesRepository;
use App\Repository\InformationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{

    private CategoriesRepository $categoriesRepository;
    private InformationsRepository $informationsRepository;

    public function __construct(
        CategoriesRepository $categoriesRepository,
        InformationsRepository $informationsRepository
    )
    {
        $this->categoriesRepository = $categoriesRepository;
        $this->informationsRepository = $informationsRepository;
    }
    
    #[Route('/carte', name: 'app_carte_user')]
    public function index(): Response
    {
        return $this->render('user/carte.html.twig', [
            'categories_salade' => $this->categoriesRepository->findBy(array('name' => 'Salade')),
            'categories_burger' => $this->categoriesRepository->findBy(array('name' => 'Burger')),
            'categories_plat' => $this->categoriesRepository->findBy(array('name' => 'Plat')),
            'categories_planche' => $this->categoriesRepository->findBy(array('name' => 'Planche à Partager')),
            'categories_menu' => $this->categoriesRepository->findBy(array('name' => 'Menu')),
            'categories_dessert' => $this->categoriesRepository->findBy(array('name' => 'Dessert')),
            'categories_vin' => $this->categoriesRepository->findBy(array('name' => 'Vin')),
            'categories_boisson_soft' => $this->categoriesRepository->findBy(array('name' => 'Boisson Soft')),
            'informations' => $this->informationsRepository->findAll(),
        ]);
    }
}
