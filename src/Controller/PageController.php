<?php

namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    #[Route("/", name: "app_home", priority: 1)]
    #[Route("/{url}", name: "app_page_read", priority: 1)]
    public function read(PageRepository $pageRepository, string $url = "") {
        $page = $pageRepository->findOneBy(["url" => $url, "active" => true]);

        if (!$page) {
            return $this->render("front/page/404.html.twig", [
                "page" => $url
            ]);
        }

        return $this->render("front/page/read.html.twig", [
            "page" => $page
        ]);
    }
}
