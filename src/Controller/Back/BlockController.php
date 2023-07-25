<?php

namespace App\Controller\Back;

use App\Entity\Block;
use App\Entity\Page;
use App\Entity\Page\TextBlock;
use App\Entity\Page\ImageBlock;
use App\Form\Page\TextBlockType;
use App\Repository\BlockRepository;
use App\Entity\Page\PersonaBlock;
use App\Form\Page\ImageBlockType;
use App\Entity\Page\DualTextBlock;
use App\Entity\Page\DualImageBlock;
use App\Form\Page\PersonaBlockType;
use App\Entity\Page\Moodboard1Block;
use App\Entity\Page\Moodboard2Block;
use App\Form\Page\DualTextBlockType;
use App\Entity\Page\TripleImageBlock;
use App\Form\Page\DualImageBlockType;
use App\Form\Page\Moodboard1BlockType;
use App\Form\Page\Moodboard2BlockType;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\Page\TripleImageBlockType;
use App\Entity\Page\DualImageTitleBlock;
use App\Entity\Page\DualImageCaptionBlock;
use App\Entity\Page\EmpathyMapBlock;
use App\Entity\Page\SingleLinkBlock;
use App\Form\Page\DualImageTitleBlockType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Page\TripleImageCaptionBlock;
use App\Form\Page\DualImageCaptionBlockType;
use App\Form\Page\EmpathyMapBlockType;
use App\Form\Page\SingleLinkBlockType;
use App\Repository\Page\TextBlockRepository;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\Page\ImageBlockRepository;
use App\Form\Page\TripleImageCaptionBlockType;
use App\Repository\Page\PersonaBlockRepository;
use App\Repository\Page\DualTextBlockRepository;
use App\Repository\Page\DualImageBlockRepository;
use App\Repository\Page\Moodboard1BlockRepository;
use App\Repository\Page\Moodboard2BlockRepository;
use App\Repository\Page\TripleImageBlockRepository;
use App\Repository\Page\DualImageTitleBlockRepository;
use App\Repository\Page\DualImageCaptionBlockRepository;
use App\Repository\Page\EmpathyMapBlockRepository;
use App\Repository\Page\SingleLinkBlockRepository;
use App\Repository\Page\TripleImageCaptionBlockRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route("/admin/page", priority: 2)]
class BlockController extends AbstractController
{
    #[Route('/{id}/block/{blockClass}/create', name: 'app_back_page_block_create')]
    public function create(Page $page, string $blockClass, Request $request, ManagerRegistry $doctrine, BlockRepository $blockRepository): Response
    {
        $genericBlock = new Block();

        $position = $blockRepository->findOneBy(["page" => $page->getId()], ["position" => "DESC"]);

        if ($position) {
            $position = $position->getPosition() + 1;
        } else {
            $position = 0;
        }

        $genericBlock->setPage($page);
        $genericBlock->setPosition($position);

        switch ($blockClass) {
            case "TextBlock":
                $block = new TextBlock();
                $form = $this->createForm(TextBlockType::class, $block);
                $genericBlock->setTextBlock($block);
                break;
            case "DualTextBlock":
                $block = new DualTextBlock();
                $form = $this->createForm(DualTextBlockType::class, $block);
                $genericBlock->setDualTextBlock($block);
                break;
            case "ImageBlock":
                $block = new ImageBlock();
                $form = $this->createForm(ImageBlockType::class, $block);
                $genericBlock->setImageBlock($block);
                break;
            case "DualImageBlock":
                $block = new DualImageBlock();
                $form = $this->createForm(DualImageBlockType::class, $block);
                $genericBlock->setDualImageBlock($block);
                break;
            case "DualImageTitleBlock":
                $block = new DualImageTitleBlock();
                $form = $this->createForm(DualImageTitleBlockType::class, $block);
                $genericBlock->setDualImageTitleBlock($block);
                break;
            case "DualImageCaptionBlock":
                $block = new DualImageCaptionBlock();
                $form = $this->createForm(DualImageCaptionBlockType::class, $block);
                $genericBlock->setDualImageCaptionBlock($block);
                break;
            case "TripleImageBlock":
                $block = new TripleImageBlock();
                $form = $this->createForm(TripleImageBlockType::class, $block);
                $genericBlock->setTripleImageBlock($block);
                break;
            case "Moodboard1Block":
                $block = new Moodboard1Block();
                $form = $this->createForm(Moodboard1BlockType::class, $block);
                $genericBlock->setMoodBoard1Block($block);
                break;
            case "Moodboard2Block":
                $block = new Moodboard2Block();
                $form = $this->createForm(Moodboard2BlockType::class, $block);
                $genericBlock->setMoodboard2Block($block);
                break;
            case "PersonaBlock":
                $block = new PersonaBlock();
                $form = $this->createForm(PersonaBlockType::class, $block);
                $genericBlock->setPersonaBlock($block);
                break;
            case "TripleImageCaptionBlock":
                $block = new TripleImageCaptionBlock();
                $form = $this->createForm(TripleImageCaptionBlockType::class, $block);
                $genericBlock->setTripleImageCaptionBlock($block);
                break;
            case "EmpathyMapBlock":
                $block = new EmpathyMapBlock();
                $form = $this->createForm(EmpathyMapBlockType::class, $block);
                $genericBlock->setEmpathyMapBlock($block);
                break;
            case "SingleLinkBlock":
                $block = new SingleLinkBlock();
                $form = $this->createForm(SingleLinkBlockType::class, $block);
                $genericBlock->setSingleLinkBlock($block);
                break;
            default:
                $this->addFlash("danger", "Block inconnu.");
                return $this->redirectToRoute("app_back_page_edit", ["id" => $page->getId()]);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($genericBlock);
            $em->flush();

            $this->addFlash("success", "Bloc enregistré");
            return $this->redirectToRoute("app_back_page_edit", ["id" => $page->getId()]);
        }

        return $this->render('back/block/create.html.twig', [
            "form" => $form->createView(),
            "block" => $block->getName()
        ]);
    }

    #[Route('/{id}/block/{blockClass}/{blockId}/edit', name: 'app_back_page_block_edit')]
    public function edit(
        Block $genericBlock,
        string $blockClass,
        int $blockId,
        Request $request,
        ManagerRegistry $doctrine,
        TextBlockRepository $textBlockRepository,
        DualTextBlockRepository $dualTextBlockRepository,
        ImageBlockRepository $imageBlockRepository,
        DualImageBlockRepository $dualImageBlockRepository,
        DualImageTitleBlockRepository $dualImageTitleBlockRepository,
        DualImageCaptionBlockRepository $dualImageCaptionBlockRepository,
        Moodboard1BlockRepository $moodboard1BlockRepository,
        Moodboard2BlockRepository $moodboard2BlockRepository,
        TripleImageBlockRepository $tripleImageBlockRepository,
        PersonaBlockRepository $personaBlockRepository,
        TripleImageCaptionBlockRepository $tripleImageCaptionBlockRepository,
        EmpathyMapBlockRepository $empathyMapBlockRepository,
        SingleLinkBlockRepository $singleLinkBlockRepository
    ): Response {
        switch ($blockClass) {
            case "TextBlock":
                $block = $textBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(TextBlockType::class, $block);
                $genericBlock->setTextBlock($block);
                break;
            case "DualTextBlock":
                $block = $dualTextBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(DualTextBlockType::class, $block);
                $genericBlock->setDualTextBlock($block);
                break;
            case "ImageBlock":
                $block = $imageBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(ImageBlockType::class, $block);
                $genericBlock->setImageBlock($block);
                break;
            case "DualImageBlock":
                $block = $dualImageBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(DualImageBlockType::class, $block);
                $genericBlock->setDualImageBlock($block);
                break;
            case "DualImageTitleBlock":
                $block = $dualImageTitleBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(DualImageTitleBlockType::class, $block);
                $genericBlock->setDualImageTitleBlock($block);
                break;
            case "DualImageCaptionBlock":
                $block = $dualImageCaptionBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(DualImageCaptionBlockType::class, $block);
                $genericBlock->setDualImageCaptionBlock($block);
                break;
            case "TripleImageBlock":
                $block = $tripleImageBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(TripleImageBlockType::class, $block);
                $genericBlock->setTripleImageBlock($block);
                break;
            case "TripleImageCaptionBlock":
                $block = $tripleImageCaptionBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(TripleImageCaptionBlockType::class, $block);
                $genericBlock->setTripleImageCaptionBlock($block);
                break;
            case "Moodboard1Block":
                $block = $moodboard1BlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(Moodboard1BlockType::class, $block);
                $genericBlock->setMoodBoard1Block($block);
                break;
            case "Moodboard2Block":
                $block = $moodboard2BlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(Moodboard2BlockType::class, $block);
                $genericBlock->setMoodboard2Block($block);
                break;
            case "PersonaBlock":
                $block = $personaBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(PersonaBlockType::class, $block);
                $genericBlock->setPersonaBlock($block);
                break;
            case "EmpathyMapBlock":
                $block = $empathyMapBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(EmpathyMapBlockType::class, $block);
                $genericBlock->setEmpathyMapBlock($block);
                break;
            case "EmpathyMapBlock":
                $block = $singleLinkBlockRepository->find($blockId);
                if (!$block) {
                    $this->addFlash("danger", "Le bloc n'existe pas.");
                    return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
                }
                $form = $this->createForm(SingleLinkBlockType::class, $block);
                $genericBlock->setSingleLinkBlock($block);
                break;
            default:
                $this->addFlash("danger", "Block inconnu.");
                return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $genericBlock->setPage($genericBlock->getPage());
            $em->persist($block);
            $em->persist($genericBlock);
            $em->flush();

            $this->addFlash("success", "Bloc enregistré");
            return $this->redirectToRoute("app_back_page_edit", ["id" => $genericBlock->getPage()->getId()]);
        }

        return $this->render('back/block/edit.html.twig', [
            "form" => $form->createView(),
            "block" => $block
        ]);
    }

    #[Route("/block/{id}/up/{by}", name: "app_back_page_block_up_by")]
    public function moveBlockUpBy(Block $block, $by, BlockRepository $blockRepository, ManagerRegistry $doctrine)
    {
        if ($block->getPosition() == 0) {
            $this->addFlash("warning", "Le bloc est déja en première position.");
            return $this->redirectToRoute("app_back_page_edit", ["id" => $block->getPage()->getId()]);
        }

        if ($block->getPosition() < $by) {
            $by = $block->getPosition();
        }

        $initialPosition = $block->getPosition();

        $newPosition = $block->getPosition() - $by;
        $block->setPosition($newPosition);
        $replacedBlocks = $blockRepository->createQueryBuilder("b")
            ->where("b.page = :page")
            ->andWhere("b.position >= :newPosition")
            ->andWhere("b.position < :initialPosition")
            ->setParameters(["page" => $block->getPage(), "newPosition" => $newPosition, "initialPosition" => $initialPosition])
            ->getQuery()
            ->getResult();

        $em = $doctrine->getManager();

        if ($replacedBlocks) {
            foreach ($replacedBlocks as $block) {
                $block->setPosition($block->getPosition() + 1);
                $em->persist($block);
            }
        }

        $em->persist($block);
        $em->flush();

        $this->addFlash("success", "Bloc remonté.");
        return $this->redirectToRoute("app_back_page_edit", ["id" => $block->getPage()->getId()]);
    }

    #[Route("/block/{id}/down/{by}", name: "app_back_page_block_down_by")]
    public function moveBlockDownBy(Block $block, $by, BlockRepository $blockRepository, ManagerRegistry $doctrine)
    {
        $lastPosition = $blockRepository->findOneBy(["page" => $block->getPage()->getId()], ["position" => "DESC"]);
        $initialPosition = $block->getPosition();

        if ($lastPosition && $block->getPosition() >= $lastPosition->getPosition()) {
            $this->addFlash("warning", "Le bloc est déja en dernière position.");
            return $this->redirectToRoute("app_back_page_edit", ["id" => $block->getPage()->getId()]);
        }

        $lastPosition = $lastPosition->getPosition();

        $newPosition = $block->getPosition() + $by;

        if ($lastPosition < $newPosition) {
            $newPosition = $lastPosition;
        }

        $block->setPosition($newPosition);
        $replacedBlocks = $blockRepository->createQueryBuilder("b")
            ->where("b.page = :page")
            ->andWhere("b.position > :initialPosition")
            ->andWhere("b.position <= :newPosition")
            ->setParameters(["page" => $block->getPage(), "initialPosition" => $initialPosition, "newPosition" => $newPosition])
            ->getQuery()
            ->getResult();

        $em = $doctrine->getManager();

        if ($replacedBlocks) {
            foreach ($replacedBlocks as $block) {
                $block->setPosition($block->getPosition() - 1);
                $em->persist($block);
            }
        }

        $em->persist($block);
        $em->flush();

        $this->addFlash("success", "Bloc descendu.");
        return $this->redirectToRoute("app_back_page_edit", ["id" => $block->getPage()->getId()]);
    }

    #[Route("/bloc/{id}/delete", name: "app_back_page_block_delete")]
    public function deleteBlock(Block $block, ManagerRegistry $doctrine, BlockRepository $blockRepository)
    {
        $em = $doctrine->getManager();
        $em->remove($block);
        
        // move following blocks up
        $followers = $blockRepository->createQueryBuilder("b")
        ->where("b.position > :position")
        ->setParameter("position", $block->getPosition())
        ->getQuery()
        ->getResult();
        
        foreach ($followers as $follower) {
            $follower->setPosition($follower->getPosition() - 1);
            $em->persist($follower);
        }

        $em->flush();

        $this->addFlash("success", "Bloc supprimé !");
        return $this->redirectToRoute("app_back_page_edit", ["id" => $block->getPage()->getId()]);
    }
}
