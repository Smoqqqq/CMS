<?php

namespace App\Form\RecurrentBlock;

use App\Entity\RecurrentBlock\NavbarBlock;
use Symfony\Component\Form\AbstractType;
use App\Form\RecurrentBlock\NavbarLinkType;
use App\Form\RecurrentBlockType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;

class NavbarBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('linkAlignment', ChoiceType::class, [
                "label" => "Alignement des liens",
                "choices" => [
                    "Gauche" => "flex-start",
                    "Droite" => "flex-end"
                ]
            ])
            ->add('backgroundColor', ColorType::class, [
                "label" => "Couleur de fond",
                "required" => false,
            ])
            ->add('block', RecurrentBlockType::class, [
                "label" => false
            ])
            ->add('links', CollectionType::class, [
                "label" => "Liens",
                "entry_type" => NavbarLinkType::class,
                "entry_options" => [
                    "label" => false
                ],
                "label" => false,
                "allow_add" => true,
                "by_reference" => false,
                "allow_delete" => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NavbarBlock::class,
        ]);
    }
}
