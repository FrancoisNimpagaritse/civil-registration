<?php

namespace App\Form;

use App\Entity\Mariage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

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
            ->add('photoPreuve')
            ->add('personneEpoux')
            ->add('personneEpouse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mariage::class,
        ]);
    }
}
