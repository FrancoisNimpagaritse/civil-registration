<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('communeNaissance')
            ->add('provinceNaissance')
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
            ->add('communeNaissancePere')
            ->add('provinceNaissancePere')
            ->add('paysNaissancePere')
            ->add('statusVitalPere')
            ->add('sexePere')
            ->add('collineResidencePere')
            ->add('zoneResidencePere')
            ->add('communeResidencePere')
            ->add('provinceResidencePere')
            ->add('nationalitePere')
            ->add('professionPere')
            ->add('photoPere')
            ->add('pinPere')
            ->add('nomMere')
            ->add('prenomMere')
            ->add('dateNaissanceMere', DateType::class, [
                'label' =>  'Né le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date de naissance de l\'enfant'
                    ]
                ])
            ->add('collineNaissanceMere')
            ->add('zoneNaissanceMere')
            ->add('communeNaissanceMere')
            ->add('provinceNaissanceMere')
            ->add('paysNaissanceMere')
            ->add('statusVitalMere')
            ->add('sexeMere')
            ->add('collineResidenceMere')
            ->add('zoneResidenceMere')
            ->add('communeResidenceMere')
            ->add('provinceResidenceMere')
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
