<?php

namespace App\Form;

use App\Entity\Commune;
use App\Entity\Personne;
use App\Entity\Province;
use App\Repository\ProvinceRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonneType extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', DateType::class, [
                'label' =>  'Né le',
                'widget' => 'single_text',
                'attr'  => [
                    'placeholder' => 'Date de naissance de la personne'
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
                'placeholder' => 'Province natale...',
                'class' => Province::class
                ]) 
            ->add('paysNaissance')
            ->add('statusVital')
            ->add('sexe')
            ->add('collineResidence')
            ->add('zoneResidence')
            ->add('communeResidence')
            ->add('provinceResidence', EntityType::class, [
                'label' => 'Réside en province',
                'class' => Province::class
                ])
            ->add('nationalite')
            ->add('numeroCarteNationaleIdentite', TextType::class, [
                'label' =>  'N° CNI',
                'attr'  => [
                    'placeholder' => 'Numéro CNI'
                    ]
                ])
            ->add('profession')
            ->add('photo')
            ->add('pin')
            ->add('pere')
            ->add('mere')
        ;                
    }
    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
