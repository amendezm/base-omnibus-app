<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class OmnibusType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chapa')
            ->add('noOmnibus')
            ->add('typeOmnibus')
//            ->add('indiceConsumoReal')
//            ->add('kmRecorridosAcumulados')
            ->add('marca')
//            ->add('descripcion')
            ->add('base')
            ->add('en_revision')
            ->add('is_roto')
            ->add('FICAV_emision')
            ->add('FICAV_vencimiento')
            ->add('licenciaOperativaEmision')
            ->add('licenciaOperativaVencimiento')
            ->add('tarjetaCombustible',EntityType::class, array('class' => 'AppBundle\Entity\Tarjeta_combustible', 'multiple' => false, 'expanded' => false));
//            ->add('mantenimiento');
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Omnibus'
        ));
    }
}
