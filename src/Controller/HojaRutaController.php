<?php

namespace App\Controller;

use App\Entity\Incidencias_HR;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\HojaRuta;
use App\Form\HojaRutaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\DBAL\Driver\Connection;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_OPERACIONES')")
 *
 */
class HojaRutaController extends AbstractController
{



    /**
     * Lists all HojaRuta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hojaRutas = $em->getRepository('App:HojaRuta')->findAll();

        return $this->render('hojaruta/index.html.twig', array(
            'hojaRutas' => $hojaRutas,
        ));
    }

    /**
     * Creates a new HojaRuta entity.
     *
     */
    public function newAction(Request $request)
    {
        $hojaRuta = new HojaRuta();
        $form = $this->createForm('App\Form\HojaRutaEditType', $hojaRuta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($hojaRuta);
            $em->flush();

            $totalHoras = $hojaRuta->getBasico() + $hojaRuta->getConfronta() + $hojaRuta->getConIncremento() + $hojaRuta->getTurnopartido() + $hojaRuta->getVoluntario();
            $hojaRuta->setTotalHoras($totalHoras);

            $em->persist($hojaRuta);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('hojaruta_index', array('id' => $hojaRuta->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('hojaruta/new.html.twig', array(
            'hojaRuta' => $hojaRuta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a HojaRuta entity.
     *
     */
    public function showAction(HojaRuta $hojaRuta, COnnection $connection)
    {
        $em = $connection;

        $query = "SELECT
               incidencia.detalles
            FROM
               public.incidencia_hr,
               public.incidencia
            WHERE
               incidencia_hr.idhojaruta = {$hojaRuta->getId()} AND
               incidencia.idincidencia = incidencia_hr.idincidencia";

        $stmt = $em->prepare($query);
        $params = array();
        $stmt->execute($params);
        $detallesIncidencias = $stmt->fetchAll();

        return $this->render('hojaruta/show.html.twig', array(
            'hojaRutum' => $hojaRuta,
            'incidencias' => $detallesIncidencias,
        ));
    }

    /**
     * Displays a form to edit an existing HojaRuta entity.
     *
     */
    public function editAction(Request $request, HojaRuta $hojaRuta)
    {
        $editForm = $this->createForm('App\Form\HojaRutaEditType', $hojaRuta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $totalHoras = $hojaRuta->getBasico() + $hojaRuta->getConfronta() + $hojaRuta->getConIncremento() + $hojaRuta->getTurnopartido() + $hojaRuta->getVoluntario();
            $hojaRuta->setTotalHoras($totalHoras);
            $em->persist($hojaRuta);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('hojaruta_index', array('id' => $hojaRuta->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('hojaruta/edit.html.twig', array(
            'hojaRuta' => $hojaRuta,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a HojaRuta entity.
     *
     */
    public function deleteAction(Request $request, HojaRuta $hojaRuta)
    {
        $em = $this->getDoctrine()->getManager();

        $incidencias = $em->getRepository('App:Incidencias_HR')->findByHojaRuta($hojaRuta);

        foreach ($incidencias as $incidencia) {
            $em->remove($incidencia);
        }

        $em->remove($hojaRuta);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('hojaruta_index');
    }

    /**
     * Creates a form to delete a HojaRuta entity.
     *
     * @param HojaRuta $hojaRuta The HojaRuta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HojaRuta $hojaRuta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hojaruta_delete', array('id' => $hojaRuta->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function reporte_hoja_ruta_fechaAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();
        $db = $connection;
        $query = 'SELECT
           hoja_ruta.nohojaruta,
           omnibus.noomnibus,
           ruta.noruta,
           servicio.tipo AS servicio,
           SUM(hoja_ruta.cantidadviajes) AS cantidadviajes,
           chofer.nombre,
           SUM(g_p_s.kmrecorridos) AS kmrecorridos,
           SUM(recaudacion.recaudacion) AS recaudacion,
           tipo_incidencia.tipoincidencias AS incidencias
        FROM
           public.hoja_ruta,
           public.chofer,
           public.omnibus,
           public.servicio,
           public.ruta,
           public.g_p_s,
           public.recaudacion,
           public.tipo_incidencia
        WHERE
           hoja_ruta.id_omnibus = omnibus.id AND
           hoja_ruta.id_ruta = ruta.id AND
           chofer.omnibus_id = omnibus.id AND
           omnibus.id = g_p_s.id_omnibus AND
           servicio.id = ruta.servicio_id AND
           recaudacion.id_hojaruta = hoja_ruta.id AND
           tipo_incidencia.id = hoja_ruta.id_typeincidencias AND
           hoja_ruta.fecha = g_p_s.fecha
        GROUP BY hoja_ruta.nohojaruta,
           omnibus.noomnibus,
           ruta.noruta,
           servicio.tipo,
           chofer.nombre,
           tipo_incidencia.tipoincidencias';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('hojaruta/reporte_hoja_ruta_fecha.html.twig', array(
            'reportes' => $reportes
        ));
    }
}
