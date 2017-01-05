<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/01/17
 * Time: 02:10 م
 */

namespace Appartoo\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listUserAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listUser = $em->getRepository('AppartooAppBundle:User')->findAll();
        return $this->render('AppartooAppBundle:User:list.html.twig', array('users' => $listUser));
    }

}