<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use HomeBundle\Entity\ClothType;
USE HomeBundle\Form\ClothTypeType;

class IndexController extends Controller {

    public function logInAction() {
//        return $this->render('HomeBundle:Home:welcome.html.twig');
        return new Response('logInAction <3');
    }

    public function sigInAction() {
        return $this->render('HomeBundle:Index:sigIn.html.twig');
    }

    public function adicionarTipoPrendaAction(Request $request) {
        $clothTypeName = $_POST["exampleVariable"];

        $em = $this->getDoctrine()->getManager();
        if ($request->isXMLHttpRequest()) {
            $clothType = new ClothType();
            $clothType->setName($clothTypeName);

            $em->persist($clothType);
            $em->flush();
            
            $response = array();
            $response[] = array(
                'clothType_id' => $clothType->getId(),
                'clothType_name' => $clothType->getName()
            );

            return new Response(json_encode($response), 
                    200, 
                    array('Content-Type' => 'application/json'));            
        }
        return $this->redirectToRoute('home');
    }
    
    public function musicAction(){
        return $this->render('HomeBundle:Index:music.html.twig');
    }
    
    public function music23Action()
    {
        return $this->render('HomeBundle:Index:music23.html.twig');
    }
}
