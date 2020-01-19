<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Omnibus;
use AppBundle\Form\OmnibusType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones') or has_role('ROLE_ADMIN')")
 *
 */
class OmnibusController extends Controller
{
    /**
     * Lists all Omnibus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $omnibuses = $em->getRepository('AppBundle:Omnibus')->findAll();

        return $this->render('omnibus/index.html.twig', array(
            'omnibuses' => $omnibuses,
        ));
    }
    public function combustibleHabilitadoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
        $query = 'SELECT
           omnibus.noomnibus,
           tarjeta_combustible.notarjeta,
           tipo_combustible.tipo AS tipoCombustible,
           tarjeta_combustible.asignacion AS combustible_asignado,
           tarjeta_combustible.fecha_asignacion,
           g_p_s.kmrecorridos,
           g_p_s.combustible AS combustible_consumido_gps,
           tarjeta_combustible.gastoreal AS gasto_combustibleXtarjeta,
           tarjeta_combustible.gastoreal/g_p_s.combustible AS diferencia_tarjeta_gps
        FROM
           public.omnibus,
           public.tarjeta_combustible,
           public.g_p_s,
           public.tipo_combustible
        WHERE
           omnibus.id_tarjetacombustible = tarjeta_combustible.id AND
           g_p_s.id_omnibus = omnibus.id AND
           tipo_combustible.id = tarjeta_combustible.id_combustibletipo';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('omnibus/combustibleHabilitado.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function KmsRecorridosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
        $query = 'SELECT
          omnibus.noomnibus,
          omnibus.kmrecorridosacumulados,
          omnibus.mantenimiento
        FROM
          public.omnibus';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('omnibus/reporteKmsRecorridos.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function Plan_combustibleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
        $query = 'SELECT
           ruta.noruta,
           servicio.tipo AS servicio,
           ruta.distanciakm,
           AVG(hoja_ruta.cantidadviajes) AS viajespromedio,
           tipo_omnibus.tipo AS tipo_omnibus,
           tipo_omnibus.indiceconsumonormado,
           ruta.distanciakm*tipo_omnibus.indiceconsumonormado AS consumoxviaje,
           ruta.distanciakm*tipo_omnibus.indiceconsumonormado*AVG(hoja_ruta.cantidadviajes) AS consumototal
        FROM
           public.hoja_ruta,
           public.omnibus,
           public.servicio,
           public.ruta,
           public.tipo_omnibus
        WHERE
           hoja_ruta.id_omnibus = omnibus.id AND
           hoja_ruta.id_ruta = ruta.id AND
           servicio.id = ruta.servicio_id AND
           tipo_omnibus.id = omnibus.id_tipoomnibus
        GROUP BY ruta.noruta,
           servicio.tipo,
           ruta.distanciakm,
           tipo_omnibus.tipo,
           tipo_omnibus.indiceconsumonormado';
        $query2 = 'SELECT
           ruta.noruta,
           servicio.tipo AS servicio,
           ruta.distanciakm,
           AVG(hoja_ruta.cantidadviajes) AS viajespromedio,
          ruta.cantidadmedios,
          tipo_omnibus.indiceconsumonormado,
          ruta.distanciakm*tipo_omnibus.indiceconsumonormado*AVG(hoja_ruta.cantidadviajes)*ruta.cantidadmedios AS consumototal
        FROM
          public.hoja_ruta,
          public.omnibus,
          public.servicio,
          public.ruta,
          public.tipo_omnibus
       WHERE
         hoja_ruta.id_omnibus = omnibus.id AND
         hoja_ruta.id_ruta = ruta.id AND
         servicio.id = ruta.servicio_id AND
         tipo_omnibus.id = omnibus.id_tipoomnibus
      GROUP BY  ruta.noruta,
        servicio.tipo,
        ruta.distanciakm,
        ruta.cantidadmedios,
        tipo_omnibus.indiceconsumonormado;';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        $stmt2 = $db->prepare($query2);
        $params2 = array();
        $stmt2->execute($params2);
        $otro = $stmt2->fetchAll();
        return $this->render('omnibus/plan_combustible.html.twig', array('reportes' => $reportes));
        //        return $this->render('omnibus/plan_combustible.html.twig', array('otro' => $otro));
    }

    public function reporteporOmnibusAction()
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
        $query = 'SELECT
           omnibus.noomnibus,
           omnibus.chapa,
           trabajador.nombre,
           trabajador.ci,
           ruta.noruta,
           tarjeta_combustible.notarjeta,
           tarjeta_combustible.asignacion AS combustible_asignado,
           tarjeta_combustible.fecha_asignacion,
           g_p_s.kmrecorridos,
           g_p_s.combustible AS combustible_consumido_gps,
           tarjeta_combustible.gastoreal AS gasto_combustibleXtarjeta
        FROM
           public.omnibus,
           public.chofer,
           public.trabajador,
           public.ruta,
           public.tarjeta_combustible,
           public.g_p_s
        WHERE
           omnibus.id_tarjetacombustible = tarjeta_combustible.id AND
           g_p_s.id_omnibus = omnibus.id
           AND omnibus.id=chofer.omnibus_id AND trabajador.id=chofer.trabajador_id ';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('omnibus/reporteporOmnibus.html.twig', array(
            'reportes' => $reportes
        ));
    }
    /**
     * Creates a new Omnibus entity.
     *
     */
    public function newAction(Request $request)
    {
        $omnibus = new Omnibus();
        $form = $this->createForm('AppBundle\Form\OmnibusType', $omnibus);
        $form->handleRequest($request);
        $KmRecorridosAcumulados = 0;
        $Mantenimiento = FALSE;
        $indiceCR = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $omnibus->setKmRecorridosAcumulados($KmRecorridosAcumulados);
            $omnibus->setMantenimiento($Mantenimiento);
            $omnibus->setIndiceConsumoReal($indiceCR);

            $em->persist($omnibus);
            $em->flush();

            return $this->redirectToRoute('omnibus_index', array('id' => $omnibus->getId()));
        }

        return $this->render('omnibus/new.html.twig', array(
            'omnibus' => $omnibus,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Omnibus entity.
     *
     */
    public function showAction(Omnibus $omnibus)
    {
        //        $deleteForm = $this->createDeleteForm($omnibus);

        return $this->render('omnibus/show.html.twig', array(
            'omnibus' => $omnibus,

        ));
    }

    /**
     * Displays a form to edit an existing Omnibus entity.
     *
     */
    public function editAction(Request $request, Omnibus $omnibus)
    {
        //        $deleteForm = $this->createDeleteForm($omnibus);
        $editForm = $this->createForm('AppBundle\Form\OmnibusType', $omnibus);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($omnibus);
            $em->flush();

            return $this->redirectToRoute('omnibus_index', array('id' => $omnibus->getId()));
        }

        return $this->render('omnibus/edit.html.twig', array(
            'omnibus' => $omnibus,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Omnibus entity.
     *
     */
    public function deleteAction(Request $request, Omnibus $omnibus)
    {
        //        $form = $this->createDeleteForm($omnibus);
        //        $form->handleRequest($request);
        //
        //        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($omnibus);
        $em->flush();
        //        }

        return $this->redirectToRoute('omnibus_index');
    }

    /**
     * Creates a form to delete a Omnibus entity.
     *
     * @param Omnibus $omnibus The Omnibus entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Omnibus $omnibus)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('omnibus_delete', array('id' => $omnibus->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
