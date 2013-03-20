<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text', 'text', array(
            'label' => 'Text field',
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('date', 'date', array(
            'label' => 'Date field',
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('choice', 'choice', array(
            'label' => 'Choice field',
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('checkbox', 'checkbox', array(
            'label' => 'Checkbox field',
            'is_editable' => true,
            'is_active' => false
        ));
    }

    public function getName()
    {
        return 'formTest';
    }
}
