<?php

namespace AppBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChoferType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('omnibus', EntityType::class, array('class' => 'AppBundle\Entity\Omnibus', 'multiple' => false, 'expanded' => false))
            ->add('recalificacion_emision')
            ->add('recalificacionVencimiento')
            ->add('noLicenciaOperativa')
            ->add('examenMedicoEmision')
            ->add('examenMedicoVencimiento')
            ->add('examenPsicofisiologicoEmision')
            ->add('licencia_emision')
            ->add('licencia_vencimiento')
            ->add('examenPsicofisiologicoVencimiento');
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Chofer'
        ));
    }
}
