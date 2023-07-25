<?php

namespace App\Entity\Page;

use App\Form\Page\Moodboard1BlockType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use App\Repository\Page\Moodboard1BlockRepository;

#[ORM\Entity(repositoryClass: Moodboard1BlockRepository::class)]
#[Vich\Uploadable]
class Moodboard1Block
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $template = "moodboard-1";

    #[ORM\Column(length: 255)]
    private ?string $name = "Moodboard 1";

    #[ORM\Column(length: 255)]
    private ?string $image1 = null;

    #[ORM\Column(length: 255)]
    private ?string $image2 = null;

    #[ORM\Column(length: 255)]
    private ?string $image3 = null;

    #[ORM\Column(length: 255)]
    private ?string $image4 = null;

    #[ORM\Column(length: 255)]
    private ?string $image5 = null;

    #[ORM\Column(length: 255)]
    private ?string $image6 = null;

    #[ORM\Column(length: 255)]
    private ?string $image7 = null;

    #[ORM\Column(length: 255)]
    private ?string $image8 = null;

    #[ORM\Column(length: 255)]
    private ?string $image9 = null;

    #[ORM\Column(length: 255)]
    private ?string $image10 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image1', size: 'imageSize1')]
    private ?File $imageFile1 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize1 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image2', size: 'imageSize2')]
    private ?File $imageFile2 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize2 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image3', size: 'imageSize3')]
    private ?File $imageFile3 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName3 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize3 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image4', size: 'imageSize4')]
    private ?File $imageFile4 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName4 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize4 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image5', size: 'imageSize5')]
    private ?File $imageFile5 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName5 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize5 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image6', size: 'imageSize6')]
    private ?File $imageFile6 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName6 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize6 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image7', size: 'imageSize7')]
    private ?File $imageFile7 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName7 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize7 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image8', size: 'imageSize8')]
    private ?File $imageFile8 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName8 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize8 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image9', size: 'imageSize9')]
    private ?File $imageFile9 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName9 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize9 = null;

    // NOTE: This is not a mapped field of entity metadata, just a simple property.
    #[Vich\UploadableField(mapping: 'moodboard_1_block', fileNameProperty: 'image10', size: 'imageSize10')]
    private ?File $imageFile10 = null;

    #[ORM\Column(nullable: true)]
    private ?string $imageName10 = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize10 = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getBlockType(): string {
        return Moodboard1BlockType::class;
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

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(string $image): self
    {
        $this->image1 = $image;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getImage4(): ?string
    {
        return $this->image4;
    }

    public function setImage4(string $image4): self
    {
        $this->image4 = $image4;

        return $this;
    }

    public function getImage5(): ?string
    {
        return $this->image5;
    }

    public function setImage5(string $image5): self
    {
        $this->image5 = $image5;

        return $this;
    }

    public function getImage6(): ?string
    {
        return $this->image6;
    }

    public function setImage6(string $image6): self
    {
        $this->image6 = $image6;

        return $this;
    }

    public function getImage7(): ?string
    {
        return $this->image7;
    }

    public function setImage7(string $image7): self
    {
        $this->image7 = $image7;

        return $this;
    }

    public function getImage8(): ?string
    {
        return $this->image8;
    }

    public function setImage8(string $image8): self
    {
        $this->image8 = $image8;

        return $this;
    }

    public function getImage9(): ?string
    {
        return $this->image9;
    }

    public function setImage9(string $image9): self
    {
        $this->image9 = $image9;

        return $this;
    }

    public function getImage10(): ?string
    {
        return $this->image10;
    }

    public function setImage10(string $image10): self
    {
        $this->image10 = $image10;

        return $this;
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

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile3(?File $imageFile = null): void
    {
        $this->imageFile3 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile3(): ?File
    {
        return $this->imageFile3;
    }

    public function setImageName3(?string $imageName): void
    {
        $this->imageName3 = $imageName;
    }

    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function setImageSize3(?int $imageSize): void
    {
        $this->imageSize3 = $imageSize;
    }

    public function getImageSize3(): ?int
    {
        return $this->imageSize3;
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
    public function setImageFile4(?File $imageFile = null): void
    {
        $this->imageFile4 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile4(): ?File
    {
        return $this->imageFile4;
    }

    public function setImageName4(?string $imageName): void
    {
        $this->imageName4 = $imageName;
    }

    public function getImageName4(): ?string
    {
        return $this->imageName4;
    }

    public function setImageSize4(?int $imageSize): void
    {
        $this->imageSize4 = $imageSize;
    }

    public function getImageSize4(): ?int
    {
        return $this->imageSize4;
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
    public function setImageFile5(?File $imageFile = null): void
    {
        $this->imageFile5 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile5(): ?File
    {
        return $this->imageFile5;
    }

    public function setImageName5(?string $imageName): void
    {
        $this->imageName5 = $imageName;
    }

    public function getImageName5(): ?string
    {
        return $this->imageName5;
    }

    public function setImageSize5(?int $imageSize): void
    {
        $this->imageSize5 = $imageSize;
    }

    public function getImageSize5(): ?int
    {
        return $this->imageSize5;
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
    public function setImageFile6(?File $imageFile = null): void
    {
        $this->imageFile6 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile6(): ?File
    {
        return $this->imageFile6;
    }

    public function setImageName6(?string $imageName): void
    {
        $this->imageName6 = $imageName;
    }

    public function getImageName6(): ?string
    {
        return $this->imageName6;
    }

    public function setImageSize6(?int $imageSize): void
    {
        $this->imageSize6 = $imageSize;
    }

    public function getImageSize6(): ?int
    {
        return $this->imageSize6;
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
    public function setImageFile7(?File $imageFile = null): void
    {
        $this->imageFile7 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile7(): ?File
    {
        return $this->imageFile7;
    }

    public function setImageName7(?string $imageName): void
    {
        $this->imageName7 = $imageName;
    }

    public function getImageName7(): ?string
    {
        return $this->imageName7;
    }

    public function setImageSize7(?int $imageSize): void
    {
        $this->imageSize7 = $imageSize;
    }

    public function getImageSize7(): ?int
    {
        return $this->imageSize7;
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
    public function setImageFile8(?File $imageFile = null): void
    {
        $this->imageFile8 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile8(): ?File
    {
        return $this->imageFile8;
    }

    public function setImageName8(?string $imageName): void
    {
        $this->imageName8 = $imageName;
    }

    public function getImageName8(): ?string
    {
        return $this->imageName8;
    }

    public function setImageSize8(?int $imageSize): void
    {
        $this->imageSize8 = $imageSize;
    }

    public function getImageSize8(): ?int
    {
        return $this->imageSize8;
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
    public function setImageFile9(?File $imageFile = null): void
    {
        $this->imageFile9 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile9(): ?File
    {
        return $this->imageFile9;
    }

    public function setImageName9(?string $imageName): void
    {
        $this->imageName9 = $imageName;
    }

    public function getImageName9(): ?string
    {
        return $this->imageName9;
    }

    public function setImageSize9(?int $imageSize): void
    {
        $this->imageSize9 = $imageSize;
    }

    public function getImageSize9(): ?int
    {
        return $this->imageSize9;
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
    public function setImageFile10(?File $imageFile = null): void
    {
        $this->imageFile10 = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile10(): ?File
    {
        return $this->imageFile10;
    }

    public function setImageName10(?string $imageName): void
    {
        $this->imageName10 = $imageName;
    }

    public function getImageName10(): ?string
    {
        return $this->imageName10;
    }

    public function setImageSize10(?int $imageSize): void
    {
        $this->imageSize10 = $imageSize;
    }

    public function getImageSize10(): ?int
    {
        return $this->imageSize10;
    }

    public function setUpdatedAt(\DateTimeImmutable $date): Moodboard1Block
    {
        $this->updatedAt = $date;
        return $this;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
