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
        $recaudacion = $em->getRepository('AppBundle:RecaudacionAnual')->findAll(Query::HYDRATE_ARRAY);

        $dataPoints = array();

        foreach ($recaudacion as $array) {
            array_push($dataPoints, $array->getEnero());
            array_push($dataPoints, $array->getFebrero());
            array_push($dataPoints, $array->getMarzo());
            array_push($dataPoints, $array->getAbril());
            array_push($dataPoints, $array->getMayo());
            array_push($dataPoints, $array->getJunio());
            array_push($dataPoints, $array->getJulio());
            array_push($dataPoints, $array->getAgosto());
            array_push($dataPoints, $array->getSeptiembre());
            array_push($dataPoints, $array->getOctubre());
            array_push($dataPoints, $array->getNoviembre());
            array_push($dataPoints, $array->getDiciembre());
        }


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
