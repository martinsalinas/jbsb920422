<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use HomeBundle\Entity\ClothType;


class HomeController extends Controller {

    public function welcomeAction() {
//        $id = 1;
//        $repository = $this->getDoctrine()->getRepository('HomeBundle:User');
//        
//        $user = $repository->find($id);
//        
//        return new Response('Usuario: ' . $user->getUsername() . ' con email: ' . $user->getEmail() . '^_^!!!!!');

        $em = $this->getDoctrine()->getManager();
        $clothType = $em->getRepository('HomeBundle:ClothType')->findAll();
        $cloth = $em->getRepository('HomeBundle:Cloth')->findAll();
        
        
        
        
        if (!$clothType) {
//            $messageException = $this->get('translator')->trans('Tipo Prenda not found.');
//            throw $this->createNotFoundException($messageException);
            throw $this->createNotFoundException("Cloth Type not found");
        }
        
        if (!$cloth) {
            throw $this->createNotFoundException("Cloth not found");
        }

        $clothTypeEntity = new ClothType;

        $add_cloth_type_form_ajax = $this->createCustomForm(
                new \HomeBundle\Form\ClothTypeType(), $clothTypeEntity, 'POST', 'matriz_costos_adicionarTipoPrenda');


        return $this->render('HomeBundle:Home:welcome.html.twig', array(
                    'add_cloth_type_form_ajax' => $add_cloth_type_form_ajax->createView(),
                    'clothType' => $clothType,
                    'cloth' => $cloth
        ));
    }

    private function createCustomForm($objForm, $objEntity, $method, $route) {
        $form = $this->createForm($objForm, $objEntity, array(
            'action' => $this->generateUrl($route),
            'method' => $method
        ));

        return $form;
    }
}
