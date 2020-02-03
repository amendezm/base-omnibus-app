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
class CombustibleHabilitadoController extends Controller
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
}
