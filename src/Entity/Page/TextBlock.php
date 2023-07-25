<?php

namespace App\Entity\Page;

use App\Form\Page\TextBlockType;
use App\Repository\Page\TextBlockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TextBlockRepository::class)]
class TextBlock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $title = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $content = null;

    #[ORM\Column(length: 65535, type: "text")]
    private ?string $template = "text";
    
    #[ORM\Column(length: 65535, type: "text")]
    private ?string $name = "Texte";

    public function getBlockType(): string {
        return TextBlockType::class;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

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
