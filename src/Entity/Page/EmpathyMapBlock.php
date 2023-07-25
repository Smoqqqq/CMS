<?php

namespace App\Entity\Page;

use App\Form\Page\EmpathyMapBlockType;
use App\Repository\Page\EmpathyMapBlockRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpathyMapBlockRepository::class)]
class EmpathyMapBlock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 512)]
    private ?string $title1 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content1 = null;

    #[ORM\Column(length: 512)]
    private ?string $title2 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content2 = null;

    #[ORM\Column(length: 512)]
    private ?string $title3 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content3 = null;

    #[ORM\Column(length: 512)]
    private ?string $title4 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content4 = null;

    #[ORM\Column(length: 512)]
    private ?string $title5 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content5 = null;

    #[ORM\Column(length: 512)]
    private ?string $title6 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content6 = null;

    #[ORM\Column(length: 512)]
    private ?string $title7 = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content7 = null;

    #[ORM\Column(length: 255)]
    private ?string $template = "empathy-map";
    
    #[ORM\Column(length: 255)]
    private ?string $name = "Empathy map";

    public function getBlockType(): string {
        return EmpathyMapBlockType::class;
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

    public function getTitle3(): ?string
    {
        return $this->title3;
    }

    public function setTitle3(string $title3): self
    {
        $this->title3 = $title3;

        return $this;
    }

    public function getContent3(): ?string
    {
        return $this->content3;
    }

    public function setContent3(string $content3): self
    {
        $this->content3 = $content3;

        return $this;
    }

    public function getTitle4(): ?string
    {
        return $this->title4;
    }

    public function setTitle4(string $title4): self
    {
        $this->title4 = $title4;

        return $this;
    }

    public function getContent4(): ?string
    {
        return $this->content4;
    }

    public function setContent4(string $content4): self
    {
        $this->content4 = $content4;

        return $this;
    }

    public function getTitle5(): ?string
    {
        return $this->title5;
    }

    public function setTitle5(string $title5): self
    {
        $this->title5 = $title5;

        return $this;
    }

    public function getContent5(): ?string
    {
        return $this->content5;
    }

    public function setContent5(string $content5): self
    {
        $this->content5 = $content5;

        return $this;
    }

    public function getTitle6(): ?string
    {
        return $this->title6;
    }

    public function setTitle6(string $title6): self
    {
        $this->title6 = $title6;

        return $this;
    }

    public function getContent6(): ?string
    {
        return $this->content6;
    }

    public function setContent6(string $content6): self
    {
        $this->content6 = $content6;

        return $this;
    }

    public function getTitle7(): ?string
    {
        return $this->title7;
    }

    public function setTitle7(string $title7): self
    {
        $this->title7 = $title7;

        return $this;
    }

    public function getContent7(): ?string
    {
        return $this->content7;
    }

    public function setContent7(string $content7): self
    {
        $this->content7 = $content7;

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
