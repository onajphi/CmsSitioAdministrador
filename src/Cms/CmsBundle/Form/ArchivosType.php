<?php

namespace Cms\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArchivosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('url')
            ->add('descripcion')
            ->add('vigente')
            ->add('eliminado')
            ->add('fecha')
            ->add('tipoarchivoid')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cms\CmsBundle\Entity\Archivos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cms_cmsbundle_archivos';
    }
}
