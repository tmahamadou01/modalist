<?php

namespace ModalistBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ModalistBundle\Entity\WpOrders;
use ModalistBundle\Form\WpOrdersType;

/**
 * WpOrders controller.
 *
 */
class WpOrdersController extends Controller
{
    /**
     * Lists all WpOrders entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $wpOrders = $em->getRepository('ModalistBundle:WpOrders')->findAll();

        return $this->render('wporders/index.html.twig', array(
            'wpOrders' => $wpOrders,
        ));
    }

    /**
     * Creates a new WpOrders entity.
     *
     */
    public function newAction(Request $request)
    {
        $wpOrder = new WpOrders();
        $form = $this->createForm('ModalistBundle\Form\WpOrdersType', $wpOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('ModalistBundle:WpProducts')->findAll();
            $wpOrder->setOrderState('progress');
            $em->persist($wpOrder);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'notice',
                array(
                    'alert' => 'success',
                    'title' => 'Success!',
                    'message' => 'Votre commande a été validée'
                )
            );

            return $this->redirect($this->generateUrl('wporders_new'));
        }

        return $this->render('wporders/new.html.twig', array(
            'wpOrder' => $wpOrder,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a WpOrders entity.
     *
     */
    public function showAction(WpOrders $wpOrder)
    {
        $deleteForm = $this->createDeleteForm($wpOrder);

        return $this->render('wporders/show.html.twig', array(
            'wpOrder' => $wpOrder,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing WpOrders entity.
     *
     */
    public function editAction(Request $request, WpOrders $wpOrder)
    {
        $deleteForm = $this->createDeleteForm($wpOrder);
        $editForm = $this->createForm('ModalistBundle\Form\WpOrdersType', $wpOrder);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($wpOrder);
            $em->flush();

            return $this->redirectToRoute('wporders_edit', array('id' => $wpOrder->getId()));
        }

        return $this->render('wporders/edit.html.twig', array(
            'wpOrder' => $wpOrder,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a WpOrders entity.
     *
     */
    public function deleteAction(Request $request, WpOrders $wpOrder)
    {
        $form = $this->createDeleteForm($wpOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($wpOrder);
            $em->flush();
        }

        return $this->redirectToRoute('wporders_index');
    }

    /**
     * Creates a form to delete a WpOrders entity.
     *
     * @param WpOrders $wpOrder The WpOrders entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(WpOrders $wpOrder)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('wporders_delete', array('id' => $wpOrder->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
