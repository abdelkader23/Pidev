<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('nom')->add('prenom')->add('roles', ChoiceType::class, array(
                'label' => 'Type',
                'choices' => array(
                    'Utilisateur' => 'ROLE_USER',
                    'Proprietaire' => 'ROLE_PROPRIETAIRE',
                    'Membre simple'=>'ROLE_MEMBRE_SIMPLE'

                ),
                'required' => true,
                'multiple' => true,)
        )->add('phone',IntegerType::class);


    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'user_bundle_registration_type';
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }
}
