<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Chofer;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Entity\Trabajador;
use AppBundle\Form\TrabajadorType;

/**
 *
 * Función para llamar a la plantilla de administración
 * @Security("has_role('EspecialistaRRHH') or has_role('ROLE_ADMIN')")
 *
 */
class TrabajadorController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trabajadors = $em->getRepository('AppBundle:Trabajador')->findAll();

        return $this->render('trabajador/index.html.twig', array(
            'trabajadors' => $trabajadors,
        ));
    }

    public function newAction(Request $request)
    {
        $trabajador = new Trabajador();
        $chofer = new Chofer();
        $form = $this->createForm('AppBundle\Form\TrabajadorType', $trabajador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trabajador);
            $em->flush();

            if ($trabajador->getCargo() == 'chofer') {
                $chofer->setId($trabajador->getId());
                $chofer->setTrabajador($trabajador);
                $chofer->setNombre($trabajador->getNombre());
                $em->persist($chofer);
                $em->flush();
            }

            $this->addFlash('notice', 'Se ha insertado correctamente!');

            return $this->redirectToRoute('trabajador_index', array('id' => $trabajador->getId()));

        }else if($form->isSubmitted() && !$form->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('trabajador/new.html.twig', array(
            'trabajador' => $trabajador,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Trabajador $trabajador)
    {
        return $this->render('trabajador/show.html.twig', array(
            'trabajador' => $trabajador,
        ));
    }

    public function editAction(Request $request, Trabajador $trabajador)
    {
        $editForm = $this->createForm('AppBundle\Form\TrabajadorType', $trabajador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $chofer = $em->getRepository('AppBundle:Chofer')->find($trabajador->getId());

            if ($chofer != null) {
                if ($trabajador->getCargo() == 'chofer') {
                    $chofer->setNombre($trabajador->getNombre());
                    $chofer->setId($trabajador->getId());

                    $em->flush();
                } else {
                    $em->remove($chofer);

                    $em->flush();
                }
            }
            $em->persist($trabajador);
            $em->flush();

            $this->addFlash('notice', 'Se ha editado correctamente!');

            return $this->redirectToRoute('trabajador_index', array('id' => $trabajador->getId()));

        }else if($editForm->isSubmitted() && !$editForm->isValid()){
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('trabajador/edit.html.twig', array(
            'trabajador' => $trabajador,
            'edit_form' => $editForm->createView(),
            //            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Trabajador entity.
     *
     */
    public function deleteAction(Request $request, Trabajador $trabajador)
    {
        $em = $this->getDoctrine()->getManager();

        if ($trabajador->getCargo() == 'Chofer') {
            $chofer = $em->getRepository('AppBundle:Chofer')->findByIdTrabajador($trabajador->getId());
            $em->remove($chofer);
            $em->flush();
        }

        $em->remove($trabajador);
        $em->flush();

        $this->addFlash('notice', 'Se ha borrado correctamente!');

        return $this->redirectToRoute('trabajador_index');
    }

    /**
     * Creates a form to delete a Trabajador entity.
     *
     * @param Trabajador $trabajador The Trabajador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Trabajador $trabajador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trabajador_delete', array('id' => $trabajador->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
