<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\base;
use App\Form\baseType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class baseController extends AbstractController
{
    /**
     *
     * Función para llamar a la plantilla de administración
     * @IsGranted("ROLE_ADMIN")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bases = $em->getRepository('App:base')->findAll();

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
        $form = $this->createForm('App\Form\baseType', $base);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($base);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('base_index', array('id' => $base->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
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
        return $this->render('base/show.html.twig', array(
            'base' => $base,
        ));
    }

    /**
     * Displays a form to edit an existing base entity.
     *
     */
    public function editAction(Request $request, base $base)
    {
        $editForm = $this->createForm('App\Form\baseType', $base);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($base);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('base_index', array('id' => $base->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('base/edit.html.twig', array(
            'base' => $base,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a base entity.
     *
     */
    public function deleteAction(Request $request, base $base)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($base);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

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
            ->getForm();
    }
}
