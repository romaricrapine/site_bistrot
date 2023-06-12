<?php

namespace App\Controller\Users;

use App\Repository\CategoriesRepository;
use App\Repository\InformationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    private InformationsRepository $informationsRepository;
    public function __construct(
        InformationsRepository $informationsRepository
    )
    {
        $this->informationsRepository = $informationsRepository;
    }

    #[Route('/about', name: 'app_about_user')]
    public function index(): Response
    {
        return $this->render('user/about.html.twig', [
            'informations' => $this->informationsRepository->findAll(),
        ]);
    }
}
