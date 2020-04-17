<?php

namespace AppBundle\Controller;

use AppBundle\Form\ReportesRecaudacionType;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Ruta;
use AppBundle\Form\RutaType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaOperaciones') or has_role('ROLE_ADMIN')")
 *
 */
class RutaController extends Controller
{

    /**
     * Lists all Ruta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rutas = $em->getRepository('AppBundle:Ruta')->findAll();

        return $this->render('ruta/index.html.twig', array(
            'rutas' => $rutas,
        ));
    }
    public function reporteAction()
    {
        $em = $this->getDoctrine()->getManager();

        $db = $em->getConnection();
        $query = 'SELECT o.noomnibus,c.nombre,r.noruta,s.tipo, COUNT(t.tipoincidencias)
        FROM
           omnibus o,ruta r,tipo_incidencia t,chofer c,servicio s,hoja_ruta h
        WHERE h.id_ruta=r.id AND h.id_omnibus=o.id AND s.id=r.servicio_id AND o.id=c.omnibus_id GROUP BY o.noomnibus,c.nombre,r.noruta,s.tipo';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('ruta/reporte.html.twig', array(
            'reportes' => $reportes
        ));
    }


    public function showIncidencias_xRuta_reporteAction(Reporte $reporte)
    {
        //        $deleteForm = $this->createDeleteForm($ruta);

        return $this->render('ruta/showIncidencias_xRuta_reporte.html.twig', array(
            'reporte' => $reporte,
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new Ruta entity.
     *
     */
    public function newAction(Request $request)
    {
        $ruta = new Ruta();
        $form = $this->createForm('AppBundle\Form\RutaType', $ruta);
        $form->handleRequest($request);
        $cantDias = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $dias = $ruta->getDias();
            $strDias = "";

            if ($dias != null) {
                foreach ($dias as $d) {
                    $strDias .= $d . ", ";
                    $cantDias = $cantDias + 1;
                }
            }

            $ruta->setFrecuencia($strDias);
            $ruta->setCantDiasSemanaTrabajo($cantDias);
            $em->persist($ruta);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('ruta_index', array('id' => $ruta->getId()));

        }else if($form->isSubmitted() && !$form->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('ruta/new.html.twig', array(
            'ruta' => $ruta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ruta entity.
     *
     */
    public function showAction(Ruta $ruta)
    {
        //        $deleteForm = $this->createDeleteForm($ruta);

        return $this->render('ruta/show.html.twig', array(
            'ruta' => $ruta,
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ruta entity.
     *
     */
    public function editAction(Request $request, Ruta $ruta)
    {
        //        $deleteForm = $this->createDeleteForm($ruta);

        // Cojer la frecuencia para generar los dias
        $strAux = $ruta->getFrecuencia();
        if ($strAux != "") {
            $strArr = str_split($strAux, 5);
            foreach ($strArr as $t) {
                $ruta->addDia($this->getDoctrine()->getManager()->getRepository('AppBundle:DiasSemana')->findOneByDia(substr($t, 0, 3)));
            }
        }

        $editForm = $this->createForm('AppBundle\Form\RutaType', $ruta);
        $editForm->handleRequest($request);
        $cantDias = 0;
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Coje los dias escojidos y lo guarda en la frecuencia
            $this->orderDays($ruta);

            $dias = $ruta->getDias();
            $strDias = "";

            if ($dias != null) {
                foreach ($dias as $d) {
                    $strDias .= $d . ", ";
                    $cantDias = $cantDias + 1;
                }
            }

            $ruta->setFrecuencia($strDias);
            $ruta->setCantDiasSemanaTrabajo($cantDias);

            $em->persist($ruta);
            $em->flush();

            // Coje los servicios escojidos y lo guarda en la Tipo de Servicios
            //            $servicio = $ruta->getServicio();
            //            $strServicio = "";
            //            foreach ($servicio as $d) {
            //                $strServicio .= $d . "";
            //            }
            //            $ruta->setServicio($strServicio);
            $em->persist($ruta);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('ruta_index', array('id' => $ruta->getId()));

        }else if($editForm->isSubmitted() && !$editForm->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('ruta/edit.html.twig', array(
            'ruta' => $ruta,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ruta entity.
     *
     */
    public function deleteAction(Request $request, Ruta $ruta)
    {
        //        $form = $this->createDeleteForm($ruta);
        //        $form->handleRequest($request);
        //
        //        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($ruta);
        $em->flush();
        //        }

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('ruta_index');
    }

    /**
     * Creates a form to delete a Ruta entity.
     *
     * @param Ruta $ruta The Ruta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ruta $ruta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ruta_delete', array('id' => $ruta->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    private function orderDays(Ruta $ruta)
    {
        $days = $ruta->getDias()->getValues();

        $ruta->getDias()->clear();

        sort($days);

        foreach ($days as $d) {
            $ruta->addDia($d);
        }
    }
}
