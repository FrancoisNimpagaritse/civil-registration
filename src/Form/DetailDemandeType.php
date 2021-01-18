<?php

namespace App\Form;

use App\Entity\DetailDemande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DetailDemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('document', EntityType::class, [
            'label' => 'Documment',
            'class' => Document::class
            ])
        ->add('fraisUnitaire')
        ->add('quantite')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DetailDemande::class,
        ]);
    }
}
