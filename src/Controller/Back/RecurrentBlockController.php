<?php

namespace App\Controller\Back;

use App\Entity\Block;
use App\Entity\RecurrentBlock;
use App\Entity\RecurrentBlock\NavbarBlock;
use App\Form\RecurrentBlock\NavbarBlockType;
use App\Repository\RecurrentBlockRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/recurrent-block', priority: 2)]
class RecurrentBlockController extends AbstractController
{
    #[Route('/create/{type}', name: 'app_back_recurrent_block_create')]
    public function create(string $type, ManagerRegistry $doctrine, Request $request): Response
    {

        $baseBlock = new Block();

        switch($type) {
            case "navbar":
                $block = new NavbarBlock();
                $block->setBackgroundColor("#FFFFFF");
                $form = $this->createForm(NavbarBlockType::class, $block);
                $baseBlock->setNavbarBlock($block);
                break;
        }


        $reccurentBlock = new RecurrentBlock();
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $reccurentBlock->setBlock($baseBlock)
                ->setType($type)
                ->setPosition("above");

            $block->setBlock($reccurentBlock);

            $em->persist($baseBlock);
            $em->persist($reccurentBlock);
            $em->flush();

            $this->addFlash("success", "Le bloc récurrent à été enregistré.");
            return $this->redirectToRoute("app_back_recurrent_block_search");
        }

        return $this->render('back/recurrent_block/create.html.twig', [
            "form" => $form->createView(),
            "type" => $type,
            "action" => "Créer"
        ]);
    }

    #[Route('/{id}/edit', name: 'app_back_recurrent_block_edit')]
    public function edit(RecurrentBlock $reccurentBlock, ManagerRegistry $doctrine, Request $request): Response
    {

        $baseBlock = $reccurentBlock->getBlock();

        switch($reccurentBlock->getType()) {
            case "navbar":
                $block = $reccurentBlock->getBlock()->getCurrentBlock();
                $form = $this->createForm(NavbarBlockType::class, $block);
                $baseBlock->setNavbarBlock($block);
                break;
        }
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $block->setBlock($reccurentBlock);

            $em->flush();

            $this->addFlash("success", "Le bloc récurrent à été enregistré.");
        }

        return $this->render('back/recurrent_block/create.html.twig', [
            "form" => $form->createView(),
            "type" => $reccurentBlock->getType(),
            "action" => "Modifier"
        ]);
    }

    #[Route("/", name: "app_back_recurrent_block_search")]
    public function search(RecurrentBlockRepository $recurrentBlockRepository) {
        return $this->render("back/recurrent_block/search.html.twig", [
            "blocks" => $recurrentBlockRepository->findAll()
        ]);
    }

    #[Route("/choose", name: "app_back_recurrent_block_choose")]
    public function choose(RecurrentBlockRepository $recurrentBlockRepository) {
        return $this->render("back/recurrent_block/choose.html.twig");
    }
}
