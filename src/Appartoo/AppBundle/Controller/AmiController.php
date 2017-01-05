<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/01/17
 * Time: 02:02 م
 */

namespace Appartoo\AppBundle\Controller;


use Appartoo\AppBundle\Entity\Ami;
use Appartoo\AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AmiController extends Controller
{
    public function ajouterAction($id)
    {
        $ami = new Ami();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $id1 = $user->getId();
        $ami->setIdCurrent($id1);
        $em = $this->getDoctrine()->getManager();
        $current = $em->getRepository('AppartooAppBundle:User')->findOneById($id);
        $ami->setAmis($current);
        $em->merge($ami);
        $em->flush();
        return $this->render('AppartooAppBundle:Amis:confirmation.html.twig');
    }
    
    public function listeAmisAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $id = $user->getId();
        $liste_amis= $em->getRepository('AppartooAppBundle:Ami')->findByIdCurrent($id);
        return $this->render('AppartooAppBundle:Amis:list.html.twig', array('amis' => $liste_amis));
    }

    public function supprimerAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $amis = $em->getRepository('AppartooAppBundle:Ami')->findOneById($id);
        $em->remove($amis);
        $em->flush();
        return $this->render('AppartooAppBundle:Amis:suppression.html.twig');
    }
}