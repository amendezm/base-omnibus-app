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
    /**
     * Lists all GPS entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gps = $em->getRepository('AppBundle:GPS')->findAll();

        return $this->render('gps/index.html.twig', array(
            'GPS' => $gps,
        ));
    }

    /**
     * Creates a new GPS entity.
     *
     */
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

            return $this->redirectToRoute('gps_index', array('id' => $gps->getId()));
        }

        return $this->render('gps/new.html.twig', array(
            'GPS' => $gps,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a GPS entity.
     *
     */
    public function showAction(GPS $gP)
    {
//        $deleteForm = $this->createDeleteForm($gP);

        return $this->render('gps/show.html.twig', array(
            'gP' => $gP,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing GPS entity.
     *
     */
    public function editAction(Request $request, GPS $gps)
    {
//        $deleteForm = $this->createDeleteForm($gps);
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

            return $this->redirectToRoute('gps_index', array('id' => $gps->getId()));
        }

        return $this->render('gps/edit.html.twig', array(
            'GPS' => $gps,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a GPS entity.
     *
     */
    public function deleteAction(Request $request, GPS $gps)
    {
//        $form = $this->createDeleteForm($gps);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gps);
            $em->flush();
//        }

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
