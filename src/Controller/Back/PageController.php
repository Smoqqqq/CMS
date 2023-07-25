<?php

namespace App\Controller\Back;

use App\Entity\Page;
use App\Form\PageType;
use App\Repository\PageRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/admin", priority: 2)]
class PageController extends AbstractController
{
    #[Route('/', name: 'app_back_page_search')]
    public function search(PageRepository $pageRepository): Response
    {
        $pages = $pageRepository->findAll();
        return $this->render('back/page/search.html.twig', [
            "pages" => $pages
        ]);
    }

    #[Route('/page/create', name: 'app_back_page_create')]
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $page = new Page();
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $page->setUrl((string) $page->getUrl());

            $em->persist($page);
            $em->flush();

            $this->addFlash("success", "page " . $page->getName() . " Ajouté !");
            return $this->redirectToRoute("app_back_page_search");
        }

        return $this->render('back/page/create.html.twig', [
            "form" => $form->createView()
        ]);
    }

    #[Route('/page/{id}/edit', name: 'app_back_page_edit')]
    public function edit(Page $page, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $page->setUrl((string) $page->getUrl());

            $em->persist($page);
            $em->flush();

            $this->addFlash("success", "page " . $page->getName() . " Enregistré !");
        }

        return $this->render('back/page/edit.html.twig', [
            "form" => $form->createView(),
            "page" => $page
        ]);
    }
}
