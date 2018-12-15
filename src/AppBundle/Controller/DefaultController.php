<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\User; 

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
       /* return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        $repository=$this->getDoctrine()->getRepository('AppBundle:User');
        $userListe=$repository->findAll();
        //dump($userListe);
        //die('test');
        return $this->render('default/index.html.twig', array('listeUser'=>$userListe));
    }

    /**
     * @Route("/chat",name="chat")
     */
    public function chatAction()
    {
        
        return $this->render('default/chat.html.twig');

    }
}
