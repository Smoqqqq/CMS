<?php

namespace App\Form\Page;

use App\Entity\Page\PersonaBlock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PersonaBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title1', TextType::class, [
                "label" => "Titre du bloc sous la photo"
            ])
            ->add('title2', TextType::class, [
                "label" => "Titre du bloc en haut a droite"
            ])
            ->add('title3', TextType::class, [
                "label" => "Titre du deuxième bloc a droite"
            ])
            ->add('title4', TextType::class, [
                "label" => "Titre du troisième bloc à droite"
            ])
            ->add('title5', TextType::class, [
                "label" => "Titre du bloc en bas à droite"
            ])
            ->add('content1', TextareaType::class, [
                "label" => "Contenu du bloc sous la photo"
            ])
            ->add('content2', TextareaType::class, [
                "label" => "Contenu du bloc en haut a droite"
            ])
            ->add('content3', TextareaType::class, [
                "label" => "Contenu du deuxième bloc a droite"
            ])
            ->add('content4', TextareaType::class, [
                "label" => "Contenu du troisième bloc à droite"
            ])
            ->add('content5', TextareaType::class, [
                "label" => "Contenu du bloc en bas à droite"
            ])
            ->add('imageFile', VichImageType::class, [
                "label" => "Image",
                "required" => false
            ])
            ->add('citation', TextType::class, [
                "label" => "Citation (texte seul en bas à gauche)"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PersonaBlock::class,
        ]);
    }
}
