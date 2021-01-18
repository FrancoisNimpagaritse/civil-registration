<?php

namespace App\Form;

use App\Entity\Demande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDemande', DateType::class, [
                'label' => 'Date de la demande',
                'widget' =>'single_text'
            ])
            ->add('lieuDemande')
            ->add('fraisTotalDemande')
            ->add('numeroRecuPaiement')
            ->add('statusDemande')
            ->add('personne')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}