<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('phone')->add('prenom')
        ->add('roles', ChoiceType::class, array(
                'label' => 'Type',
                'choices' => array(
                    'USER' => 'ROLE_USER',
                    'PROPRIETAIRE' => 'ROLE_PROPRIETAIRE'
                ),
                'required' => true,
                'multiple' => true,)
        );

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'user_bundle_profile_type';
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }
}
