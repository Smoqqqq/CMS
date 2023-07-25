<?php

namespace App\Entity;

use App\Entity\Page;
use App\Entity\Page\DualImageCaptionBlock;
use App\Entity\Page\DualImageTitleBlock;
use App\Entity\Page\EmpathyMapBlock;
use App\Entity\Page\Moodboard1Block;
use App\Entity\Page\Moodboard2Block;
use App\Entity\Page\PersonaBlock;
use App\Entity\Page\SingleLinkBlock;
use App\Entity\Page\TripleImageBlock;
use App\Entity\Page\TripleImageCaptionBlock;
use App\Entity\RecurrentBlock\NavbarBlock;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Page\TextBlock;
use App\Entity\Page\ImageBlock;
use App\Repository\BlockRepository;
use App\Entity\Page\DualTextBlock;
use App\Entity\Page\DualImageBlock;

#[ORM\Entity(repositoryClass: BlockRepository::class)]
class Block
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?TextBlock $textBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DualTextBlock $dualTextBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?ImageBlock $imageBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DualImageBlock $dualImageBlock = null;

    #[ORM\ManyToOne(inversedBy: 'blocks')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Page $page = null;

    #[ORM\Column(nullable: true)]
    private ?int $position = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Moodboard1Block $moodBoard1Block = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Moodboard2Block $moodboard2Block = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?TripleImageBlock $tripleImageBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DualImageTitleBlock $dualImageTitleBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?DualImageCaptionBlock $dualImageCaptionBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?PersonaBlock $personaBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?TripleImageCaptionBlock $tripleImageCaptionBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?EmpathyMapBlock $empathyMapBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?SingleLinkBlock $SingleLinkBlock = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isRecurrentBlock = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?NavbarBlock $navbarBlock = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextBlock(): ?TextBlock
    {
        return $this->textBlock;
    }

    public function setTextBlock(?TextBlock $textBlock): self
    {
        $this->textBlock = $textBlock;

        return $this;
    }

    public function getDualTextBlock(): ?DualTextBlock
    {
        return $this->dualTextBlock;
    }

    public function setDualTextBlock(?DualTextBlock $dualTextBlock): self
    {
        $this->dualTextBlock = $dualTextBlock;

        return $this;
    }

    public function getImageBlock(): ?ImageBlock
    {
        return $this->imageBlock;
    }

    public function setImageBlock(?ImageBlock $imageBlock): self
    {
        $this->imageBlock = $imageBlock;

        return $this;
    }

    public function getDualImageBlock(): ?DualImageBlock
    {
        return $this->dualImageBlock;
    }

    public function setDualImageBlock(?DualImageBlock $dualImageBlock): self
    {
        $this->dualImageBlock = $dualImageBlock;

        return $this;
    }

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getCurrentBlock() {
        if($this->textBlock) return $this->textBlock;
        if($this->dualTextBlock) return $this->dualTextBlock;
        if($this->imageBlock) return $this->imageBlock;
        if($this->dualImageBlock) return $this->dualImageBlock;
        if($this->dualImageTitleBlock) return $this->dualImageTitleBlock;
        if($this->dualImageCaptionBlock) return $this->dualImageCaptionBlock;
        if($this->tripleImageBlock) return $this->tripleImageBlock;
        if($this->tripleImageCaptionBlock) return $this->tripleImageCaptionBlock;
        if($this->moodBoard1Block) return $this->moodBoard1Block;
        if($this->moodboard2Block) return $this->moodboard2Block;
        if($this->personaBlock) return $this->personaBlock;
        if($this->empathyMapBlock) return $this->empathyMapBlock;
        if($this->SingleLinkBlock) return $this->SingleLinkBlock;
        if($this->navbarBlock) return $this->navbarBlock;
    }

    public function setCurrentBlock($block) {
        if(get_class($block) === TextBlock::class) {
            $this->setTextBlock($block);
            return;
        }
        if(get_class($block) === DualTextBlock::class) {
            $this->setDualTextBlock($block);
            return;
        }
        if(get_class($block) === ImageBlock::class) {
            $this->setImageBlock($block);
            return;
        }
        if(get_class($block) === DualImageBlock::class) {
            $this->setDualImageBlock($block);
            return;
        }
        if(get_class($block) === DualImageTitleBlock::class) {
            $this->setDualImageTitleBlock($block);
            return;
        }
        if(get_class($block) === DualImageCaptionBlock::class) {
            $this->setDualImageCaptionBlock($block);
            return;
        }
        if(get_class($block) === TripleImageBlock::class) {
            $this->setTripleImageBlock($block);
            return;
        }
        if(get_class($block) === TripleImageCaptionBlock::class) {
            $this->setTripleImageCaptionBlock($block);
            return;
        }
        if(get_class($block) === Moodboard1Block::class) {
            $this->setMoodBoard1Block($block);
            return;
        }
        if(get_class($block) === Moodboard2Block::class) {
            $this->setMoodboard2Block($block);
            return;
        }
        if(get_class($block) === PersonaBlock::class) {
            $this->setPersonaBlock($block);
            return;
        }
        if(get_class($block) === EmpathyMapBlock::class) {
            $this->setEmpathyMapBlock($block);
            return;
        }
        if(get_class($block) === SingleLinkBlock::class) {
            $this->setSingleLinkBlock($block);
            return;
        }
        if(get_class($block) === NavbarBlock::class) {
            $this->setNavbarBlock($block);
            return;
        }
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getMoodBoard1Block(): ?Moodboard1Block
    {
        return $this->moodBoard1Block;
    }

    public function setMoodBoard1Block(?Moodboard1Block $moodBoard1Block): self
    {
        $this->moodBoard1Block = $moodBoard1Block;

        return $this;
    }

    public function getMoodboard2Block(): ?Moodboard2Block
    {
        return $this->moodboard2Block;
    }

    public function setMoodboard2Block(?Moodboard2Block $moodboard2Block): self
    {
        $this->moodboard2Block = $moodboard2Block;

        return $this;
    }

    public function getTripleImageBlock(): ?TripleImageBlock
    {
        return $this->tripleImageBlock;
    }

    public function setTripleImageBlock(?TripleImageBlock $tripleImageBlock): self
    {
        $this->tripleImageBlock = $tripleImageBlock;

        return $this;
    }

    public function getDualImageTitleBlock(): ?DualImageTitleBlock
    {
        return $this->dualImageTitleBlock;
    }

    public function setDualImageTitleBlock(?DualImageTitleBlock $dualImageTitleBlock): self
    {
        $this->dualImageTitleBlock = $dualImageTitleBlock;

        return $this;
    }

    public function getDualImageCaptionBlock(): ?DualImageCaptionBlock
    {
        return $this->dualImageCaptionBlock;
    }

    public function setDualImageCaptionBlock(?DualImageCaptionBlock $dualImageCaptionBlock): self
    {
        $this->dualImageCaptionBlock = $dualImageCaptionBlock;

        return $this;
    }

    public function getPersonaBlock(): ?PersonaBlock
    {
        return $this->personaBlock;
    }

    public function setPersonaBlock(?PersonaBlock $personaBlock): self
    {
        $this->personaBlock = $personaBlock;

        return $this;
    }

    public function getTripleImageCaptionBlock(): ?TripleImageCaptionBlock
    {
        return $this->tripleImageCaptionBlock;
    }

    public function setTripleImageCaptionBlock(?TripleImageCaptionBlock $tripleImageCaptionBlock): self
    {
        $this->tripleImageCaptionBlock = $tripleImageCaptionBlock;

        return $this;
    }

    public function getEmpathyMapBlock(): ?EmpathyMapBlock
    {
        return $this->empathyMapBlock;
    }

    public function setEmpathyMapBlock(?EmpathyMapBlock $empathyMapBlock): self
    {
        $this->empathyMapBlock = $empathyMapBlock;

        return $this;
    }

    public function getSingleLinkBlock(): ?SingleLinkBlock
    {
        return $this->SingleLinkBlock;
    }

    public function setSingleLinkBlock(?SingleLinkBlock $SingleLinkBlock): self
    {
        $this->SingleLinkBlock = $SingleLinkBlock;

        return $this;
    }

    public function isIsRecurrentBlock(): ?bool
    {
        return $this->isRecurrentBlock;
    }

    public function setIsRecurrentBlock(?bool $isRecurrentBlock): self
    {
        $this->isRecurrentBlock = $isRecurrentBlock;

        return $this;
    }

    public function getNavbarBlock(): ?NavbarBlock
    {
        return $this->navbarBlock;
    }

    public function setNavbarBlock(?NavbarBlock $navbarBlock): self
    {
        $this->navbarBlock = $navbarBlock;

        return $this;
    }
}
