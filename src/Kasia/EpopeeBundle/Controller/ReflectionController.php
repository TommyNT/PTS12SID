<?php

namespace Kasia\EpopeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundatio\Request;
use Kasia\EpopeeBundle\Entity\Reflection;
use Kasia\EpopeeBundle\Form\ReflectionType;

class ReflectionController extends Controller
{
    public function insertAction(Request $request)
    {
        $reflection = new Reflection();
        $form=$this->createForm(new ReflectionType(), $reflection);

        if ($request->isMethod(‘POST’)
			&& $form->handleRequest($request) 
			&& $form->isValid()
			)
        {
        	$em = $this->getDoctrine()->getManager();
			$em->persist($reflection);
			$em -> flush ();
				return  $this->redirect($this->generateUrl(('kasia_epopee_reflection_list', array()));
        }

        return $this->render('KasiaEpopeeBundle:Reflection:insert.html.twig', array('from'=>$form->createView()));

    }

}
