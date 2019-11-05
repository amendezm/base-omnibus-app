<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Tarjeta_combustible;
use AppBundle\Form\Tarjeta_combustibleType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaEnergia') or has_role('ROLE_ADMIN')")
 *
 */
class Tarjeta_combustibleController extends Controller
{
    /**
     * Lists all Tarjeta_combustible entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarjeta_combustibles = $em->getRepository('AppBundle:Tarjeta_combustible')->findAll();

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
        $form = $this->createForm('AppBundle\Form\Tarjeta_combustibleType', $tarjeta_combustible);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $combustibleTipo = $tarjeta_combustible->getCombustibleTipo();
            $strCombustible = "";
            foreach ($combustibleTipo as $d) {
                $strCombustible .= $d . "";
            }
            $tarjeta_combustible->setTipoCombustible($strCombustible);
            $gastoReal= $tarjeta_combustible->getAsignacion()-$tarjeta_combustible->getSaldoActual();
            $tarjeta_combustible->setGastoReal($gastoReal);
            $em->persist($tarjeta_combustible);
            $em->flush();

            return $this->redirectToRoute('tarjeta_combustible_index', array('id' => $tarjeta_combustible->getId()));
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
//        $deleteForm = $this->createDeleteForm($tarjeta_combustible);

        return $this->render('tarjeta_combustible/show.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tarjeta_combustible entity.
     *
     */
    public function editAction(Request $request, Tarjeta_combustible $tarjeta_combustible)
    {
//        $deleteForm = $this->createDeleteForm($tarjeta_combustible);
        $editForm = $this->createForm('AppBundle\Form\Tarjeta_combustibleType', $tarjeta_combustible);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $combustibleTipo = $tarjeta_combustible->getCombustibleTipo();
            $strCombustible = "";
            foreach ($combustibleTipo as $d) {
                $strCombustible .= $d . "";
            }
            $tarjeta_combustible->setTipoCombustible($strCombustible);
            $gastoReal= $tarjeta_combustible->getAsignacion()-$tarjeta_combustible->getSaldoActual();
            $tarjeta_combustible->setGastoReal($gastoReal);
            $em->persist($tarjeta_combustible);
            $em->flush();

            return $this->redirectToRoute('tarjeta_combustible_index', array('id' => $tarjeta_combustible->getId()));
        }

        return $this->render('tarjeta_combustible/edit.html.twig', array(
            'tarjeta_combustible' => $tarjeta_combustible,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tarjeta_combustible entity.
     *
     */
    public function deleteAction(Request $request, Tarjeta_combustible $tarjeta_combustible)
    {
//        $form = $this->createDeleteForm($tarjeta_combustible);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarjeta_combustible);
            $em->flush();
//        }

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
            ->getForm()
        ;
    }
    public function ReporteTarjetaCombustibleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $db = $em->getConnection();
        $query = 'SELECT
           tarjeta_combustible.notarjeta,
           tipo_combustible.tipo,
           omnibus.noomnibus,
           tarjeta_combustible.asignacion,
           tarjeta_combustible.gastoreal,
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
}
