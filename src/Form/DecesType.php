<?php

namespace App\Form;

use App\Entity\Deces;
use App\Entity\EnumCauseDeces;
use App\Entity\Personne;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DecesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDeces', DateType::class, [
                'label' =>  'Décédé le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date de décès'
                    ]
                ])
            ->add('lieuDeces', TextType::class, [
                'label' =>  'Lieu de décès',
                'attr'  => [
                    'placeholder' => 'Lieu de décès'
                    ]
                ])
            ->add('causeDeces', EntityType::class, [
                'label' => 'Causedu décès ',
                'placeholder' => '-- Choix cause --',
                'class' => EnumCauseDeces::class
                ])
            ->add('nomCompletDemandeur', TextType::class, [
                'label' =>  'Noms complets du demandeur',
                'attr'  => [
                    'placeholder' => 'Nom et prénom du demandeur'
                    ]
                ])
            ->add('adresseDemandeur', TextType::class, [
                'label' =>  'Adresse demandeur',
                'attr'  => [
                    'placeholder' => 'Adresse de résidence demandeur'
                    ]
                ])
            ->add('phoneDemandeur', TextType::class, [
                'label' =>  'Téléphones demandeur',
                'attr'  => [
                    'placeholder' => 'Numéros de téléphones demandeur'
                    ]
                ])
            ->add('copieCertificatDeces')
            ->add('numeroActeDeces', TextType::class, [
                'label' =>  'N° Acte',
                'attr'  => [
                    'placeholder' => "Numéro de l'acte de décès"
                    ]
                ])
            ->add('numeroVolume', TextType::class, [
                'label' =>  'N° Volume',
                'attr'  => [
                    'placeholder' => 'Numéro du volume de décès'
                    ]
                ])
            ->add('personne', EntityType::class, [
                'label' => 'Personne décédée',
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
            'data_class' => Deces::class,
        ]);
    }
}
