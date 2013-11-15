<?php

namespace Openstreetmap\OpenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenBundle:Default:index.html.twig', array('name' => $name));
    }
}
