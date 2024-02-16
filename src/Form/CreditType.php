<?php

namespace App\Form;

use App\Entity\Credit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class CreditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montantTotale')
            ->add('interet', ChoiceType::class, [
                'choices' => [
                    '10% (montant plus que 50000DT)' => 10,
                    '15% (montant entre 10000DT et 49999DT)' => 15,
                    '20% (montant entre 2000DT et 9999DT)' => 20,
                ],
                'expanded' => true,
                'attr' => ['class' => 'vertical-radio'],
                ])
            ->add('dureeTotale', ChoiceType::class, [
                'choices' => [
                    ''=> null,
                    '24 mois' => 24,
                    '36 mois' => 36,
                    '48 mois' => 48,
                    '60 mois' => 60,
                ]
                ])
            ->add('save',SubmitType::class,['label' => 'Enregistrer la demande'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Credit::class,
        ]);
    }
}
