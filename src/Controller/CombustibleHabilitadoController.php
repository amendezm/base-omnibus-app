<?php

namespace App\Controller;

use App\Entity\CombustibleHabilitado;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Doctrine\DBAL\Driver\Connection;

/**
 *
 * Función para llamar a la plantilla de administración
 *
 */
class CombustibleHabilitadoController extends AbstractController
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habilitaciones = $em->getRepository('App:CombustibleHabilitado')->findAll();

        return $this->render('combustible_habilitado/index.html.twig', array(
            'habilitaciones' => $habilitaciones,
        ));
    }

    public function newAction(Request $request)
    {
        $combustibleHabilitado = new CombustibleHabilitado();
        $form = $this->createForm('App\Form\CombustibleHabilitadoType', $combustibleHabilitado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($combustibleHabilitado);
            $em->flush();

            $tarjeta = $combustibleHabilitado->getTarjeta();

            $tarjeta->setSaldoActual($tarjeta->getSaldoActual() - $combustibleHabilitado->getCantLitros());
            $em->persist($tarjeta);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('combustible_habilitado_index', array('id' => $combustibleHabilitado->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('combustible_habilitado/new.html.twig', array(
            'combustibleHabilitado' => $combustibleHabilitado,
            'form' => $form->createView(),
        ));
    }


    public function editAction(Request $request, CombustibleHabilitado $combustibleHabilitado, Connection $connection)
    {
        $editForm = $this->createForm('App\Form\CombustibleHabilitadoType', $combustibleHabilitado);
        $editForm->handleRequest($request);

        $db = $connection;

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $query = '
            SELECT cantlitros
            FROM combustible_habilitado
            WHERE combustible_habilitado.id = $id
            ';

            $vars = array(
                '$id' => $combustibleHabilitado->getId(),
            );

            $queryValue = strtr($query, $vars);

            $stmt = $db->prepare($queryValue);
            $params = array();
            $stmt->execute($params);
            $habilitacion = $stmt->fetchAll();

            $em = $this->getDoctrine()->getManager();
            $em->persist($combustibleHabilitado);
            $em->flush();

            $tarjeta = $combustibleHabilitado->getTarjeta();

            $prevValue = (count($habilitacion) > 0 ? $habilitacion[0]['cantlitros'] : 0);
            $editChange =  $combustibleHabilitado->getCantLitros() - $prevValue;

            $tarjeta->setSaldoActual($tarjeta->getSaldoActual() - $editChange);
            $em->persist($tarjeta);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('combustible_habilitado_index', array('id' => $combustibleHabilitado->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('combustible_habilitado/edit.html.twig', array(
            'combustibleHabilitado' => $combustibleHabilitado,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function deleteAction(Request $request, CombustibleHabilitado $combustibleHabilitado)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($combustibleHabilitado);
        $em->flush();

        $tarjeta = $combustibleHabilitado->getTarjeta();

        $tarjeta->setSaldoActual($tarjeta->getSaldoActual() + $combustibleHabilitado->getCantLitros());
        $em->persist($tarjeta);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('combustible_habilitado_index');
    }
}
