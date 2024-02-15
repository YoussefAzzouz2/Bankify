<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('password', PasswordType::class)->add('nom', TextType::class, [
                'required' => true,
                'label' => 'Last Name',
            ])
            // Add 'prenom' (first name) field
            ->add('prenom', TextType::class, [
                'required' => true,
                'label' => 'First Name',
            ])
            // Add 'genre' (gender) field
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Male' => 'male',
                    'Female' => 'female',

                ],
                'required' => true,
                'placeholder' => 'Choose an option',
                'label' => 'Gender',
            ])
            // Add 'dateNaissance' (date of birth) field
            ->add('dateNaissance', BirthdayType::class, [
                'required' => true,
                'label' => 'Date of Birth',
                // You can specify additional options for the BirthdayType here
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
