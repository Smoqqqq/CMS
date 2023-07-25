<?php

namespace App\Entity\Page;

use App\Form\Page\DualTextBlockType;
use App\Repository\Page\DualTextBlockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DualTextBlockRepository::class)]
class DualTextBlock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $title1 = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $content1 = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $title2 = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $content2 = null;

    #[ORM\Column(length: 255)]
    private ?string $template = "dual-text";
    
    #[ORM\Column(length: 255)]
    private ?string $name = "Deux textes";

    public function getBlockType(): string {
        return DualTextBlockType::class;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle1(): ?string
    {
        return $this->title1;
    }

    public function setTitle1(string $title1): self
    {
        $this->title1 = $title1;

        return $this;
    }

    public function getContent1(): ?string
    {
        return $this->content1;
    }

    public function setContent1(string $content1): self
    {
        $this->content1 = $content1;

        return $this;
    }

    public function getTitle2(): ?string
    {
        return $this->title2;
    }

    public function setTitle2(string $title2): self
    {
        $this->title2 = $title2;

        return $this;
    }

    public function getContent2(): ?string
    {
        return $this->content2;
    }

    public function setContent2(string $content2): self
    {
        $this->content2 = $content2;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function getName(): string 
    {
        return $this->name;
    }
}
