<?php

namespace App\Form\Page;

use App\Entity\Page\EmpathyMapBlock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpathyMapBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title1', TextType::class, [
                "label" => "Titre du bloc du haut"
            ])
            ->add('content1', TextareaType::class, [
                "label" => "Contenu du bloc du haut"
            ])
            ->add('title2', TextType::class, [
                "label" => "Titre du bloc premier bloc de gauche"
            ])
            ->add('content2', TextareaType::class, [
                "label" => "Contenu du bloc premier bloc de gauche"
            ])
            ->add('title3', TextType::class, [
                "label" => "Titre du bloc premier bloc de droite"
            ])
            ->add('content3', TextareaType::class, [
                "label" => "Contenu du bloc premier bloc de droite"
            ])
            ->add('title4', TextType::class, [
                "label" => "Titre du bloc deuxième bloc de gauche"
            ])
            ->add('content4', TextareaType::class, [
                "label" => "Contenu du bloc deuxième bloc de gauche"
            ])
            ->add('title5', TextType::class, [
                "label" => "Titre du bloc deuxième bloc de droite"
            ])
            ->add('content5', TextareaType::class, [
                "label" => "Contenu du bloc deuxième bloc de droite"
            ])
            ->add('title6', TextType::class, [
                "label" => "Titre du bloc troisième bloc de gauche"
            ])
            ->add('content6', TextareaType::class, [
                "label" => "Contenu du bloc troisième bloc de gauche"
            ])
            ->add('title7', TextType::class, [
                "label" => "Titre du bloc 7 troisième bloc de droite"
            ])
            ->add('content7', TextareaType::class, [
                "label" => "Contenu du bloc 7 troisième bloc de droite"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EmpathyMapBlock::class,
        ]);
    }
}
