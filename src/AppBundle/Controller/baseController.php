<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\base;
use AppBundle\Form\baseType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class baseController extends Controller
{
    /**
     *
     * Función para llamar a la plantilla de administración
     * @Security("has_role('ROLE_ADMIN')")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bases = $em->getRepository('AppBundle:base')->findAll();

        return $this->render('base/index.html.twig', array(
            'bases' => $bases,
        ));
    }

    /**
     * Creates a new base entity.
     *
     */
    public function newAction(Request $request)
    {
        $base = new base();
        $form = $this->createForm('AppBundle\Form\baseType', $base);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($base);
            $em->flush();

            return $this->redirectToRoute('base_index', array('id' => $base->getId()));
        }

        return $this->render('base/new.html.twig', array(
            'base' => $base,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a base entity.
     *
     */
    public function showAction(base $base)
    {
//        $deleteForm = $this->createDeleteForm($base);

        return $this->render('base/show.html.twig', array(
            'base' => $base,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing base entity.
     *
     */
    public function editAction(Request $request, base $base)
    {
//        $deleteForm = $this->createDeleteForm($base);
        $editForm = $this->createForm('AppBundle\Form\baseType', $base);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($base);
            $em->flush();

            return $this->redirectToRoute('base_index', array('id' => $base->getId()));
        }

        return $this->render('base/edit.html.twig', array(
            'base' => $base,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a base entity.
     *
     */
    public function deleteAction(Request $request, base $base)
    {
//        $form = $this->createDeleteForm($base);
//        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($base);
            $em->flush();
//        }

        return $this->redirectToRoute('base_index');
    }

    /**
     * Creates a form to delete a base entity.
     *
     * @param base $base The base entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(base $base)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('base_delete', array('id' => $base->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
