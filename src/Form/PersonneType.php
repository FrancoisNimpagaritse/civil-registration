<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('collineNaissance')
            ->add('zoneNaissance')
            ->add('communeNaissance')
            ->add('provinceNaissance')
            ->add('paysNaissance')
            ->add('statusVital')
            ->add('sexe')
            ->add('collineResidence')
            ->add('zoneResidence')
            ->add('communeResidence')
            ->add('provinceResidence')
            ->add('nationalite')
            ->add('numeroCarteNationaleIdentite')
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
