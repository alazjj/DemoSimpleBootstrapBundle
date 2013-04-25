<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Controller;

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
        return array();
    }
}
