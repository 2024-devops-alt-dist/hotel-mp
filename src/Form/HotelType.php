<?php

namespace App\Form;

use App\Entity\Hotel;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('city')
            ->add('address')
            ->add('description')
            ->add('userId', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('imageFile', FileType::class, [
                'required' => false,
                'label' => 'Upload Image (JPG/PNG)',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
