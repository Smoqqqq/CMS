<?php

namespace App\Form\Page;

use Symfony\Component\Form\AbstractType;
use App\Entity\Page\DualImageTitleBlock;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DualImageTitleBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title1', TextType::class, [
                "label" => "Titre de gauche"
            ])
            ->add('title2', TextType::class, [
                "label" => "Titre de droite"
            ])
            ->add('imageFile1', VichImageType::class, [
                "label" => "Image de gauche",
                "required" => false
            ])
            ->add('imageFile2', VichImageType::class, [
                "label" => "Image de droite",
                "required" => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DualImageTitleBlock::class,
        ]);
    }
}
