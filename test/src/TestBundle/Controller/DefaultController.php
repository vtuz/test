<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/user/{id}")
     */
    public function indexAction($id = 2)
    {
        $user = $this->getDoctrine()
            ->getRepository('TestBundle:User')
            ->find($id);

        $name = $user->getName();

        $lastName = $user->getLastNaem();

        return $this->render('TestBundle:Default:index.html.twig', array('name' => $name.' '.$lastName));
    }
}
