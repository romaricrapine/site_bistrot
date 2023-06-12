<?php

namespace App\Controller\Users;

use App\Entity\Informations;
use App\Repository\CategoriesRepository;
use App\Repository\InformationsRepository;
use App\Repository\ProductsRepository;
use App\Repository\SubCategoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

    private CategoriesRepository $categoriesRepository;
    private ProductsRepository $productsRepository;
    private InformationsRepository $informationsRepository;

    public function __construct(
        CategoriesRepository $categoriesRepository,
        ProductsRepository $productsRepository,
        InformationsRepository $informationsRepository
    )
    {
        $this->categoriesRepository = $categoriesRepository;
        $this->productsRepository = $productsRepository;
        $this->informationsRepository = $informationsRepository;
    }

    #[Route('/', name: 'app_home_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'categories_boisson_chaude' => $this->categoriesRepository->findBy(array('name' => 'Boisson Chaude')),
            'categories_boisson_soft' => $this->categoriesRepository->findBy(array('name' => 'Boisson Soft')),
            'categories_biere' => $this->categoriesRepository->findBy(array('name' => 'Bière')),
            'categories_vin' => $this->categoriesRepository->findBy(array('name' => 'Vin')),
            'categories_cocktail' => $this->categoriesRepository->findBy(array('name' => 'Cocktail')),
            'products' => $this->productsRepository->findAll(),
            'informations' => $this->informationsRepository->findAll(),
        ]);
    }

    #[Route('/', name: 'app_home_partials')]
    public function partials(): Response
    {
        return $this->render('template/base.html.twig', [

        ]);
    }
}
