<?php

namespace App\Form;

use App\Entity\Demande;
use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
            ->add('numeroRecuPaiement')
            ->add('statusDemande')
            ->add('personne', EntityType::class, [
                'label' => 'Personne demandeur',
                'class' => Personne::class,
                'placeholder' => '-- Choix personne --',
                'attr' => [
                    'class' => 'select2'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
        ]);
    }
}
