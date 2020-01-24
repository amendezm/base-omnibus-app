<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Incidencias_HR;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\HojaRuta;
use AppBundle\Form\HojaRutaType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones')or has_role('ROLE_ADMIN')")
 *
 */
class HojaRutaController extends Controller
{



    /**
     * Lists all HojaRuta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hojaRutas = $em->getRepository('AppBundle:HojaRuta')->findAll();

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
        $form = $this->createForm('AppBundle\Form\HojaRutaEditType', $hojaRuta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($hojaRuta);
            $em->flush();
            // Coje los tipos de incidencias escojidas y lo guarda en en atributo Incidencias
            //            $tipoIncidencias= $hojaRuta->getIncidenciahr();
            //            $strIncidencias = "";
            //            foreach ($tipoIncidencias as $i) {
            //                $strIncidencias .= $i . ", ";
            //            }
            $totalHoras = $hojaRuta->getBasico() + $hojaRuta->getConfronta() + $hojaRuta->getConIncremento() + $hojaRuta->getTurnopartido() + $hojaRuta->getVoluntario();
            $hojaRuta->setTotalHoras($totalHoras);
            //            $hojaRuta->setIncidenciahr($strIncidencias);
            $em->persist($hojaRuta);
            $em->flush();

            return $this->redirectToRoute('hojaruta_index', array('id' => $hojaRuta->getId()));
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
    public function showAction(HojaRuta $hojaRutum)
    {
        //        $deleteForm = $this->createDeleteForm($hojaRutum);

        return $this->render('hojaruta/show.html.twig', array(
            'hojaRutum' => $hojaRutum,
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing HojaRuta entity.
     *
     */
    public function editAction(Request $request, HojaRuta $hojaRuta)
    {
        //        $deleteForm = $this->createDeleteForm($hojaRuta);
        $editForm = $this->createForm('AppBundle\Form\HojaRutaEditType', $hojaRuta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //            // Coje los tipos de horas escojidas y lo guarda en en atributo ViajesPerdidos
            //            $tipoHoras= $hojaRuta->getTipoHoras();
            //            $strHoras = "";
            //            foreach ($tipoHoras as $d) {
            //                $strHoras .= $d . ", ";
            //            }
            //
            //            $hojaRuta->setTipoHorasString($strHoras);
            //            $em->persist($hojaRuta);
            //            $em->flush();
            $totalHoras = $hojaRuta->getBasico() + $hojaRuta->getConfronta() + $hojaRuta->getConIncremento() + $hojaRuta->getTurnopartido() + $hojaRuta->getVoluntario();
            $hojaRuta->setTotalHoras($totalHoras);
            $em->persist($hojaRuta);
            $em->flush();

            return $this->redirectToRoute('hojaruta_index', array('id' => $hojaRuta->getId()));
        }

        return $this->render('hojaruta/edit.html.twig', array(
            'hojaRuta' => $hojaRuta,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a HojaRuta entity.
     *
     */
    public function deleteAction(Request $request, HojaRuta $hojaRuta)
    {
        $em = $this->getDoctrine()->getManager();

        $incidencias = $em->getRepository('AppBundle:Incidencias_HR')->findByHojaRuta($hojaRuta);

        foreach ($incidencias as $incidencia) {
            $em->remove($incidencia);
        }

        $em->remove($hojaRuta);
        $em->flush();

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
    //captura los id de tipos de horas de trabajo y los de hoja ruta y los incerta en la BD
    //    public function CapturarIdAction(Ruta $ruta , HojaRuta $HojaRuta)
    //    {
    ////        $em = $this->getDoctrine()->getManager();
    ////        $tipoHoras= $em->getRepository('AppBundle:Tipo_horas_trabajo')->findAll();
    //        $idtipoHoras=4;;
    //
    //        foreach ($idtipoHoras as $c){
    //            $HojaRuta->getId($this->getDoctrine()->getManager()->getRepository('AppBundle:HojaRuta'));
    //            $ruta->getId($this->getDoctrine()->getManager()->getRepository('AppBundle:Ruta'));
    //            if ($HojaRuta==) {
    //                $id = new Tipo_horas_trabajo();
    //                $id->getId();
    //                $em->persist($basico);
    //        }
    //
    ////        $db = $em->getConnection();
    ////
    ////        $query = 'SELECT t.tipoincidencias,o.noomnibus,c.nombre,r.noruta,s.tipo
    ////FROM
    ////  omnibus o,ruta r,tipo_incidencia t,chofer c,servicio s,hoja_ruta h
    ////WHERE h.id_ruta=r.id AND h.id_omnibus=o.id AND s.id=r.servicio_id AND o.id=c.omnibus_id
    //// ';
    ////        $stmt = $db->prepare($query);
    ////        $params = array();
    ////        $stmt->execute($params);
    ////        $reportes = $stmt->fetchAll();
    //        return $this->render('ruta/reporte.html.twig', array(
    ////            'reportes' => $reportes
    //        ));
    //    }
    public function reporte_hoja_ruta_fechaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
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
