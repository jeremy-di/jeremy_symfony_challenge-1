<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'deltaInput',
                ]
            ])
            ->add('roles', ChoiceType::class, [
               'multiple' => 'false',
               'choices' => [
                   'Utilisateur' => 'ROLE_USER',
                   'Administrateur' => 'ROLE_ADMIN',
               ],
               'attr' => [
                   'class' => 'deltaInput',
               ],
            ])
            ->add('password', PasswordType::class, [
                'mapped' => 'false',
                'attr' => [
                    'class' => 'deltaInput',
                ]
            ])
            ->add('login', TextType::class, [
                'attr' => [
                    'class' => 'deltaInput',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
