<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Commune;
use App\Entity\Province;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' =>  'Nom',
                'attr'  => [
                    'placeholder' => 'Votre nom de famille ...'
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' =>  'Prénom',
                'attr'  => [
                    'placeholder' => 'Votre prénom ...'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' =>  'Adresse email',
                'attr'  => [
                    'placeholder' => 'Votre adresse email ...'
                ]
            ])
            ->add('hash', PasswordType::class, [
                'label' =>  'Mot de passe',
                'attr'  => [
                    'placeholder' => 'Créez un mot de passe fort ...'
                ]
            ])
            ->add('commune', EntityType::class, [
                'label' => 'Commune',
                'class' => Commune::class
                ])
            ->add('province', EntityType::class, [
                'label' => 'Province',
                'class' => Province::class
                ])
            ->add('userRoles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
