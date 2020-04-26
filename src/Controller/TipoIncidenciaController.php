<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\TipoIncidencia;
use App\Form\TipoIncidenciaType;

/**
 * TipoIncidencia controller.
 *
 */
class TipoIncidenciaController extends AbstractController
{
    /**
     * Lists all TipoIncidencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoIncidencias = $em->getRepository('App:TipoIncidencia')->findAll();

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
        $form = $this->createForm('App\Form\TipoIncidenciaType', $tipoIncidencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoIncidencia);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('tipoincidencia_index', array('id' => $tipoIncidencia->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
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
        $editForm = $this->createForm('App\Form\TipoIncidenciaType', $tipoIncidencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoIncidencia);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('tipoincidencia_index', array('id' => $tipoIncidencia->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('tipoincidencia/edit.html.twig', array(
            'tipoIncidencia' => $tipoIncidencia,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a TipoIncidencia entity.
     *
     */
    public function deleteAction(Request $request, TipoIncidencia $tipoIncidencia)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tipoIncidencia);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

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
            ->getForm();
    }
}
