<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Controller;

use Alazjj\DemoSimpleBootstrapBundle\Entity\Form;
use Alazjj\DemoSimpleBootstrapBundle\Form\FormModalType;
use Alazjj\DemoSimpleBootstrapBundle\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/demo")
 */
class DemoController extends Controller
{
    /**
     * @Route("/", name="alazjj_demo_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/staticContent", name="alazjj_demo_staticcontent")
     * @Template()
     */
    public function staticContentAction()
    {
        return array();
    }

    /**
     * @Route("/new/modal", name="alazjj_demo_new_modal")
     * @Template()
     */
    public function newModalFormAction()
    {
        $form   = $this->createForm(new FormModalType());

        return array(
            'form'   => $form->createView(),
        );
    }

    /**
     * @Route("/new/", name="alazjj_demo_new")
     * @Template()
     */
    public function newFormAction()
    {
        $date = new \DateTime();

        $entity = new Form();
        $entity->setDate($date->getTimestamp());
        $entity->setText('input text value');
        $entity->setChoice(1);
        $entity->setCheckbox(true);
        //$entity->setChoiceradio(array(3 => true,2 => true));
        $entity->setChoiceMultiple(array(3,2));

        $form = $this->createForm(new FormType(), $entity);

        return array(
            'form' => $form->createView(),
            'id' => uniqid()
        );
    }

    /**
     * @Route("/create", name="alazjj_demo_create")
     * @Template()
     */
    public function createFormAction()
    {
        $entity = new Form();
        $message = 'Successed';
        $status = 'success';

        $form = $this->createForm(new FormType(), $entity);
        $form->bind($this->getRequest());

        if (!$form->isValid()) {
            if ($this->getRequest()->isXmlHttpRequest()) {
                return new \Symfony\Component\HttpFoundation\JsonResponse(array(
                    'status' => 'error',
                    'message' => 'Oops! An Error Occurred'
                ));
            }
            $message = 'Oops! An Error Occurred';
            $status = 'error';
        }

        if (!$this->getRequest()->isXmlHttpRequest()) {
            $this->get('session')
                ->getFlashBag()
                ->add($status, $message);
            return $this->redirect($this->generateUrl('alazjj_demo_index'));
        } else {
            return array(
                'entity' => $entity,
                'form'   => $form->createView(),
            );
        }
    }
}
