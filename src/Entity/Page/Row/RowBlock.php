<?php

namespace App\Entity\Page\Row;

use App\Repository\Row\RowBlockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RowBlockRepository::class)]
class RowBlock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $template = "row";

    #[ORM\Column(length: 255)]
    private ?string $name = "Colonnes";

    #[ORM\OneToMany(mappedBy: 'rowBlock', targetEntity: RowColumn::class, orphanRemoval: true)]
    private Collection $columns;

    public function __construct()
    {
        $this->columns = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Collection<int, RowColumn>
     */
    public function getColumns(): Collection
    {
        return $this->columns;
    }

    public function addColumn(RowColumn $column): self
    {
        if (!$this->columns->contains($column)) {
            $this->columns->add($column);
            $column->setRowBlock($this);
        }

        return $this;
    }

    public function removeColumn(RowColumn $column): self
    {
        if ($this->columns->removeElement($column)) {
            // set the owning side to null (unless already changed)
            if ($column->getRowBlock() === $this) {
                $column->setRowBlock(null);
            }
        }

        return $this;
    }
}
