<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Chofer;
use AppBundle\Form\ChoferType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones') or has_role('ROLE_ADMIN')")
 *
 */
class ChoferController extends Controller
{

    /**
     * Lists all Chofer entities.
     *
     */
    public function indexAction()
    {
         $em = $this->getDoctrine()->getManager()->getConnection();

        $query = 'SELECT
           chofer.nombre,
           trabajador.ci,
           trabajador.codigo,
           chofer.nolicenciaoperativa,
           chofer.trabajador_id
        FROM
           public.chofer,
           public.trabajador
        WHERE
           trabajador.id = chofer.trabajador_id';

        $stmt = $em->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('chofer/index.html.twig', array(
            'reportes' => $reportes
        ));
    }

    /**
     * Creates a new Chofer entity.
     *
     */
    public function newAction(Request $request)
    {
        return null;
    }

    /**
     * Finds and displays a Chofer entity.
     *
     */
    public function showAction(Chofer $chofer)
    {
//        $deleteForm = $this->createDeleteForm($chofer);

        return $this->render('chofer/show.html.twig', array(
            'chofer' => $chofer,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chofer entity.
     *
     */
    public function editAction(Request $request, Chofer $chofer)
    {
//        $deleteForm = $this->createDeleteForm($chofer);
        $editForm = $this->createForm('AppBundle\Form\ChoferType', $chofer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chofer);
            $em->flush();

            return $this->redirectToRoute('chofer_index', array('id' => $chofer->getId()));
        }

        return $this->render('chofer/edit.html.twig', array(
            'chofer' => $chofer,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Chofer entity.
     *
     */
    public function deleteAction(Request $request, Chofer $chofer)
    {
//        $form = $this->createDeleteForm($chofer);
//        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chofer);
            $em->flush();
//        }

        return $this->redirectToRoute('chofer_index');
    }

    /**
     * Creates a form to delete a Chofer entity.
     *
     * @param Chofer $chofer The Chofer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chofer $chofer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chofer_delete', array('id' => $chofer->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function reporteHorasAction()
    {
        $em = $this->getDoctrine()->getManager();

        $db = $em->getConnection();
        $query = 'SELECT
           chofer.nombre,
           SUM(hoja_ruta.basico) AS horas_basico,
           SUM(hoja_ruta.conincremento) AS horas_conincremento,
           SUM(hoja_ruta.turnopartido) AS horas_turnopartido,
           SUM(hoja_ruta.confronta) AS horas_confronta,
           SUM(hoja_ruta.voluntario) AS horas_voluntario,
           SUM(hoja_ruta.totalhoras) AS totalhorastrabajadas
        FROM
           public.hoja_ruta,
           public.chofer,
           public.omnibus
        WHERE
           hoja_ruta.id_omnibus = omnibus.id AND
           chofer.omnibus_id = omnibus.id
        GROUP BY chofer.nombre';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('chofer/reporteHorasTrabajo.html.twig', array(
            'reportes' => $reportes
        ));
    }
}
