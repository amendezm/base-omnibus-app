<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecaudacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noSello')
            ->add('noVale')
            ->add('fecha')
            ->add('recaudacion')
            ->add('recaudador')
            ->add('hora')
            ->add('hojaRuta', EntityType::class, array('class' => 'AppBundle\Entity\HojaRuta', 'multiple' => false, 'expanded' => false));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recaudacion'
        ));
    }
}
