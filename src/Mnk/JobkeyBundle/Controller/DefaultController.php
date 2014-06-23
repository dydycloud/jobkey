<?php

namespace Mnk\JobkeyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JobkeyBundle:Default:index.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('JobkeyBundle:Default:hello.html.twig', array(
        	'name' => $name
        ));
    }
}
