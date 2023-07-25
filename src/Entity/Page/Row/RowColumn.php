<?php

namespace App\Entity\Page\Row;

use App\Entity\Generic\Link;
use App\Repository\Row\RowColumnRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RowColumnRepository::class)]
class RowColumn
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $breakpoint = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $width = null;

    #[ORM\ManyToOne(inversedBy: 'columns')]
    #[ORM\JoinColumn(nullable: false)]
    private ?RowBlock $rowBlock = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBreakpoint(): ?string
    {
        return $this->breakpoint;
    }

    public function setBreakpoint(string $breakpoint): self
    {
        $this->breakpoint = $breakpoint;

        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }

    public function setWidth(?string $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getRowBlock(): ?RowBlock
    {
        return $this->rowBlock;
    }

    public function setRowBlock(?RowBlock $rowBlock): self
    {
        $this->rowBlock = $rowBlock;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
