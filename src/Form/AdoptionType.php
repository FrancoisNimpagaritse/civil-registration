<?php

namespace App\Form;

use App\Entity\Adoption;
use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AdoptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAdoption', DateType::class, [
                'label' => "Date d'adoption",
                'widget' =>'single_text'
            ])
            ->add('status')
            ->add('pereAdoptif', EntityType::class, [
                'class' => Personne::class,
                'placeholder' => '-- Choix père --',
                'attr' => [
                    'class' => 'select2'
                ]
            ])
            ->add('mereAdoptif', EntityType::class, [
                'class' => Personne::class,
                'placeholder' => '-- Choix mère --',
                'attr' => [
                    'class' => 'select2'
                ]
            ])
            ->add('enfantAdopte', EntityType::class, [
                'class' => Personne::class,
                'placeholder' => '-- Choix enfant --',
                'attr' => [
                    'class' => 'select2'
                ]
            ]) 
            ->add('imageFile', FileType::class, [
                'label' =>  'Copie intégrale',
                'required' => false
            ])           
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adoption::class,
        ]);
    }
}
