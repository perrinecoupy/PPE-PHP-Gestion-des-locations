<?php

namespace App\Form;
use App\Entity\Residence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la résidence',
                'required' => true,
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
            ])
            ->add('zip_code', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => true,
            ])
            ->add('country', TextType::class, [
                'label' => 'Pays',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Mettre à jour les données',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Residence::class,
        ]);
    }
}