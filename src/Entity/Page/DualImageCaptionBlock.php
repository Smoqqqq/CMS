<?php

namespace App\Entity\Page;

use App\Form\Page\DualImageCaptionBlockType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use App\Repository\Page\DualImageCaptionBlockRepository;

#[ORM\Entity(repositoryClass: DualImageCaptionBlockRepository::class)]
#[Vich\Uploadable]
class DualImageCaptionBlock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 512)]
    private ?string $image1 = null;

    #[ORM\Column(length: 512)]
    private ?string $image2 = null;

    #[ORM\Column(length: 512)]
    private ?string $template = "dual-image-caption";

    #[ORM\Column(length: 512)]
    private ?string $name = "Deux images avec légendes";

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'dual_image_caption_block', fileNameProperty: 'image1', size: 'imageSize1')]
    private ?File $imageFile1 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize1 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'dual_image_caption_block', fileNameProperty: 'image2', size: 'imageSize2')]
    private ?File $imageFile2 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize2 = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $caption1 = null;

    #[ORM\Column(length: 512, nullable: true)]
    private ?string $caption2 = null;

    public function getBlockType(): string {
        return DualImageCaptionBlockType::class;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(?string $image): self
    {
        $this->image1 = $image;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(?string $image2): self
    {
        $this->image2 = $image2;

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

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile1(?File $imageFile = null): void
    {
        $this->imageFile1 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile1(): ?File
    {
        return $this->imageFile1;
    }

    public function setImageName1(?string $imageName): void
    {
        $this->imageName1 = $imageName;
    }

    public function getImageName1(): ?string
    {
        return $this->imageName1;
    }

    public function setImageSize1(?int $imageSize): void
    {
        $this->imageSize1 = $imageSize;
    }

    public function getImageSize1(): ?int
    {
        return $this->imageSize1;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile2(?File $imageFile = null): void
    {
        $this->imageFile2 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile2(): ?File
    {
        return $this->imageFile2;
    }

    public function setImageName2(?string $imageName): void
    {
        $this->imageName2 = $imageName;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImageSize2(?int $imageSize): void
    {
        $this->imageSize2 = $imageSize;
    }

    public function getImageSize2(): ?int
    {
        return $this->imageSize2;
    }

    public function setUpdatedAt(\DateTimeImmutable $date): DualImageCaptionBlock
    {
        $this->updatedAt = $date;
        return $this;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function getCaption1(): ?string
    {
        return $this->caption1;
    }

    public function setCaption1(string $caption1): self
    {
        $this->caption1 = $caption1;

        return $this;
    }

    public function getCaption2(): ?string
    {
        return $this->caption2;
    }

    public function setCaption2(?string $caption2): self
    {
        $this->caption2 = $caption2;

        return $this;
    }
}
