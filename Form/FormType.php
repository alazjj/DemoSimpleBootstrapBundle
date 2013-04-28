<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Form;

use Alazjj\DemoSimpleBootstrapBundle\Entity\Form;
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
            'input' => 'timestamp',
            'widget' => 'text',
            'format' => 'dd/MM/yy',
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('choice', 'choice', array(
            'label' => 'Choice field',
            'choices' => Form::getChoices(),
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('choicemultiple', 'choice', array(
            'label' => 'Choice multiple field',
            'choices' => Form::getChoices(),
            'is_editable' => true,
            'is_active' => false,
            'expanded' => true,
            'multiple' => true
        ));

        $builder->add('checkbox', 'checkbox', array(
            'label' => 'Checkbox field',
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('file', 'file', array(
            'label' => 'File field',
            'is_editable' => true,
            'is_active' => false
        ));

        $builder->add('repeated', 'repeated', array(
            'type' => 'password',
            'invalid_message' => 'Les mots de passe doivent correspondre',
            'options' => array('required' => true),
            'first_options'  => array(
                'label' => 'Repeated field',
                'is_editable' => true,
                'is_active' => false
            ),
            'second_options' => array(
                'label' => 'Repeated field (validation)',
                'is_editable' => true,
                'is_active' => false
            )
        ));

        $builder->add('collection', 'collection', array(
            'type'   => 'text',
            'options'  => array(
                'required'  => false,
                'attr'      => array('class' => 'email-box')
            ),
            'is_editable' => true,
            'is_active' => false
        ));
    }

    public function getName()
    {
        return 'formTest';
    }
}
