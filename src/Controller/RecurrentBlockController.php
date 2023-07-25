<?php

namespace App\Controller;

use App\Repository\RecurrentBlockRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecurrentBlockController extends AbstractController
{
    #[Route(name: 'app_recurrent_block')]
    public function navbar(RecurrentBlockRepository $recurrentBlockRepository): Response
    {
        $navbar = $recurrentBlockRepository->findOneBy(["type" => "navbar"]);

        return $this->render('page_block/navbar.html.twig', [
            "navbar" => $navbar
        ]);
    }
}
