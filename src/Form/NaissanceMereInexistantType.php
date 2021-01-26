<?php

namespace App\Form;

use App\Entity\Genre;
use App\Entity\Commune;
use App\Entity\Personne;
use App\Entity\Province;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NaissanceMereInexistantType extends AbstractType
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
            ->add('paysNaissance', TextType::class, [
                'label' =>  "Pays naissance",
                'attr'  => [
                    'placeholder' => "Pays où l'enfant est né si autre que Burundi",
                    ]
                ])
            ->add('statusVital')
            ->add('sexe', EntityType::class, [
                'label' => 'Sexe',
                'class' => Genre::class,
                'expanded' => true,
                'multiple' => false
                ])
            ->add('dateInscription', DateType::class, [
                'label' =>  'Enregistré le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date enregistrement'
                    ]
                ])
            ->add('numeroActeNaissance', TextType::class, [
                'label' =>  "N° Acte de naissance",
                'attr'  => [
                    'placeholder' => "N° de l'acte de naissance"
                    ]
                ])
            ->add('numeroVolume', TextType::class, [
                'label' =>  "N° Volume",
                'attr'  => [
                    'placeholder' => "N° volume"
                    ]
                ])
            ->add('nomCompletTemoinUn', TextType::class, [
                'label' =>  "Noms témoin 1",
                'attr'  => [
                    'placeholder' => "Nom et prénoms du témoin n° 1 ..."
                    ]
                ])
            ->add('adresseTemoinUn', TextType::class, [
                'label' =>  "Adresse témoin 1",
                'attr'  => [
                    'placeholder' => "Adresse complète du témoin n° 1 ..."
                    ]
                ])
            ->add('professionTemoinUn', TextType::class, [
                'label' =>  "Profession témoin 1",
                'attr'  => [
                    'placeholder' => "Profession du témoin n° 1 ..."
                    ]
                ])
            ->add('nomCompletTemoinDeux', TextType::class, [
                'label' =>  "Noms témoin 2",
                'attr'  => [
                    'placeholder' => "Nom et prénoms du témoin n° 2 ..."
                    ]
                ])
            ->add('adresseTemoinDeux', TextType::class, [
                'label' =>  "Adresse témoin 2",
                'attr'  => [
                    'placeholder' => "Adresse complète du témoin n° 2 ..."
                    ]
                ])
            ->add('professionTemoinDeux', TextType::class, [
                'label' =>  "Profession témoin 2",
                'attr'  => [
                    'placeholder' => "Profession du témoin n° 2 ..."
                    ]
                ])

            ->add('personnePere', EntityType::class, [
                    'label' => 'Son père',
                    'class' =>  Personne::class
                ])

            ->add('nomMere', TextType::class, [
                'label' =>  "Nom ",
                'attr'  => [
                    'placeholder' => "Nom de la mère"
                    ]
                ])
            ->add('prenomMere', TextType::class, [
                'label' =>  "Prénom",
                'attr'  => [
                    'placeholder' => "Prénom de mère"
                    ]
                ])
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
            ->add('paysNaissanceMere', TextType::class, [
                'label' =>  "Pays de naissance",
                'attr'  => [
                    'placeholder' => "Pays de naissance de la mère"
                    ]
                ])
            ->add('statusVitalMere', TextType::class, [
                'label' =>  "Status vital",
                'attr'  => [
                    'placeholder' => "Status vital de la mère"
                    ]
                ])
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
            ->add('nationaliteMere', TextType::class, [
                'label' =>  "Nationalité",
                'attr'  => [
                    'placeholder' => "Nationalité de mère"
                    ]
                ])
            ->add('professionMere', TextType::class, [
                'label' =>  "Profession",
                'attr'  => [
                    'placeholder' => "Profession de mère"
                    ]
                ])
            ->add('photoMere', TextType::class, [
                'label' =>  "Photo",
                'required' => false,
                'attr'  => [
                    'placeholder' => "Photo de mère"
                    ]
                ])
            ->add('pinMere', TextType::class, [
                'label' =>  "PIN",
                'required' => false,
                'attr'  => [
                    'placeholder' => "PIN de la mère"
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
