<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ruta
 *
 * @ORM\Table(name="ruta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RutaRepository")
 */
class Ruta
{
    /**
     * @var int
     *
     * @orm\Column(name="id", type="integer")
     * @orm\Id
     * @orm\Generatedvalue(strategy="AUTO")
     *
     */
    private $id;
    /**
     * @var string
     *
     * @orm\Column(name="noruta", type="string", length=3)
     */
    private $noruta;

    /**
     * @var float
     *
     * @orm\Column(name="distanciakm", type="float")
     */
    private $distanciakm;

    /**
     * @orm\Onetomany(targetEntity="AppBundle\Entity\HojaRuta", mappedBy="ruta")
     */
    protected $hojaruta;
    /**
     * @orm\Onetomany(targetEntity="AppBundle\Entity\EscogidaTurno", mappedBy="ruta")
     */
    protected $escogida;

    /**
     * @orm\Onetomany(targetEntity="AppBundle\Entity\DiasSemana", mappedBy="ruta")
     */
    protected $dias;

    /**
     * @orm\Manytoone(targetEntity="AppBundle\Entity\Pto_expedicion", inversedBy="ruta")
     * @orm\Joincolumn(name="id_expedicion", referencedColumnName="id")
     */
    protected $expedicion;

    /**
     * @orm\Manytoone(targetEntity="AppBundle\Entity\Servicio", inversedBy="ruta")
     * @orm\Joincolumn(name="servicio_id", referencedColumnName="id")
     */
    protected $servicio;

    /**
     * @var int
     *
     * @orm\Column(name="cantpasajerospromedio", type="integer")
     */
    private $cantpasajerospromedio;

    /**
     * @var string
     *
     * @orm\Column(name="salida", type="string", length=255)
     */
    private $salida;

    /**
     * @var float
     *
     * @orm\Column(name="kmSalida", type="float", nullable=true)
     */
    private $kmSalida;

    /**
     * @var string
     *
     * @orm\Column(name="destino", type="string", length=255)
     */
    private $destino;

    /**
     * @var string
     *
     * @orm\Column(name="frecuencia", type="string", length=255)
     */
    private $frecuencia;

    /**
     * @var int
     *
     * @orm\Column(name="recaudacion", type="integer")
     */
    private $recaudacion;

    /**
     * @var int
     *
     * @orm\Column(name="cantidadmedios", type="integer")
     */
    private $cantidadmedios;
    /**
     * @var float
     *
     * @orm\Column(name="preciopasaje", type="float")
     */
    private $preciopasaje;

    /**
     * @var int
     *
     * @orm\Column(name="cantdiassemana_trabajo", type="integer")
     */
    private $cantdiassemana_trabajo;

    public function __toString()
    {
        return $this->noruta;
    }

    /**
     * constructor
     */
    public function __construct()
    {
        $this->hojaruta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * add hojarutum
     *
     * @param \AppBundle\Entity\HojaRuta $hojarutum
     *
     * @return ruta
     */
    public function addHojaRutum(\AppBundle\Entity\HojaRuta $hojarutum)
    {
        $this->hojaruta[] = $hojarutum;

        return $this;
    }

    /**
     * remove hojarutum
     *
     * @param \AppBundle\Entity\HojaRuta $hojarutum
     */
    public function removeHojaRutum(\AppBundle\Entity\HojaRuta $hojarutum)
    {
        $this->hojaruta->removeElement($hojarutum);
    }

    /**
     * add dia
     *
     * @param \AppBundle\Entity\DiasSemana $dia
     *
     * @return ruta
     */
    public function addDia(\AppBundle\Entity\DiasSemana $dia)
    {
        $this->dias[] = $dia;

        return $this;
    }

    /**
     * remove dia
     *
     * @param \AppBundle\Entity\DiasSemana $dia
     */
    public function removeDia(\AppBundle\Entity\DiasSemana $dia)
    {
        $this->dias->removeElement($dia);
    }

    /**
     * add servicio
     *
     * @param \AppBundle\Entity\Servicio $servicio
     *
     * @return ruta
     */
    public function addServicio(\AppBundle\Entity\Servicio $servicio)
    {
        $this->servicio[] = $servicio;

        return $this;
    }

    /**
     * remove servicio
     *
     * @param \AppBundle\Entity\Servicio $servicio
     */
    public function removeServicio(\AppBundle\Entity\Servicio $servicio)
    {
        $this->servicio->removeElement($servicio);
    }

    /**
     * add escogida
     *
     * @param \AppBundle\Entity\EscogidaTurno $escogida
     *
     * @return ruta
     */
    public function addEscogida(\AppBundle\Entity\EscogidaTurno $escogida)
    {
        $this->escogida[] = $escogida;

        return $this;
    }

    /**
     * remove escogida
     *
     * @param \AppBundle\Entity\EscogidaTurno $escogida
     */
    public function removeEscogida(\AppBundle\Entity\EscogidaTurno $escogida)
    {
        $this->escogida->removeElement($escogida);
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $noruta
     */
    public function setNoruta($noruta)
    {
        $this->noruta = $noruta;
    }

    /**
     * @return string
     */
    public function getNoruta()
    {
        return $this->noruta;
    }

    /**
     * @param int $cantdiassemana_trabajo
     */
    public function setCantdiassemanaTrabajo($cantdiassemana_trabajo)
    {
        $this->cantdiassemana_trabajo = $cantdiassemana_trabajo;
    }

    /**
     * @return int
     */
    public function getCantdiassemanaTrabajo()
    {
        return $this->cantdiassemana_trabajo;
    }

    /**
     * @param int $cantidadmedios
     */
    public function setCantidadmedios($cantidadmedios)
    {
        $this->cantidadmedios = $cantidadmedios;
    }

    /**
     * @return int
     */
    public function getCantidadmedios()
    {
        return $this->cantidadmedios;
    }

    /**
     * @param int $cantpasajerospromedio
     */
    public function setCantpasajerospromedio($cantpasajerospromedio)
    {
        $this->cantpasajerospromedio = $cantpasajerospromedio;
    }

    /**
     * @return int
     */
    public function getCantpasajerospromedio()
    {
        return $this->cantpasajerospromedio;
    }

    /**
     * @param string $destino
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param mixed $dias
     */
    public function setDias($dias)
    {
        $this->dias = $dias;
    }

    /**
     * @return mixed
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @param mixed $servicio
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }

    /**
     * @return mixed
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * @param float $distanciakm
     */
    public function setDistanciakm($distanciakm)
    {
        $this->distanciakm = $distanciakm;
    }

    /**
     * @return float
     */
    public function getDistanciakm()
    {
        return $this->distanciakm;
    }

    /**
     * @param mixed $escogida
     */
    public function setEscogida($escogida)
    {
        $this->escogida = $escogida;
    }

    /**
     * @return mixed
     */
    public function getEscogida()
    {
        return $this->escogida;
    }

    /**
     * @param mixed $expedicion
     */
    public function setExpedicion($expedicion)
    {
        $this->expedicion = $expedicion;
    }

    /**
     * @return mixed
     */
    public function getExpedicion()
    {
        return $this->expedicion;
    }

    /**
     * @param string $frecuencia
     */
    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;
    }

    /**
     * @return string
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /**
     * @param mixed $hojaruta
     */
    public function setHojaruta($hojaruta)
    {
        $this->hojaruta = $hojaruta;
    }

    /**
     * @return mixed
     */
    public function getHojaruta()
    {
        return $this->hojaruta;
    }

    /**
     * @param float $preciopasaje
     */
    public function setPreciopasaje($preciopasaje)
    {
        $this->preciopasaje = $preciopasaje;
    }

    /**
     * @return float
     */
    public function getPreciopasaje()
    {
        return $this->preciopasaje;
    }

    /**
     * @param int $recaudacion
     */
    public function setRecaudacion($recaudacion)
    {
        $this->recaudacion = $recaudacion;
    }

    /**
     * @return int
     */
    public function getRecaudacion()
    {
        return $this->recaudacion;
    }

    /**
     * @param string $salida
     */
    public function setSalida($salida)
    {
        $this->salida = $salida;
    }

    /**
     * @return string
     */
    public function getSalida()
    {
        return $this->salida;
    }

    /**
     * Set kmSalida
     *
     * @param float $kmSalida
     *
     * @return Ruta
     */
    public function setKmSalida($kmSalida)
    {
        $this->kmSalida = $kmSalida;

        return $this;
    }

    /**
     * Get kmSalida
     *
     * @return float
     */
    public function getKmSalida()
    {
        return $this->kmSalida;
    }
}
