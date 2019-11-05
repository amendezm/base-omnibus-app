<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RutaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noRuta')
            ->add('distanciaKm')
            ->add('cantPasajerosPromedio')
            ->add('salida')
            ->add('destino')
            ->add('dias', EntityType::class, array('class' => 'AppBundle\Entity\DiasSemana', 'multiple' => true, 'expanded' => true))
//            ->add('recaudacion')
            ->add('servicio', EntityType::class, array('class' => 'AppBundle\Entity\Servicio', 'multiple' => false, 'expanded' => false))
            ->add('cantidadMedios')
            ->add('precioPasaje')
            ->add('expedicion', EntityType::class, array('class' => 'AppBundle\Entity\Pto_expedicion', 'multiple' => false, 'expanded' => false))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ruta'
        ));
    }
}
