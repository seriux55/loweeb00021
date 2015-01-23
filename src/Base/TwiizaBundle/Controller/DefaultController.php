<?php

namespace Base\TwiizaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BaseTwiizaBundle:Default:index.html.twig', array('name' => $name));
    }
}
