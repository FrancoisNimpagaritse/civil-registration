<?php

namespace App\Form;

use App\Entity\Commune;
use App\Entity\Province;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NaissancePereMereInexistantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomEnfant', TextType::class, [
            'label' =>  "Nom de l'enfant",
            'attr'  => [
                'placeholder' => "Nom donné à l'enfant"
                ]
            ])
        ->add('prenomEnfant', TextType::class, [
            'label' =>  "Prénoms de l'enfant",
            'attr'  => [
                'placeholder' => "Prénoms donnés à l'enfant"
                ]
            ])
            ->add('dateNaissance', DateType::class, [
                'label' =>  'Né le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date de naissance de l\'enfant'
                    ]
                ])
            ->add('lieuNaissance', TextType::class, [
                'label' =>  'Lieu de naissance',
                'attr'  => [
                    'placeholder' => 'Lieu de naissance'
                    ]
                ])
            ->add('collineNaissance')
            ->add('zoneNaissance')
            ->add('communeNaissance', EntityType::class, [
                'label' => 'Né en commune',
                'class' => Commune::class
                ])
            ->add('provinceNaissance', EntityType::class, [
                'label' => 'Né en province',
                'class' => Province::class
                ])
            ->add('paysNaissance')
            ->add('statusVital')
            ->add('sexe')
            ->add('dateInscription', DateType::class, [
                'label' =>  'Enregistré le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date enregistrement'
                    ]
                ])
            ->add('numeroActeNaissance')
            ->add('numeroVolume')
            ->add('nomCompletTemoinUn')
            ->add('adresseTemoinUn')
            ->add('professionTemoinUn')
            ->add('nomCompletTemoinDeux')
            ->add('adresseTemoinDeux')
            ->add('professionTemoinDeux')

            ->add('nomPere')
            ->add('prenomPere')
            ->add('dateNaissancePere', DateType::class, [
                'label' =>  'Né le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date de naissance de l\'enfant'
                    ]
                ])
            ->add('collineNaissancePere')
            ->add('zoneNaissancePere')
            ->add('communeNaissancePere', EntityType::class, [
                'label' => 'Né en commune',
                'class' => Commune::class
                ])
            ->add('provinceNaissancePere', EntityType::class, [
                'label' => 'Né en province',
                'class' => Province::class
                ])
            ->add('paysNaissancePere')
            ->add('statusVitalPere')
            ->add('sexePere')
            ->add('collineResidencePere')
            ->add('zoneResidencePere')
            ->add('communeResidencePere', EntityType::class, [
                'label' => 'Réside en commune',
                'class' => Commune::class
                ])
            ->add('provinceResidencePere', EntityType::class, [
                'label' => 'Réside en province',
                'class' => Province::class
                ])
            ->add('nationalitePere')
            ->add('professionPere')
            ->add('photoPere')
            ->add('pinPere')
            ->add('nomMere')
            ->add('prenomMere')
            ->add('dateNaissanceMere', DateType::class, [
                'label' =>  'Née le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date de naissance de l\'enfant'
                    ]
                ])
            ->add('collineNaissanceMere')
            ->add('zoneNaissanceMere')
            ->add('communeNaissanceMere', EntityType::class, [
                'label' => 'Née en commune',
                'class' => Commune::class
                ])
            ->add('provinceNaissanceMere', EntityType::class, [
                'label' => 'Née en province',
                'class' => Province::class
                ])
            ->add('paysNaissanceMere')
            ->add('statusVitalMere')
            ->add('sexeMere')
            ->add('collineResidenceMere')
            ->add('zoneResidenceMere')
            ->add('communeResidenceMere', EntityType::class, [
                'label' => 'Réside en commune',
                'class' => Commune::class
                ])
            ->add('provinceResidenceMere', EntityType::class, [
                'label' => 'Réside en province',
                'class' => Province::class
                ])
            ->add('nationaliteMere')
            ->add('professionMere')
            ->add('photoMere')
            ->add('pinMere')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
