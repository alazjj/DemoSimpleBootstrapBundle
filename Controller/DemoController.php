<?php

namespace Alazjj\DemoSimpleBootstrapBundle\Controller;

use Alazjj\DemoSimpleBootstrapBundle\Entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="alazjj_index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
