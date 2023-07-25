<?php

namespace App\Form\Page;

use App\Entity\Page\Moodboard1Block;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class Moodboard1BlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile1', VichImageType::class, [
                "label" => "Première image colonne de gauche",
                "required" => false
            ])
            ->add('imageFile2', VichImageType::class, [
                "label" => "Deuxième image colonne gauche",
                "required" => false
            ])
            ->add('imageFile3', VichImageType::class, [
                "label" => "Troisième image colonne de gauche",
                "required" => false
            ])
            ->add('imageFile4', VichImageType::class, [
                "label" => "Première image colonne de centrale",
                "required" => false
            ])
            ->add('imageFile5', VichImageType::class, [
                "label" => "Deuxième image colonne centrale",
                "required" => false
            ])
            ->add('imageFile6', VichImageType::class, [
                "label" => "Troisième image colonne de centrale",
                "required" => false
            ])
            ->add('imageFile7', VichImageType::class, [
                "label" => "Quatrième image colonne centrale",
                "required" => false
            ])
            ->add('imageFile8', VichImageType::class, [
                "label" => "Première image colonne de droite",
                "required" => false
            ])
            ->add('imageFile9', VichImageType::class, [
                "label" => "Deuxième image colonne droite",
                "required" => false
            ])
            ->add('imageFile10', VichImageType::class, [
                "label" => "Dernière image colonne de droite",
                "required" => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Moodboard1Block::class,
        ]);
    }
}
