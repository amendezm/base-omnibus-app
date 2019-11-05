<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Pto_expedicion;
use AppBundle\Form\Pto_expedicionType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaEnergia') or has_role('ROLE_ADMIN')")
 *
 */
class Pto_expedicionController extends Controller
{
    /**
     * Lists all Pto_expedicion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pto_expedicion = $em->getRepository('AppBundle:Pto_expedicion')->findAll();

        return $this->render('pto_expedicion/index.html.twig', array(
            'pto_expedicion' => $pto_expedicion,
        ));
    }

    /**
     * Creates a new Pto_expedicion entity.
     *
     */
    public function newAction(Request $request)
    {
        $pto_expedicion = new Pto_expedicion();
        $form = $this->createForm('AppBundle\Form\Pto_expedicionType', $pto_expedicion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pto_expedicion);
            $em->flush();

            return $this->redirectToRoute('pto_expedicion_index', array('id' => $pto_expedicion->getId()));
        }

        return $this->render('pto_expedicion/new.html.twig', array(
            'pto_expedicion' => $pto_expedicion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pto_expedicion entity.
     *
     */
    public function showAction(Pto_expedicion $pto_expedicion)
    {
//        $deleteForm = $this->createDeleteForm($pto_expedicion);

        return $this->render('pto_expedicion/show.html.twig', array(
            'pto_expedicion' => $pto_expedicion,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pto_expedicion entity.
     *
     */
    public function editAction(Request $request, Pto_expedicion $pto_expedicion)
    {
//        $deleteForm = $this->createDeleteForm($pto_expedicion);
        $editForm = $this->createForm('AppBundle\Form\Pto_expedicionType', $pto_expedicion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pto_expedicion);
            $em->flush();

            return $this->redirectToRoute('pto_expedicion_index', array('id' => $pto_expedicion->getId()));
        }

        return $this->render('pto_expedicion/edit.html.twig', array(
            'pto_expedicion' => $pto_expedicion,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pto_expedicion entity.
     *
     */
    public function deleteAction(Request $request, Pto_expedicion $pto_expedicion)
    {
//        $form = $this->createDeleteForm($pto_expedicion);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pto_expedicion);
            $em->flush();
//        }

        return $this->redirectToRoute('pto_expedicion_index');
    }

    /**
     * Creates a form to delete a Pto_expedicion entity.
     *
     * @param Pto_expedicion $pto_expedicion The Pto_expedicion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pto_expedicion $pto_expedicion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pto_expedicion_delete', array('id' => $pto_expedicion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
