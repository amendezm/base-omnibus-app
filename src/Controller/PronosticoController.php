<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\Query;




class PronosticoController extends AbstractController
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
        $recaudacion = $em->getRepository('App:RecaudacionAnual')->findAll(Query::HYDRATE_ARRAY);

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

        list($forecastResult, $deviations) = holt_winters($dataPoints, 12);

        return $this->render("pronostico/pronostico_recaudacion.html.twig", array(
            "recaudacion" => json_encode($dataPoints),
            "forecast" => json_encode($forecastResult),
            "recaudacionPorcientos" => json_encode($recaudacionPorcientos),
            "recaudacionSemestral" => json_encode($recaudacionSemestral),
            "enero" => $dataPoints[0],
            "febrero" => $dataPoints[1],
            "marzo" => $dataPoints[2],
            "abril" => $dataPoints[3],
            "mayo" => $dataPoints[4],
            "junio" => $dataPoints[5],
            "julio" => $dataPoints[6],
            "agosto" => $dataPoints[7],
            "septiembre" => $dataPoints[8],
            "octubre" => $dataPoints[9],
            "noviembre" => $dataPoints[10],
            "diciembre" => $dataPoints[11],
        ));
    }
}

function holt_winters($data, $season_length = 7, $alpha = 0.2, $beta = 0.01, $gamma = 0.01, $dev_gamma = 0.1)
{

    // Calculate an initial trend level
    $trend1 = 0;
    for ($i = 0; $i < $season_length; $i++) {
        $trend1 += $data[$i];
    }
    $trend1 /= $season_length;

    $trend2 = 0;
    for ($i = $season_length; $i < 2 * $season_length; $i++) {
        $trend2 += $data[$i];
    }
    $trend2 /= $season_length;

    $initial_trend = ($trend2 - $trend1) / $season_length;

    // Take the first value as the initial level
    $initial_level = $data[0];

    // Build index
    $index = array();
    foreach ($data as $key => $val) {
        $index[$key] = $val / ($initial_level + ($key + 1) * $initial_trend);
    }

    // Build season buffer
    $season = array_fill(0, count($data), 0);
    for ($i = 0; $i < $season_length; $i++) {
        $season[$i] = ($index[$i] + $index[$i + $season_length]) / 2;
    }

    // Normalise season
    $season_factor = $season_length / array_sum($season);
    foreach ($season as $key => $val) {
        $season[$key] *= $season_factor;
    }


    $holt_winters = array();
    $deviations = array();
    $alpha_level = $initial_level;
    $beta_trend = $initial_trend;
    foreach ($data as $key => $value) {
        $temp_level = $alpha_level;
        $temp_trend = $beta_trend;

        $alpha_level = $alpha * $value / $season[$key] + (1.0 - $alpha) * ($temp_level + $temp_trend);
        $beta_trend = $beta * ($alpha_level - $temp_level) + (1.0 - $beta) * $temp_trend;

        $season[$key + $season_length] = $gamma * $value / $alpha_level + (1.0 - $gamma) * $season[$key];

        $holt_winters[$key] = ($alpha_level + $beta_trend * ($key + 1)) * $season[$key];
        $deviations[$key] = $dev_gamma * abs($value - $holt_winters[$key]) + (1 - $dev_gamma)
            * (isset($deviations[$key - $season_length]) ? $deviations[$key - $season_length] : 0);
    }

    /* Could forecast a bit!
    for($i = 1; $i <= $season_length; $i++) {
        $holt_winters[$key + $i] = $alpha_level + $beta_trend * $season[$key + $i];
    }
    */

    return array($holt_winters, $deviations);
}
