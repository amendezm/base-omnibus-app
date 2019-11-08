<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PronosticoController extends Controller
{
    /**
     * @Route("/pronostico/combustible")
     */

    public function combustibleAction()
    {
        return $this->render("pronostico/pronostico_combustible.html.twig");
    }

    /**
     * @Route("/pronostico/recaudacion")
     */

    public function recaudacionAction()
    {
        return $this->render("pronostico/pronostico_recaudacion.html.twig");
    }
}
