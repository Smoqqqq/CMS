<?php

namespace App\Form\Page\Row;

use App\Entity\Page\Row\RowBlock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RowBlockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('columns', CollectionType::class, [
            "label" => "Colonnes",
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
            'data_class' => RowBlock::class,
        ]);
    }
}
