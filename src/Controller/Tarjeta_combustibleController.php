<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Tarjeta_combustible;
use Doctrine\DBAL\Driver\Connection;
use App\Form\Tarjeta_combustibleType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_ESPECIALISTA_ENERGIA')")
 * 
 *
 */
class Tarjeta_combustibleController extends AbstractController
{
    /**
     * Lists all Tarjeta_combustible entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarjeta_combustibles = $em->getRepository('App:Tarjeta_combustible')->findAll();

        return $this->render('tarjeta_combustible/index.html.twig', array(
            'tarjeta_combustibles' => $tarjeta_combustibles,
        ));
    }

    /**
     * Creates a new Tarjeta_combustible entity.
     *
     */
    public function newAction(Request $request)
    {
        $tarjeta_combustible = new Tarjeta_combustible();
        $form = $this->createForm('App\Form\Tarjeta_combustibleType', $tarjeta_combustible);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarjeta_combustible);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('tarjeta_combustible_index', array('id' => $tarjeta_combustible->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('tarjeta_combustible/new.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tarjeta_combustible entity.
     *
     */
    public function showAction(Tarjeta_combustible $tarjeta_combustible)
    {
        return $this->render('tarjeta_combustible/show.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
        ));
    }

    /**
     * Displays a form to edit an existing Tarjeta_combustible entity.
     *
     */
    public function editAction(Request $request, Tarjeta_combustible $tarjeta_combustible)
    {
        $editForm = $this->createForm('App\Form\Tarjeta_combustibleType', $tarjeta_combustible);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarjeta_combustible);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('tarjeta_combustible_index', array('id' => $tarjeta_combustible->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('tarjeta_combustible/edit.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Tarjeta_combustible entity.
     *
     */
    public function deleteAction(Request $request, Tarjeta_combustible $tarjeta_combustible)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tarjeta_combustible);
        $em->flush();
        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('tarjeta_combustible_index');
    }

    /**
     * Creates a form to delete a Tarjeta_combustible entity.
     *
     * @param Tarjeta_combustible $tarjeta_combustible The Tarjeta_combustible entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarjeta_combustible $tarjeta_combustible)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarjeta_combustible_delete', array('id' => $tarjeta_combustible->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function ReporteTarjetaCombustibleAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;

        $query = 'SELECT
           tarjeta_combustible.notarjeta,
           tipo_combustible.tipo,
           omnibus.noomnibus,
           tarjeta_combustible.saldoactual
        FROM
           public.tarjeta_combustible,
           public.tipo_combustible,
           public.omnibus
        WHERE
           tarjeta_combustible.id = omnibus.id_tarjetacombustible AND
           tipo_combustible.id = tarjeta_combustible.id_combustibletipo;';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();
        return $this->render('tarjeta_combustible/reporte_tarjeta_mensual.html.twig', array(
            'reportes' => $reportes
        ));
    }

    public function parteTarjetaCombustibleAction(Connection $connection)
    {
        $em = $this->getDoctrine()->getManager();

        $db = $connection;

        $query = 'SELECT notarjeta,
                        tipo, 
                        saldoactual::double precision - SUM(cant_asignada) + SUM(cantlitros) as saldoinicial, 
                        SUM(cantlitros) as cantlitros,
                        SUM(cant_asignada) as cant_asignada,
                        fecha,
                        saldoactual 
                        FROM (
                            SELECT notarjeta, 
                                    tipo, 
                                    cast(saldoactual as decimal(9,2)) - cant_asignada as saldoinicial, 
                                    cant_asignada, 0 as cantlitros, 
                                    fecha::timestamp::date, 
                                    saldoactual
                            FROM public.combustible_asignado 
                            JOIN public.tarjeta_combustible ON tarjeta_combustible.id = combustible_asignado.tarjeta_id
                            JOIN public.tipo_combustible ON tarjeta_combustible.id_combustibletipo = tipo_combustible.id
                        UNION
                            SELECT notarjeta,
                                     tipo, 
                                     cast(saldoactual as decimal(9,2)) + cantlitros, 0, 
                                     cantlitros, 
                                     fecha::timestamp::date, 
                                     saldoactual
                            FROM public.combustible_habilitado
                            JOIN public.tarjeta_combustible ON tarjeta_combustible.id = combustible_habilitado.tarjeta_id
                            JOIN public.tipo_combustible ON tarjeta_combustible.id_combustibletipo = tipo_combustible.id) 
                        as derivedTable
                    GROUP BY fecha, notarjeta,saldoactual,tipo
                    ORDER BY fecha DESC
       ';
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $reportes = $stmt->fetchAll();

        return $this->render('tarjeta_combustible/reporte_tarjeta_mensual.html.twig', array(
            'reportes' => $reportes
        ));
    }
}
