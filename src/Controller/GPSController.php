<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\GPS;
use App\Entity\Omnibus;
use App\Form\GPSType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_GPS')")
 *
 */
class GPSController extends AbstractController
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gps = $em->getRepository('App:GPS')->findAll();

        return $this->render('gps/index.html.twig', array(
            'GPS' => $gps,
        ));
    }

    public function newAction(Request $request, Connection $connection)
    {
        $gps = new GPS();
        $form = $this->createForm('App\Form\GPSType', $gps);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $db = $connection;
        $query = 'UPDATE omnibus SET kmrecorridosacumulados = kmrecorridosacumulados+g_p_s.kmrecorridos
        FROM public.g_p_s
        WHERE g_p_s.id_omnibus = omnibus.id';

        $stmt = $db->prepare($query);
        $stmt->execute();

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($gps);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('gps_index', array('id' => $gps->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
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

    public function editAction(Request $request, GPS $gps, Connection $connection)
    {
        $editForm = $this->createForm('App\Form\GPSType', $gps);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $omnibus = $em->getRepository('App:Omnibus')->findAll();
            if ($gps->getOmnibus()->getKmRecorridosAcumulados())
                $db = $connection;
            $query = 'UPDATE omnibus SET kmrecorridosacumulados = kmrecorridosacumulados+g_p_s.kmrecorridos
            FROM public.g_p_s
            WHERE g_p_s.id_omnibus = omnibus.id';

            $db = $connection;
            $stmt = $db->prepare($query);
            $stmt->execute();

            $em->persist($gps);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('gps_index', array('id' => $gps->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
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
            ->getForm();
    }
}
