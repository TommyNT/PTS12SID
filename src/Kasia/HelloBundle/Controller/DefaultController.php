<?php

namespace Kasia\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $surname)
    {
        return $this->render('KasiaHelloBundle:Default:index.html.twig', array('name'=>$name, 'surname'=>$surname));
    }
}
