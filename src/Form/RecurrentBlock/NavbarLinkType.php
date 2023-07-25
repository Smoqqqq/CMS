<?php

namespace App\Form\RecurrentBlock;

use App\Entity\Page;
use App\Entity\RecurrentBlock\NavbarLink;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NavbarLinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                "label" => "Texte du lien"
            ])
            ->add('page', EntityType::class, [
                "label" => "Lien vers la page",
                "class" => Page::class,
                "choice_label" => "name"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NavbarLink::class,
        ]);
    }
}
