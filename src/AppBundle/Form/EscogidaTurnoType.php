<?php

namespace AppBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('ruta', EntityType::class, array('class' => 'AppBundle\Entity\Ruta', 'multiple' => false, 'expanded' => false))
            ->add('omnibus', EntityType::class, array('class' => 'AppBundle\Entity\Omnibus', 'multiple' => false, 'expanded' => false))
            ->add('turno')
            ->add('cantidadViajes')
            ->add('empieza')
            ->add('sale')
            ->add('termina')
            ->add('descansoDias')
            ->add('descansoComienza')
            ->add('descansoTermina')
            ->add('chofer', EntityType::class, array('class' => 'AppBundle\Entity\Chofer', 'multiple' => false, 'expanded' => false))
            ->add('trabajaHoras')
            ->add('periodoEscogida')
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EscogidaTurno'
        ));
    }
}
