<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query;




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
        $em = $this->getDoctrine()->getManager();
        $recaudacion = $em->getRepository('AppBundle:RecaudacionAnual')->findAll(Query::HYDRATE_ARRAY)[0];

        $dataPoints = array(
            $recaudacion->getEnero(),
            $recaudacion->getFebrero(),
            $recaudacion->getMarzo(),
            $recaudacion->getAbril(),
            $recaudacion->getMayo(),
            $recaudacion->getJunio(),
            $recaudacion->getJulio(),
            $recaudacion->getAgosto(),
            $recaudacion->getSeptiembre(),
            $recaudacion->getOctubre(),
            $recaudacion->getNoviembre(),
            $recaudacion->getDiciembre()
        );

        $total = array_sum($dataPoints);
        $primerSemestre = array_sum(array_slice($dataPoints, 0, 6));

        $primerSemestrePorciento = round(($primerSemestre / $total) * 100, 2);
        $segundoSemestrePorciento = 100 - $primerSemestrePorciento;

        $recaudacionPorcientos = array(
            "primerSemestre" => $primerSemestrePorciento,
            "segundoSemestre" => $segundoSemestrePorciento
        );

        $recaudacionSemestral = array(
            "primerSemestre" => round($primerSemestre, 2),
            "segundoSemestre" => round($total - $primerSemestre, 2)
        );

        return $this->render("pronostico/pronostico_recaudacion.html.twig", array("recaudacion" => json_encode($dataPoints), "recaudacionPorcientos" => json_encode($recaudacionPorcientos), "recaudacionSemestral" => json_encode($recaudacionSemestral)));
    }
}
