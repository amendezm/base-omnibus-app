<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencias_HR
 *
 * @ORM\Table(name="incidencia_HR")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Incidencia_HRRepository")
 */
class Incidencias_HR
{
    /**
     * @var int
     *
     * @orm\Column(name="idincidencia_hr", type="integer")
     * @orm\Id
     * @orm\Generatedvalue(strategy="AUTO")
     *
     */
    private $idincidencia_hr;

    /**
     * @orm\Manytoone(targetEntity="AppBundle\Entity\Incidencia", inversedBy="incidencia_hr")
     * @orm\Joincolumn(name="idIncidencia", referencedColumnName="idincidencia")
     */
    protected $incidencias;

    /**
     * @orm\Manytoone(targetEntity="AppBundle\Entity\HojaRuta", inversedBy="incidencia_hr")
     * @orm\Joincolumn(name="idHojaRuta", referencedColumnName="id")
     */
    protected $hojaRuta;


//    public function __toString()
//    {
//        return $this->getDetalles();
//    }

    /**
     * constructor
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getHojaRuta()
    {
        return $this->hojaRuta;
    }

    /**
     * @param mixed $hojaRuta
     */
    public function setHojaRuta($hojaRuta)
    {
        $this->hojaRuta = $hojaRuta;
    }

    /**
     * @return int
     */
    public function getIdincidenciaHr()
    {
        return $this->idincidencia_hr;
    }

    /**
     * @param int $idincidencia_hr
     */
    public function setIdincidenciaHr($idincidencia_hr)
    {
        $this->idincidencia_hr = $idincidencia_hr;
    }

    /**
     * @return mixed
     */
    public function getIncidencias()
    {
        return $this->incidencias;
    }

    /**
     * @param mixed $incidencias
     */
    public function setIncidencias($incidencias)
    {
        $this->incidencias = $incidencias;
    }



}
