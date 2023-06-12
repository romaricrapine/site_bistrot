<?php

namespace App\Controller\Users;

use App\Repository\InformationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{

    private InformationsRepository $informationsRepository;
    public function __construct(
        InformationsRepository $informationsRepository
    )
    {
        $this->informationsRepository = $informationsRepository;
    }

    #[Route('/event', name: 'app_event_user')]
    public function index(): Response
    {
        return $this->render('user/event.html.twig', [
            'informations' => $this->informationsRepository->findAll(),
        ]);
    }
}
