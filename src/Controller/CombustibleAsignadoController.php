<?php

namespace App\Controller;

use App\Entity\CombustibleAsignado;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\DBAL\Driver\Connection;


class CombustibleAsignadoController extends AbstractController
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $asignaciones = $em->getRepository('App:CombustibleAsignado')->findAll();

        return $this->render('combustible_asignado/index.html.twig', array(
            'asignaciones' => $asignaciones,
        ));
    }

    public function newAction(Request $request)
    {
        $combustibleAsignado = new CombustibleAsignado();
        $form = $this->createForm('App\Form\CombustibleAsignadoType', $combustibleAsignado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($combustibleAsignado);
            $em->flush();

            $tarjeta = $combustibleAsignado->getTarjeta();

            $tarjeta->setSaldoActual($tarjeta->getSaldoActual() + $combustibleAsignado->getCantAsignada());
            $em->persist($tarjeta);
            $em->flush();

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('combustible_asignado_index', array('id' => $combustibleAsignado->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('combustible_asignado/new.html.twig', array(
            'combustibleAsignado' => $combustibleAsignado,
            'form' => $form->createView(),
        ));
    }


    public function editAction(Request $request, CombustibleAsignado $combustibleAsignado, Connection $connection)
    {
        $editForm = $this->createForm('App\Form\CombustibleAsignadoType', $combustibleAsignado);
        $editForm->handleRequest($request);

        $db = $connection;

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $query = '
            SELECT cant_asignada
            FROM combustible_asignado
            WHERE combustible_asignado.id = $id
            ';

            $vars = array(
                '$id' => $combustibleAsignado->getId(),
            );

            $queryValue = strtr($query, $vars);

            $stmt = $db->prepare($queryValue);
            $params = array();
            $stmt->execute($params);
            $asignacion = $stmt->fetchAll();

            $em = $this->getDoctrine()->getManager();
            $em->persist($combustibleAsignado);
            $em->flush();

            $tarjeta = $combustibleAsignado->getTarjeta();

            $prevValue = (count($asignacion) > 0 ? $asignacion[0]['cant_asignada'] : 0);
            $editChange =  $combustibleAsignado->getCantAsignada() - $prevValue;

            $tarjeta->setSaldoActual($tarjeta->getSaldoActual() + $editChange);
            $em->persist($tarjeta);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('combustible_asignado_index', array('id' => $combustibleAsignado->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('combustible_asignado/edit.html.twig', array(
            'combustibleAsignado' => $combustibleAsignado,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function deleteAction(Request $request, CombustibleAsignado $combustibleAsignado)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($combustibleAsignado);
        $em->flush();

        $tarjeta = $combustibleAsignado->getTarjeta();

        $tarjeta->setSaldoActual($tarjeta->getSaldoActual() - $combustibleAsignado->getCantAsignada());
        $em->persist($tarjeta);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('combustible_asignado_index');
    }
}
