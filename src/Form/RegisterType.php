<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, ["label" => "Votre prénom", "attr" => ["placeholder" => "Merci de saisir votre prénom"]])
            ->add('lastname', TextType::class, ["label" => "Votre nom", "attr" => ["placeholder" => "Merci de saisir votre nom"]])
            ->add('email', EmailType::class, ["label" => "Votre email", "attr" => ["placeholder" => "Merci de saisir votre email"]])
            ->add('password', PasswordType::class, ["label" => "Votre mot de passe", "attr" => ["placeholder" => "Merci de saisir votre mot de passe"]])
            ->add('password-confirm', PasswordType::class, ["mapped" => false, "label" => "Confirmez votre mot de passe", "attr" => ["placeholder" => "Merci de resaisir votre mot de passe"]])
            ->add('submit', SubmitType::class, ["label" => "S'inscrire"]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}