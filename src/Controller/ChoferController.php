<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Chofer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\DBAL\Driver\Connection;

// use this in case of security from controller @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_OPERACIONES')")

/**
 *
 * Función para llamar a la plantilla de administración
 *
 */
class ChoferController extends AbstractController
{

    /**
     * Lists all Chofer entities.
     *
     */
    public function indexAction(COnnection $connection)
    {
        $em = $connection;

        $query = 'SELECT
           chofer.nombre,
           trabajador.ci,
           trabajador.codigo,
           chofer.nolicenciaoperativa,
           chofer.trabajador_id,
           chofer.licenciavencimiento,
           chofer.examenmedicovencimiento,
           chofer.examenpsicofisiologicovencimiento
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
        return $this->render('chofer/show.html.twig', array(
            'chofer' => $chofer,
        ));
    }

    /**
     * Displays a form to edit an existing Chofer entity.
     *
     */
    public function editAction(Request $request, Chofer $chofer)
    {
        $editForm = $this->createForm('App\Form\ChoferType', $chofer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chofer);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('chofer_index', array('id' => $chofer->getId()));
        }

        return $this->render('chofer/edit.html.twig', array(
            'chofer' => $chofer,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Chofer entity.
     *
     */
    public function deleteAction(Request $request, Chofer $chofer)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($chofer);
        $em->flush();

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
            ->getForm();
    }
    public function reporteHorasAction(Connection $connection)
    {
        $db = $connection;

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
