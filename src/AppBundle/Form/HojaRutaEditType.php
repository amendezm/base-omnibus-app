<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class HojaRutaEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('basico')
            ->add('conIncremento')
            ->add('confronta')
            ->add('turnopartido')
            ->add('voluntario')
            ->add('fecha', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['data-language' => 'es', 'class' => 'datepicker-here', 'data-date-format' => 'yyyy-mm-dd', 'autocomplete' => 'off'],
            ])
            ->add('ruta', EntityType::class, array('class' => 'AppBundle\Entity\Ruta', 'multiple' => false, 'expanded' => false))
            ->add('NoHojaRuta')
            //            ->add('tipo_horas', EntityType::class, array('class' => 'AppBundle\Entity\Tipo_horas_trabajo', 'multiple' => true, 'expanded' => true))
            //            ->add('totalHoras')
            //            ->add('incidenciahr', EntityType::class, array('class' => 'AppBundle\Entity\Incidencia', 'multiple' => false, 'expanded' => false))
            ->add('observaciones', TextareaType::class, [
                'attr' => ['rows' => 4],
            ])
            ->add('cantidadViajes')
            ->add('cantidadSalidas')
            ->add('omnibus', EntityType::class, array('class' => 'AppBundle\Entity\Omnibus', 'multiple' => false, 'expanded' => false));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\HojaRuta'
        ));
    }
}
