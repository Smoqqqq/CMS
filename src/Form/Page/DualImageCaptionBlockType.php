<?php

namespace App\Form\Page;

use Symfony\Component\Form\AbstractType;
use App\Entity\Page\DualImageCaptionBlock;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DualImageCaptionBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('caption1', TextType::class, [
                "label" => "Légende pour l'image de gauche"
            ])
            ->add('caption2', TextType::class, [
                "label" => "Légende pour l'image de droite"
            ])
            ->add('imageFile1', VichImageType::class, [
                "label" => "Image de gauche",
                "required" => false
            ])
            ->add('imageFile2', VichImageType::class, [
                "label" => "Image de droite",
                "required" => false
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DualImageCaptionBlock::class,
        ]);
    }
}
