<?php

namespace App\Entity\RecurrentBlock;

use App\Entity\Page;
use App\Repository\RecurrentBlock\NavbarLinkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NavbarLinkRepository::class)]
class NavbarLink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\ManyToOne(inversedBy: 'links')]
    #[ORM\JoinColumn(nullable: false)]
    private ?NavbarBlock $navbarBlock = null;

    #[ORM\ManyToOne(inversedBy: 'navbarLinks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Page $page = null;

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

    public function getNavbarBlock(): ?NavbarBlock
    {
        return $this->navbarBlock;
    }

    public function setNavbarBlock(?NavbarBlock $navbarBlock): self
    {
        $this->navbarBlock = $navbarBlock;

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
}
