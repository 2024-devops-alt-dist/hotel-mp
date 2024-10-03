<?php

namespace App\Form;

use App\Entity\Hotel;
use App\Entity\Suite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('imageFile', FileType::class, [
                'required' => false,
                'label' => 'Upload Image (JPG/PNG)',
            ])
            ->add('price', NumberType::class, [
                'required' => true, // Set to true if you want to make this field required
                'scale' => 2, // Number of decimal places
                'label' => 'Price (€)', // You can customize the label
            ])
            ->add('hotel', EntityType::class, [
                'class' => Hotel::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Suite::class,
        ]);
    }
}
