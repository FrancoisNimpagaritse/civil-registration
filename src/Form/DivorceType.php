<?php

namespace App\Form;

use App\Entity\Divorce;
use App\Entity\Mariage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DivorceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDivorce', DateType::class, [
                'label' =>  'Date divorce',
                'widget' => 'single_text',
                'attr'  => [
                    
                    ]
                ])
            ->add('lieuDecisionDivorce', TextType::class, [
                'label' =>  'Lieu de divorce',
                'attr'  => [
                    'placeholder' => 'Commune où le jugement a été rendu'
                    ]
                ])
            ->add('nombreEnfantsIssusMariage', TextType::class, [
                'label' =>  "Nombre d'enfants",
                'attr'  => [
                    'placeholder' => "Nombre d'enfants issus de ce mariage"
                    ]
                ])
            ->add('professionEpoux', TextType::class, [
                'label' =>  "Profession époux",
                'attr'  => [
                    'placeholder' => "Profession de l'époux"
                    ]
                ])
            ->add('professionEpouse', TextType::class, [
                'label' =>  "Profession épouse",
                'attr'  => [
                    'placeholder' => "Profession de l'épouse"
                    ]
                ])
            ->add('mariage', EntityType::class, [
                'class' => Mariage::class,
                'placeholder' => '-- Choix couple --',
                'attr' => [
                    'class' => 'select2'
                ]
            ])
            ->add('referenceDecisionDivorce', TextType::class, [
                'label' =>  "Référence décision justice",
                'attr'  => [
                    'placeholder' => "Une référence de décision de justice"
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
            'data_class' => Divorce::class,
        ]);
    }
}
