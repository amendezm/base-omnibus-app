<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\EscogidaTurno;
use AppBundle\Form\EscogidaTurnoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones')or has_role('ROLE_ADMIN')")
 *
 */
class EscogidaTurnoController extends Controller
{
    /**
     * Lists all EscogidaTurno entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $escogidaTurnos = $em->getRepository('AppBundle:EscogidaTurno')->findAll();

        return $this->render('escogidaturno/index.html.twig', array(
            'escogidaTurnos' => $escogidaTurnos,
        ));
    }

    /**
     * Creates a new EscogidaTurno entity.
     *
     */
    public function newAction(Request $request)
    {
        $escogidaTurno = new EscogidaTurno();
        $form = $this->createForm('AppBundle\Form\EscogidaTurnoType', $escogidaTurno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($escogidaTurno);
            $em->flush();

            return $this->redirectToRoute('escogidaturno_index', array('id' => $escogidaTurno->getId()));
        }

        return $this->render('escogidaturno/new.html.twig', array(
            'escogidaTurno' => $escogidaTurno,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EscogidaTurno entity.
     *
     */
    public function showAction(EscogidaTurno $escogidaTurno)
    {
//        $deleteForm = $this->createDeleteForm($escogidaTurno);

        return $this->render('escogidaturno/show.html.twig', array(
            'escogidaTurno' => $escogidaTurno,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EscogidaTurno entity.
     *
     */
    public function editAction(Request $request, EscogidaTurno $escogidaTurno)
    {
//        $deleteForm = $this->createDeleteForm($escogidaTurno);
        $editForm = $this->createForm('AppBundle\Form\EscogidaTurnoType', $escogidaTurno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($escogidaTurno);
            $em->flush();

            return $this->redirectToRoute('escogidaturno_index', array('id' => $escogidaTurno->getId()));
        }

        return $this->render('escogidaturno/edit.html.twig', array(
            'escogidaTurno' => $escogidaTurno,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EscogidaTurno entity.
     *
     */
    public function deleteAction(Request $request, EscogidaTurno $escogidaTurno)
    {
//        $form = $this->createDeleteForm($escogidaTurno);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($escogidaTurno);
            $em->flush();
//        }

        return $this->redirectToRoute('escogidaturno_index');
    }

    /**
     * Creates a form to delete a EscogidaTurno entity.
     *
     * @param EscogidaTurno $escogidaTurno The EscogidaTurno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EscogidaTurno $escogidaTurno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('escogidaturno_delete', array('id' => $escogidaTurno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
