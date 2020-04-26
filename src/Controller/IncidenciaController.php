<?php

namespace App\Controller;

use App\Entity\HojaRuta;
use App\Entity\Incidencias_HR;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Incidencia;
use Doctrine\DBAL\Driver\Connection;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_OPERACIONES')")
 * 
 */
class IncidenciaController extends AbstractController
{
    /**
     * Lists all Incidencia entities.
     *
     */
    public function iindexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $incidenciaes = $em->getRepository('App:Incidencia')->findAll();

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
        $hojaruta = $em->getRepository('App:HojaRuta')->find($id_hojaruta);

        $form = $this->createForm('App\Form\IncidenciaType', $incidencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incidencia);
            $em->flush();

            $incidenciaHR->setHojaRuta($hojaruta);
            $incidenciaHR->setIncidencias($incidencia);
            $em->persist($incidenciaHR);
            $em->flush();
            $hojaRutas = $em->getRepository('App:HojaRuta')->findAll();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('hojaruta_index', array('hojaRutas' => $hojaRutas));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
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
        $editForm = $this->createForm('App\Form\IncidenciaType', $incidencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($incidencia);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('incidencia_index', array('id' => $incidencia->getIdincidencia()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
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
        $em = $this->getDoctrine()->getManager();
        $em->remove($incidencia);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

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

    public function indexAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();
        $db = $connection;
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
