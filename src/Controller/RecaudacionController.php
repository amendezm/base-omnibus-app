<?php

namespace App\Controller;

use App\Tests\Controller\HojaRutaControllerTest;

use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Recaudacion;
use Doctrine\DBAL\Driver\Connection;

// * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_RECAUDACION')")
/**
 *
 * Función para llamar a la plantilla de administración
 *
 */
class RecaudacionController extends AbstractController
{
    public function plan_recaudacionAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;
        $query = 'SELECT
           ruta.noruta,
           ruta.cantdiassemana_trabajo AS frecuencia_cantdias,
           AVG(hoja_ruta.cantidadviajes) AS cantidadviajes_promedio,
           ruta.cantpasajerospromedio,
           ruta.preciopasaje-(ruta.preciopasaje*10/100) AS preciopasaj_evasion,
           ruta.recaudacion/ruta.cantpasajerospromedio AS recaudacion_xpasajero,
           ruta.cantdiassemana_trabajo*AVG(hoja_ruta.cantidadviajes)*ruta.cantpasajerospromedio*ruta.preciopasaje-(ruta.preciopasaje*10/100) AS recaudacion_total
        FROM
           public.ruta,
           public.hoja_ruta,
           public.tarjeta_combustible,
           public.omnibus
        WHERE
           hoja_ruta.id_ruta = ruta.id AND
           hoja_ruta.id_omnibus = omnibus.id AND
           omnibus.id_tarjetacombustible = tarjeta_combustible.id
        GROUP BY ruta.noruta,
           ruta.cantdiassemana_trabajo,
           ruta.cantpasajerospromedio,
           ruta.preciopasaje,
           ruta.recaudacion';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('recaudacion/plan_recaudacion.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function recaudacion_estimadaAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;
        $query = 'SELECT 
                ruta.noruta, 
                ruta.destino,
                ruta.cantdiassemana_trabajo*AVG(hoja_ruta.cantidadviajes)*ruta.cantpasajerospromedio*ruta.preciopasaje-(ruta.preciopasaje*10/100) AS recaudacion_total,
                SUM(recaudacion.recaudacion) as recaudacion_real,
                ruta.cantdiassemana_trabajo*AVG(hoja_ruta.cantidadviajes)*ruta.cantpasajerospromedio*ruta.preciopasaje-(ruta.preciopasaje*10/100) - SUM(recaudacion.recaudacion) as dinero_perdido
            FROM
                public.ruta, 
                public.hoja_ruta, 
                public.recaudacion
            WHERE hoja_ruta.id_ruta=ruta.id and 
                  hoja_ruta.id = recaudacion.id_hojaruta
            GROUP BY ruta.noruta, 
                     ruta.destino,
                     ruta.cantdiassemana_trabajo,
                     ruta.cantpasajerospromedio,
                     ruta.preciopasaje';

        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('recaudacion/recaudacion_estimada.html.twig', array(
            'reportes' => $reportes
        ));
    }
    /**
     * Lists all Recaudacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recaudacions = $em->getRepository('App:Recaudacion')->findAll();

        return $this->render('recaudacion/index.html.twig', array(
            'recaudacions' => $recaudacions,
        ));
    }

    /**
     * Creates a new Recaudacion entity.
     *
     */
    public function newAction(Request $request)
    {
        $recaudacion = new Recaudacion();
        $form = $this->createForm('App\Form\RecaudacionType', $recaudacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recaudacion);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('recaudacion_index', array('id' => $recaudacion->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('recaudacion/new.html.twig', array(
            'recaudacion' => $recaudacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Recaudacion entity.
     *
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $RutaXno = $session->get('RutaXno');
        $OmnibusXno = $session->get('OmnibusXno');
        $NoRuta = $em->getRepository('CapacitacionBundle:Ruta')->findAll();
        $NoOmnibus = $em->getRepository('CapacitacionBundle:Omnibus')->findAll();
        $HojaRutas = $em->getRepository('CapacitacionBundle:HojaRuta')->findAll();


        return $this->render('recaudacion/reporte.html.twig', array(
            'RutaXno' => $RutaXno,
            'OmnibusXno' => $OmnibusXno,
            'NoRuta' => $NoRuta,
            'NoOmnibus' => $NoOmnibus,
            'HojaRutas' => $HojaRutas,
        ));
    }

    /**
     * Displays a form to edit an existing Recaudacion entity.
     *
     */
    public function editAction(Request $request, Recaudacion $recaudacion)
    {
        $editForm = $this->createForm('App\Form\RecaudacionType', $recaudacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recaudacion);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('recaudacion_index', array('id' => $recaudacion->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('recaudacion/edit.html.twig', array(
            'recaudacion' => $recaudacion,
            'edit_form' => $editForm->createView(),
            //
        ));
    }

    /**
     * Deletes a Recaudacion entity.
     *
     */
    public function deleteAction(Request $request, Recaudacion $recaudacion)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($recaudacion);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('recaudacion_index');
    }

    /**
     * Creates a form to delete a Recaudacion entity.
     *
     * @param Recaudacion $recaudacion The Recaudacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Recaudacion $recaudacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recaudacion_delete', array('id' => $recaudacion->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    //    public function reporteAction()
    //    {
    //        $em = $this->getDoctrine()->getManager();
    //
    //        $db = $em->getConnection();
    //        $query = 'SELECT o.noomnibus,h.nohojaruta,c.nombre,r.nosello,
    //r.novale,r.recaudacion,r.recaudador,u.noruta
    //FROM
    //  recaudacion r,omnibus o,ruta u,hoja_ruta h,chofer c
    //WHERE
    //  r.id_hojaruta=h.id and h.id_ruta=u.id and h.id_omnibus=o.id';
    //        $stmt = $db->prepare($query);
    //        $params = array();
    //        $stmt->execute($params);
    //        $reportes = $stmt->fetchAll();
    //        return $this->render('recaudacion/reporte.html.twig', array(
    //            'reportes' => $reportes
    //        ));
    //    }
    public function recaudacionAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;
        $query = 'SELECT o.noomnibus,h.nohojaruta,c.nombre,r.nosello,
           r.novale,r.recaudacion,r.recaudador,u.noruta
        FROM
           recaudacion r,omnibus o,ruta u,hoja_ruta h,chofer c
        WHERE
           r.id_hojaruta=h.id and h.id_ruta=u.id and h.id_omnibus=o.id AND o.id=c.omnibus_id ORDER BY r.fecha';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('recaudacion/recaudacionXfecha.html.twig', array(
            'reportes' => $reportes
        ));
    }
    //    public function recaudacionMensualAction()
    //    {
    //        $em = $this->getDoctrine()->getManager();
    //
    //        $db = $em->getConnection();
    //        $query = 'SELECT
    //FROM
    //
    //WHERE
    //
    //        $stmt = $db->prepare($query);
    //        $params = array();
    //        $stmt->execute($params);
    //        $reportes = $stmt->fetchAll();
    //        return $this->render('recaudacion/recaudacionXfecha.html.twig', array(
    //            'reportes' => $reportes
    //        ));
    //    }
}
