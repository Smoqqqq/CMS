<?php

namespace App\Form\Page;

use Symfony\Component\Form\AbstractType;
use App\Entity\Page\TripleImageCaptionBlock;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TripleImageCaptionBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('caption1', TextType::class, [
                "label" => "Légende 1"
            ])
            ->add('caption2', TextType::class, [
                "label" => "Légende 2"
            ])
            ->add('caption3', TextType::class, [
                "label" => "Légende 3"
            ])
            ->add('imageFile1', VichImageType::class, [
                "label" => "Image de gauche",
                "required" => false
            ])
            ->add('imageFile2', VichImageType::class, [
                "label" => "Image du milieu",
                "required" => false
            ])
            ->add('imageFile3', VichImageType::class, [
                "label" => "Image de droite",
                "required" => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TripleImageCaptionBlock::class,
        ]);
    }
}
