<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CombustibleHabilitadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noComprobante')
            ->add('tarjeta', EntityType::class, array('class' => 'App\Entity\Tarjeta_combustible', 'multiple' => false, 'expanded' => false))
            ->add('cupet')
            ->add('fecha', DateTimeType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd', 'data-time-format' => 'hh:ii', 'autocomplete' => 'off'],
            ])
            ->add('habilitador')
            ->add('omnibus', EntityType::class, array('class' => 'App\Entity\Omnibus', 'multiple' => false, 'expanded' => false, 'choice_label' => 'chapa'))
            ->add('importe')
            ->add('cantLitros')
            ->add('noControl');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\CombustibleHabilitado',
        ));
    }
}
