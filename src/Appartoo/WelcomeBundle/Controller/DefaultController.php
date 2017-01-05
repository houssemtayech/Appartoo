<?php

namespace Appartoo\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppartooWelcomeBundle:Default:index.html.twig');
    }
}
