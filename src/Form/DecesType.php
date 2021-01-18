<?php

namespace App\Form;

use App\Entity\Deces;
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
            ->add('causeDeces')
            ->add('nomCompletDemandeur')
            ->add('adresseDemandeur')
            ->add('phoneDemandeur')
            ->add('copieCertificatDeces')
            ->add('numeroActeDeces')
            ->add('numeroVolume')
            ->add('personne', EntityType::class, [
                'class' => Personne::class
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
