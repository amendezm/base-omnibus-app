<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EscogidaTurnoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ruta', EntityType::class, array('class' => 'App\Entity\Ruta', 'multiple' => false, 'expanded' => false))
            ->add('omnibus', EntityType::class, array('class' => 'App\Entity\Omnibus', 'multiple' => false, 'expanded' => false))
            ->add('turno')
            ->add('cantidadViajes')
            ->add('empieza', TimeType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-time-format' => 'hh:ii', 'autocomplete' => 'off'],
            ])
            ->add('sale', TimeType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-time-format' => 'hh:ii', 'autocomplete' => 'off'],
            ])
            ->add('termina', TimeType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-time-format' => 'hh:ii', 'autocomplete' => 'off'],
            ])
            ->add('descansoDias')
            ->add('descansoComienza', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd', 'autocomplete' => 'off'],
            ])
            ->add('descansoTermina', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd', 'autocomplete' => 'off'],
            ])
            ->add('chofer', EntityType::class, array('class' => 'App\Entity\Chofer', 'multiple' => false, 'expanded' => false))
            ->add('trabajaHoras')
            ->add('periodoEscogida');
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\EscogidaTurno'
        ));
    }
}
