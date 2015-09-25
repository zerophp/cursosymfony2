<?php

namespace Devel\DevelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DevelDevelBundle:Default:index.html.twig', 
            array('name' => 'Agustin F. Calderon M.',
                  'date' => date('Y-m-d H:i:s'),
            ));
    }
}
