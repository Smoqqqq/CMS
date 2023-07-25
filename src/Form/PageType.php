<?php

namespace App\Form;

use App\Entity\Page;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "label" => "Nom de la page",
                "attr" => [
                    "placeholder" => "Mara"
                ]
            ])
            ->add('description', TextareaType::class, [
                "label" => "Description de la page",
                "attr" => [
                    "placeholder" => "Identité visuelle • Logo • Webdesign"
                ]
            ])
            ->add('url', TextType::class, [
                "label" => "Url de la page",
                "attr" => [
                    "placeholder" => "culture-du-design"
                ],
                "required" => false
            ])
            ->add('metaTitle', TextType::class, [
                "label" => "Meta title",
                "attr" => [
                    "placeholder" => "culture-du-design"
                ]
            ])
            ->add('metaKeywords', TextType::class, [
                "label" => "Meta keywords",
                "attr" => [
                    "placeholder" => "design"
                ]
            ])
            ->add('metaKeywords', TextareaType::class, [
                "label" => "Meta description",
                "attr" => [
                    "placeholder" => "Découvrez mon page ..."
                ]
            ])
            ->add('active', CheckboxType::class, [
                "label" => "Afficher le page dans le front",
                "required" => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
        ]);
    }
}
