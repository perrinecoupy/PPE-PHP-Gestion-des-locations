<?php

namespace App\Form;

use App\Entity\Residence;
use App\Entity\Rent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('arrival_date', TextType::class, [
                'label' => 'Début de la location',
                'required' => true,
            ])
            ->add('departure_date', TextType::class, [
                'label' => 'Fin de la location',
                'required' => true,
            ])
            ->add('id', CheckboxType::class, [
                'label' => 'Notifier le locataire',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rent::class,
            'data_class2' => Residence::class,
        ]);
    }
}