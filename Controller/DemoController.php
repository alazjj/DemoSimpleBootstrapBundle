<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Controller;

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
     * @Route("/new", name="alazjj_demo_new")
     * @Template()
     */
    public function newFormAction()
    {
        $form   = $this->createForm(new FormType());

        return array(
            'form'   => $form->createView(),
        );
    }

    /**
     * @Route("/create", name="alazjj_demo_create")
     * @Template()
     */
    public function createFormAction()
    {
//        $entity  = new Task();
//        $form = $this->createForm(new TaskType(), $entity);
//        $form->bind($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($entity);
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('task_show', array('id' => $entity->getId())));
//        }
//
//        return array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        );
    }
}
