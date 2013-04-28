<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Controller;

use Alazjj\DemoSimpleBootstrapBundle\Entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/modal")
 */
class ModalController extends Controller
{
    /**
     * @Route("/", name="alazjj_modal_index")
     * @Template()
     */
    public function indexAction()
    {
        return array('tab' => 'modal');
    }

    /**
     * @Route("/confirmdelete", name="alazjj_modal_confirm_delete")
     * @Template()
     */
    public function confirmationDeleteAction()
    {
        return array('tab' => 'modal');
    }

    /**
     * @Route("/simple", name="alazjj_modal_simple_form")
     * @Template()
     */
    public function simpleFormAction()
    {
        $entity = new Form();
        $entity->setText('This is a text');
        $entity->setCheckbox(true);
        $entity->setDate(new \DateTime());

        $form = $this->createFormBuilder($entity)
                    ->add('text', 'text')
                    ->add('checkbox', 'checkbox')
                    ->add('date', 'date')
                    ->getForm();

        return array('form' => $form->createView());
    }
}
