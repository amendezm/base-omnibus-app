<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\TipoIncidencia;
use AppBundle\Form\TipoIncidenciaType;

/**
 * TipoIncidencia controller.
 *
 */
class TipoIncidenciaController extends Controller
{
    /**
     * Lists all TipoIncidencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoIncidencias = $em->getRepository('AppBundle:TipoIncidencia')->findAll();

        return $this->render('tipoincidencia/index.html.twig', array(
            'tipoIncidencias' => $tipoIncidencias,
        ));
    }

    /**
     * Creates a new TipoIncidencia entity.
     *
     */
    public function newAction(Request $request)
    {
        $tipoIncidencia = new TipoIncidencia();
        $form = $this->createForm('AppBundle\Form\TipoIncidenciaType' , $tipoIncidencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoIncidencia);
            $em->flush();

            return $this->redirectToRoute('tipoincidencia_index', array('id' => $tipoIncidencia->getId()));
        }

        return $this->render('tipoincidencia/new.html.twig', array(
            'tipoIncidencia' => $tipoIncidencia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoIncidencia entity.
     *
     */
    public function showAction(TipoIncidencia $tipoIncidencia)
    {
//        $deleteForm = $this->createDeleteForm($tipoIncidencia);

        return $this->render('tipoincidencia/show.html.twig', array(
            'tipoIncidencia' => $tipoIncidencia,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoIncidencia entity.
     *
     */
    public function editAction(Request $request, TipoIncidencia $tipoIncidencia)
    {
//        $deleteForm = $this->createDeleteForm($tipoIncidencia);
        $editForm = $this->createForm('AppBundle\Form\TipoIncidenciaType', $tipoIncidencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoIncidencia);
            $em->flush();

            return $this->redirectToRoute('tipoincidencia_index', array('id' => $tipoIncidencia->getId()));
        }

        return $this->render('tipoincidencia/edit.html.twig', array(
            'tipoIncidencia' => $tipoIncidencia,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TipoIncidencia entity.
     *
     */
    public function deleteAction(Request $request, TipoIncidencia $tipoIncidencia)
    {
//        $form = $this->createDeleteForm($tipoIncidencia);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoIncidencia);
            $em->flush();
//        }

        return $this->redirectToRoute('tipoincidencia_index');
    }

    /**
     * Creates a form to delete a TipoIncidencia entity.
     *
     * @param TipoIncidencia $tipoIncidencia The TipoIncidencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TipoIncidencia $tipoIncidencia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoincidencia_delete', array('id' => $tipoIncidencia->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
