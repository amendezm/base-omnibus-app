<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Usuario;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UsuarioType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 *
 * Función para llamar a la plantilla de administración
 * @IsGranted("ROLE_ADMIN")
 *
 */
class UsuarioController extends AbstractController
{

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/usuario", methods="GET", name="usuario")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('App:Usuario')->findAll();

        return $this->render('usuario/index.html.twig', array(
            'usuarios' => $usuarios,
        ));
    }


    public function newAction(Request $request)

    {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            //            return $this->redirectToRoute('error');
        }

        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $encoder = $this->passwordEncoder;
            $encoded = $encoder->encodePassword($usuario, $usuario->getPassword());
            $usuario->setPassword($encoded);
            $em->persist($usuario);
            $em->flush();
            $this->addFlash('notice', 'Se ha insertado correctamente el usuario!');

            return $this->redirectToRoute('usuario_index', array('id' => $usuario->getId()));
        } else if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al insertar');
        }

        return $this->render('usuario/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }
    /**
     * Finds and displays a Usuario entity.
     *
     * @Route("/{id}", name="usuario_show")
     * @Method("GET")
     */
    public function showAction(Usuario $usuario)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Usted no es Administrador no puede acceder a este vínculo!');
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function editAction(Request $request, Usuario $usuario)
    {
        //        $this->denyAccessUnlessGranted('Administrador', null, 'Usted no es Administrador no puede acceder a este vínculo!');
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm(UsuarioType::class, $usuario);
        $editForm->handleRequest($request);

        $request->getSession()->set('roles', $editForm->getData()->getRoles());
        if ($editForm->getData()->getPassword() != null) {
            $request->getSession()->set('pass', $editForm->getData()->getPassword());
        }
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $usuarios = $em->getRepository('App:Usuario')->findBy(array('usuario' => $usuario->getUsuario()));
            if (count($usuarios) == 1) {
                if ($usuario->getId() != $usuarios[0]->getId()) {
                    $this->addFlash('error', 'Existe un usuario con el nombre ' . $usuario->getUsuario());
                    return $this->redirectToRoute('usuario_index');
                }
            }

            if ($editForm->getData()->getPassword() == null) {
                $usuario->setPassword($request->getSession()->get('pass'));
            } else {
                $encoder = $this->passwordEncoder;
                $encoded = $encoder->encodePassword($usuario, $usuario->getPassword());
                $usuario->setPassword($encoded);
            }
            //$usuario->setAllRoles($request->getSession()->get('roles'));
            $em->remove($usuario);
            $usuario = new Usuario();
            $form = $this->createForm(UsuarioType::class, $usuario);
            $form->handleRequest($request);
            $usuarios = $em->getRepository('App:Usuario')->findBy(array('usuario' => $usuario->getUsuario()));
            $encoder = $this->passwordEncoder;
            $encoded = $encoder->encodePassword($usuario, $usuario->getPassword());
            $usuario->setPassword($encoded);
            $em->persist($usuario);
            $em->flush();
            $this->addFlash('notice', 'Se ha editado correctamente!');
            return $this->redirectToRoute('usuario_index', array('id' => $usuario->getId()));
        } else if ($editForm->isSubmitted() && !$editForm->isValid()) {
            $this->addFlash('error', 'Ha ocurrido algún error al editar');
        }

        return $this->render('usuario/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function deleteAction(Request $request, Usuario $usuario)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Usted no es Administrador no puede acceder a este vínculo!');
        if ($usuario->getUsuario() !== 'administrador') {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
            $this->addFlash('notice', 'Se ha borrado correctamente!');
        }
        return $this->redirectToRoute('usuario_index');
    }

    /**
     * Creates a form to delete a Usuario entity.
     *
     * @param Usuario $usuario The Usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuario $usuario)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Usted no es Administrador no puede acceder a este vínculo!');
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
