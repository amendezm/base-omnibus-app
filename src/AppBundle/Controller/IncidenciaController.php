<?php

namespace AppBundle\Controller;

use AppBundle\Entity\HojaRuta;
use AppBundle\Entity\Incidencias_HR;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Incidencia;
use AppBundle\Form\IncidenciaType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones') or has_role('ROLE_ADMIN')")
 *
 */
class IncidenciaController extends Controller
{
    /**
     * Lists all Incidencia entities.
     *
     */
    public function iindexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $incidenciaes = $em->getRepository('AppBundle:Incidencia')->findAll();

        return $this->render('incidencia/incidencia_index.html.twig', array(
            'incidenciaes' => $incidenciaes,
        ));
    }

    /**
     * Creates a new Incidencia entity.
     *
     */
    public function newAction(Request $request, $id_hojaruta)
    {
        $em = $this->getDoctrine()->getManager();

        $incidencia = new Incidencia();
        $hojaRuta = new HojaRuta();
        $incidenciaHR = new Incidencias_HR();
        $hojaruta = $em->getRepository('AppBundle:HojaRuta')->find($id_hojaruta);

        $form = $this->createForm('AppBundle\Form\IncidenciaType', $incidencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incidencia);
            $em->flush();

            $incidenciaHR->setHojaRuta($hojaruta);
            $incidenciaHR->setIncidencias($incidencia);
            $em->persist($incidenciaHR);
            $em->flush();
            $hojaRutas = $em->getRepository('AppBundle:HojaRuta')->findAll();

            return $this->redirectToRoute('hojaruta_index', array('hojaRutas' => $hojaRutas));
        }

        return $this->render('incidencia/new.html.twig', array(
            'incidencia' => $incidencia,
            'hojaRuta' => $hojaruta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Incidencia entity.
     *
     */
    public function showAction(Incidencia $incidencia)
    {
        //        $deleteForm = $this->createDeleteForm($incidencia);

        return $this->render('incidencia/show.html.twig', array(
            'incidencia' => $incidencia,

        ));
    }

    /**
     * Displays a form to edit an existing Incidencia entity.
     *
     */
    public function editAction(Request $request, Incidencia $incidencia)
    {
        //        $deleteForm = $this->createDeleteForm($incidencia);
        $editForm = $this->createForm('AppBundle\Form\IncidenciaType', $incidencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incidencia);
            $em->flush();

            return $this->redirectToRoute('incidencia_index', array('id' => $incidencia->getIdincidencia()));
        }

        return $this->render('incidencia/edit.html.twig', array(
            'incidencia' => $incidencia,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Incidencia entity.
     *
     */
    public function deleteAction(Request $request, Incidencia $incidencia)
    {
        //        $form = $this->createDeleteForm($incidencia);
        //        $form->handleRequest($request);
        //
        //        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($incidencia);
        $em->flush();
        //        }

        return $this->redirectToRoute('incidencia_index');
    }

    /**
     * Creates a form to delete a Incidencia entity.
     *
     * @param Incidencia $incidencia The Incidencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Incidencia $incidencia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('incidencia_delete', array('id' => $incidencia->getIdincidencia())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
        $query = 'SELECT
           incidencia.idincidencia as id,
           tipo_incidencia.tipoincidencias,
           incidencia.detalles,
           hoja_ruta.nohojaruta,
           hoja_ruta.fecha
        FROM
           public.incidencia,
           public.incidencia_hr,
           public.hoja_ruta,
           public.tipo_incidencia
        WHERE
           incidencia.id_tipo = tipo_incidencia.id AND
           incidencia_hr.idhojaruta = hoja_ruta.id AND
           incidencia_hr.idincidencia = incidencia.idincidencia';

        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();

        return $this->render('incidencia/incidencia_index.html.twig', array('reportes' => $reportes));
    }
}
