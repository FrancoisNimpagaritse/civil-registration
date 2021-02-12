<?php

namespace App\Form;

use App\Entity\Genre;
use App\Entity\Commune;
use App\Entity\Personne;
use App\Entity\Province;
use App\Entity\Naissance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NaissanceType extends AbstractType
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
            ->add('naissanceImageFile', FileType::class, [
                'label' =>  'Fichier copie intégrale',
                'required' => false
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
            ->add('personneMere', EntityType::class, [
                'label' => 'Sa mère',
                'class' =>  Personne::class
            ])
    
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Naissance::class,
        ]);
    }
}
