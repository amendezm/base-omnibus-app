<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Tipo_omnibus;
use AppBundle\Form\Tipo_omnibusType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones') or has_role('ROLE_ADMIN')")
 *
 */
class Tipo_omnibusController extends Controller
{
    /**
     * Lists all Tipo_omnibus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipo_omnibuses = $em->getRepository('AppBundle:Tipo_omnibus')->findAll();

        return $this->render('tipo_omnibus/index.html.twig', array(
            'tipo_omnibuses' => $tipo_omnibuses,
        ));
    }

    /**
     * Creates a new Tipo_omnibus entity.
     *
     */
    public function newAction(Request $request)
    {
        $tipo_omnibus = new Tipo_omnibus();
        $form = $this->createForm('AppBundle\Form\Tipo_omnibusType', $tipo_omnibus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $capacidadTotal = $tipo_omnibus->getCapacidadSentados() + $tipo_omnibus->getCapacidadParados();
            $tipo_omnibus->setCapacidadTotal($capacidadTotal);

            $em->persist($tipo_omnibus);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('tipo_omnibus_index', array('id' => $tipo_omnibus->getId()));
        }else if($form->isSubmitted() && !$form->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('tipo_omnibus/new.html.twig', array(
            'tipo_omnibus' => $tipo_omnibus,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tipo_omnibus entity.
     *
     */
    public function showAction(Tipo_omnibus $tipo_omnibus)
    {
        //        $deleteForm = $this->createDeleteForm($tipo_omnibus);

        return $this->render('tipo_omnibus/show.html.twig', array(
            'tipo_omnibus' => $tipo_omnibus,
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tipo_omnibus entity.
     *
     */
    public function editAction(Request $request, Tipo_omnibus $tipo_omnibus)
    {
        $editForm = $this->createForm('AppBundle\Form\Tipo_omnibusType', $tipo_omnibus);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $capacidadTotal = $tipo_omnibus->getCapacidadSentados() + $tipo_omnibus->getCapacidadParados();
            $tipo_omnibus->setCapacidadTotal($capacidadTotal);

            $em->persist($tipo_omnibus);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('tipo_omnibus_index', array('id' => $tipo_omnibus->getId()));
        }else if($editForm->isSubmitted() && !$editForm->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('tipo_omnibus/edit.html.twig', array(
            'tipo_omnibus' => $tipo_omnibus,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Tipo_omnibus entity.
     *
     */
    public function deleteAction(Request $request, Tipo_omnibus $tipo_omnibus)
    {
        //        $form = $this->createDeleteForm($tipo_omnibus);
        //        $form->handleRequest($request);

        //        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tipo_omnibus);
        $em->flush();
        //        }
        
        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('tipo_omnibus_index');
    }

    /**
     * Creates a form to delete a Tipo_omnibus entity.
     *
     * @param Tipo_omnibus $tipo_omnibus The Tipo_omnibus entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipo_omnibus $tipo_omnibus)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipo_omnibus_delete', array('id' => $tipo_omnibus->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
