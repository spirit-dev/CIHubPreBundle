<?php

namespace SpiritDev\Bundle\CIHubPreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SpiritDevCIHubPreBundle:Default:index.html.twig', array('name' => $name));
    }
}
