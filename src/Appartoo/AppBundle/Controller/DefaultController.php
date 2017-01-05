<?php

namespace Appartoo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppartooAppBundle:Default:index.html.twig');
    }
}
