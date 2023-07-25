<?php

namespace App\Form\Page;

use App\Entity\Page\DualImageBlock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class DualImageBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile1', VichImageType::class, [
                "label" => "Image de gauche",
                "required" => false
            ])
            ->add('imageFile2', VichImageType::class, [
                "label" => "Image de droite",
                "required" => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DualImageBlock::class,
        ]);
    }
}
