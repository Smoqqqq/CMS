<?php

namespace App\Entity\RecurrentBlock;

use App\Entity\RecurrentBlock;
use App\Entity\Recurrentblock\NavbarLink;
use App\Repository\RecurrentBlock\NavbarBlockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NavbarBlockRepository::class)]
class NavbarBlock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $template = "navbar";

    #[ORM\Column(length: 255)]
    private ?string $name = "Navbar";

    #[ORM\OneToMany(mappedBy: 'navbarBlock', targetEntity: NavbarLink::class, orphanRemoval: true, cascade: ['persist'])]
    private Collection $links;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?RecurrentBlock $block = null;

    #[ORM\Column(length: 255)]
    private ?string $linkAlignment = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $backgroundColor = null;

    public function __construct()
    {
        $this->links = new ArrayCollection();
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
     * @return Collection<int, NavbarLink>
     */
    public function getLinks(): Collection
    {
        return $this->links;
    }

    public function addLink(NavbarLink $link): self
    {
        if (!$this->links->contains($link)) {
            $this->links->add($link);
            $link->setNavbarBlock($this);
        }

        return $this;
    }

    public function removeLink(NavbarLink $link): self
    {
        if ($this->links->removeElement($link)) {
            // set the owning side to null (unless already changed)
            if ($link->getNavbarBlock() === $this) {
                $link->setNavbarBlock(null);
            }
        }

        return $this;
    }

    public function getBlock(): ?RecurrentBlock
    {
        return $this->block;
    }

    public function setBlock(RecurrentBlock $block): self
    {
        $this->block = $block;

        return $this;
    }

    public function getLinkAlignment(): ?string
    {
        return $this->linkAlignment;
    }

    public function setLinkAlignment(string $linkAlignment): self
    {
        $this->linkAlignment = $linkAlignment;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }
}
