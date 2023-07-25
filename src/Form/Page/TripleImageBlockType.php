<?php

namespace App\Form\Page;

use App\Entity\Page\TripleImageBlock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TripleImageBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
            'data_class' => TripleImageBlock::class,
        ]);
    }
}
