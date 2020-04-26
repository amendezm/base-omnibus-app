<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\TipoCombustible;
use App\Form\TipoCombustibleType;

/**
 * TipoCombustible controller.
 *
 */
class TipoCombustibleController extends AbstractController
{
    /**
     * Lists all TipoCombustible entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoCombustibles = $em->getRepository('App:TipoCombustible')->findAll();

        return $this->render('tipocombustible/index.html.twig', array(
            'tipoCombustibles' => $tipoCombustibles,
        ));
    }

    /**
     * Creates a new TipoCombustible entity.
     *
     */
    public function newAction(Request $request)
    {
        $tipoCombustible = new TipoCombustible();
        $form = $this->createForm('App\Form\TipoCombustibleType', $tipoCombustible);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoCombustible);
            $em->flush();

            return $this->redirectToRoute('tipocombustible_index', array('id' => $tipoCombustible->getId()));
        }

        return $this->render('tipocombustible/new.html.twig', array(
            'tipoCombustible' => $tipoCombustible,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoCombustible entity.
     *
     */
    public function showAction(TipoCombustible $tipoCombustible)
    {
        //        $deleteForm = $this->createDeleteForm($tipoCombustible);

        return $this->render('tipocombustible/show.html.twig', array(
            'tipoCombustible' => $tipoCombustible,
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoCombustible entity.
     *
     */
    public function editAction(Request $request, TipoCombustible $tipoCombustible)
    {
        //        $deleteForm = $this->createDeleteForm($tipoCombustible);
        $editForm = $this->createForm('App\Form\TipoCombustibleType', $tipoCombustible);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoCombustible);
            $em->flush();

            return $this->redirectToRoute('tipocombustible_index', array('id' => $tipoCombustible->getId()));
        }

        return $this->render('tipocombustible/edit.html.twig', array(
            'tipoCombustible' => $tipoCombustible,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TipoCombustible entity.
     *
     */
    public function deleteAction(Request $request, TipoCombustible $tipoCombustible)
    {
        //        $form = $this->createDeleteForm($tipoCombustible);
        //        $form->handleRequest($request);
        //
        //        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tipoCombustible);
        $em->flush();
        //        }

        return $this->redirectToRoute('tipocombustible_index');
    }

    /**
     * Creates a form to delete a TipoCombustible entity.
     *
     * @param TipoCombustible $tipoCombustible The TipoCombustible entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TipoCombustible $tipoCombustible)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocombustible_delete', array('id' => $tipoCombustible->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
