<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        //Llamamos al servicio de autenticacion
        $authenticationUtils = $this->get('security.authentication_utils');

        // conseguir el error del login si falla
        $error = $authenticationUtils->getLastAuthenticationError();

        // ultimo nombre de usuario que se ha intentado identificar
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('@App/Default/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
//        return $this->render(
//            'AppBundle:user:login.html.twig', array(
//            'last_username' => $lastUsername,
//            'error' => $error,
//        ));
    }
	public function loginCheckAction(){
	
	}
}
