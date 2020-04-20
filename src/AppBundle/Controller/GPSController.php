<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\GPS;
use AppBundle\Entity\Omnibus;
use AppBundle\Form\GPSType;
/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaGPS') or has_role('ROLE_ADMIN')")
 *
 */
class GPSController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gps = $em->getRepository('AppBundle:GPS')->findAll();

        return $this->render('gps/index.html.twig', array(
            'GPS' => $gps,
        ));
    }

    public function newAction(Request $request)
    {
        $gps = new GPS();
        $form = $this->createForm('AppBundle\Form\GPSType', $gps);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();
        $query='UPDATE omnibus SET kmrecorridosacumulados = kmrecorridosacumulados+g_p_s.kmrecorridos
        FROM
           public.g_p_s
        WHERE
                      g_p_s.id_omnibus = omnibus.id';
        $db->executeQuery($query);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($gps);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('gps_index', array('id' => $gps->getId()));

        }else if($form->isSubmitted() && !$form->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('gps/new.html.twig', array(
            'GPS' => $gps,
            'form' => $form->createView(),
        ));
    }

    public function showAction(GPS $gP)
    {
        return $this->render('gps/show.html.twig', array(
            'gP' => $gP,
        ));
    }

    public function editAction(Request $request, GPS $gps)
    {
        $editForm = $this->createForm('AppBundle\Form\GPSType', $gps);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $omnibus=$em->getRepository('AppBundle:Omnibus')->findAll();
            if($gps->getOmnibus()->getKmRecorridosAcumulados())
            $db = $em->getConnection();
            $query='UPDATE omnibus SET kmrecorridosacumulados = kmrecorridosacumulados+g_p_s.kmrecorridos
            FROM
               public.g_p_s
            WHERE
                      g_p_s.id_omnibus = omnibus.id';
            $db->executeQuery($query);
            $em->persist($gps);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('gps_index', array('id' => $gps->getId()));

        }else if($editForm->isSubmitted() && !$editForm->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('gps/edit.html.twig', array(
            'GPS' => $gps,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function deleteAction(Request $request, GPS $gps)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($gps);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('gps_index');
    }

    /**
     * Creates a form to delete a GPS entity.
     *
     * @param GPS $gps The GPS entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GPS $gps)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gps_delete', array('id' => $gps->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
