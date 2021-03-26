<?php

namespace App\Form;

use App\Entity\Mariage;
use App\Entity\Personne;
use App\Entity\EnumContratMariage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class MariageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateMariage', DateType::class, [
                'label' =>  'Date mariage',
                'widget' => 'single_text',
                'attr'  => [
                    
                    ]
                ])
            ->add('communeMariage')
            ->add('provinceMariage')
            ->add('collineResidenceEpoux')
            ->add('collineResidenceEpouse')
            ->add('ZoneResidenceEpoux')
            ->add('zoneResidenceEpouse')
            ->add('communeResidenceEpoux')
            ->add('communeResidenceEpouse')
            ->add('provinceResidenceEpoux')
            ->add('provinceResidenceEpouse')
            ->add('occupationEpoux')
            ->add('occupationEpouse')
            ->add('numeroActeMariage')
            ->add('numeroVolume')
            ->add('nomCompletPereEpoux')
            ->add('nomCompletMereEpoux')
            ->add('nomCompletPereEpouse')
            ->add('nomCompletMereEpouse')
            ->add('nomCompletTemoinEpoux')
            ->add('nomCompletTemoinEpouse')
            ->add('adresseTemoinEpoux')
            ->add('adresseTemoinEpouse')
            ->add('professionTemoinEpoux')
            ->add('professionTemoinEpouse')
            ->add('personneEpoux', EntityType::class, [
                'label' => "L'époux",
                'class' =>  Personne::class,
                'placeholder' => '-- Choix époux --',
                'attr' => [
                    'class' => 'select2'
                ]
            ])
            ->add('personneEpouse', EntityType::class, [
                'label' => "L'épouse",
                'class' =>  Personne::class,
                'placeholder' => '-- Choix épouse --',
                'attr' => [
                    'class' => 'select2'
                ]
            ])
            ->add('typeContrat', EntityType::class, [
                'label' => "Type contrat mariage",
                'class' =>  EnumContratMariage::class,
                'placeholder' => '-- Type contrat --'                
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
            'data_class' => Mariage::class,
        ]);
    }
}
