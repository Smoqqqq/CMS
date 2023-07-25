<?php

namespace App\Form\Page;

use App\Entity\Page\DualTextBlock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DualTextBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title1', TextType::class, [
                "label" => "Titre bloc de gauche"
            ])
            ->add('content1', TextareaType::class, [
                "label" => "Contenu bloc de gauche",
                "required" => false,
                "attr" => [
                    "class" => "tinymce"
                ]
            ])
            ->add('title2', TextType::class, [
                "label" => "Titre bloc de droite"
            ])
            ->add('content2', TextareaType::class, [
                "label" => "Contenu bloc de droite",
                "required" => false,
                "attr" => [
                    "class" => "tinymce"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DualTextBlock::class,
        ]);
    }
}
