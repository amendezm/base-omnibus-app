<?php

namespace App\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
            ->add('omnibus', EntityType::class, array('class' => 'App\Entity\Omnibus', 'multiple' => false, 'expanded' => false))
            ->add('recalificacion_emision', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('recalificacionVencimiento', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('noLicenciaOperativa')
            ->add('examenMedicoEmision', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('examenMedicoVencimiento', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('examenPsicofisiologicoEmision',  DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('licencia_emision', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('licencia_vencimiento', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ])
            ->add('examenPsicofisiologicoVencimiento', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd'],
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Chofer'
        ));
    }
}
