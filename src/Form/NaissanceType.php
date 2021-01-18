<?php

namespace App\Form;

use App\Entity\Naissance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NaissanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('collineNaissance')
            ->add('zoneNaissance')
            ->add('communeNaissance')
            ->add('provinceNaissance')
            ->add('paysNaissance')
            ->add('dateInscription')
            ->add('adressePere')
            ->add('professionMere')
            ->add('adresseMere')
            ->add('numeroActeNaissance')
            ->add('numeroVolume')
            ->add('nomCompletTemoinUn')
            ->add('adresseTemoinUn')
            ->add('professionTemoinUn')
            ->add('nomCompletTemoinDeux')
            ->add('adresseTemoinDeux')
            ->add('professionTemoinDeux')
            ->add('personne')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Naissance::class,
        ]);
    }
}
