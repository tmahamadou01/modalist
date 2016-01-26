<?php

namespace ModalistBundle\Controller;

use ModalistBundle\Entity\WpOrders;;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository('ModalistBundle:WpOrders')->findAll();
        return $this->render('ModalistBundle:Default:index.html.twig',array('orders'=>$orders));
    }

//    public function createAction(Request $request)
//    {
//        $entity  = new WpOrders();
//        $form    = $this->createForm(new WpOrdersType(), $entity);
//        $request = $this->getRequest();
//
//        if ($request->getMethod() == 'POST') {
//            $form->bind($request);
//
//            if ($form->isValid()) {
//                $em = $this->getDoctrine()->getEntityManager();
//
//                $em->persist($entity);
//                $em->flush();
//
//                return $this->redirect($this->generateUrl('modalist_homepage'));
//            }
//        }
//
//        return $this->render('ModalistBundle:Default:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView()
//        ));

}
