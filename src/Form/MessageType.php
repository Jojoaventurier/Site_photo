<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Your Name',
                'attr' => ['class' => 'form-input rounded-md'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Your Email',
                'attr' => ['class' => 'form-input rounded-md'],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Your Message',
                'attr' => ['class' => 'form-textarea rounded-md'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}