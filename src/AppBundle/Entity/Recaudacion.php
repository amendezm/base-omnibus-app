<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recaudacion
 *
 * @ORM\Table(name="recaudacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecaudacionRepository")
 */
class Recaudacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\HojaRuta", inversedBy="recaudaciones")
     * @ORM\JoinColumn(name="id_hojaRuta", referencedColumnName="id",onDelete="CASCADE" )
     */
    protected $hojaRuta;
    /**
     * @var string
     *
     * @ORM\Column(name="NoSello", type="string", length=10)
     */
    private $noSello;

    /**
     * @var string
     *
     * @ORM\Column(name="NoVale", type="string", length=10)
     */
    private $noVale;

    /**
     * @var float
     *
     * @ORM\Column(name="recaudacion", type="float")
     */
    private $recaudacion;
    /**
     * @var string
     *
     * @ORM\Column(name="recaudador", type="string", length=50)
     */
    private $recaudador;
    /**
     * @var \Date
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;
    /**
     * @var \Time
     *
     * @ORM\Column(name="hora", type="time")
     */
    private $hora;
    public function __toString()
    {
        return $this->getNoSello();
        return $this->getNoVale();
    }

    /**
     * @param \Date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return \Date
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $hojaRuta
     */
    public function setHojaRuta($hojaRuta)
    {
        $this->hojaRuta = $hojaRuta;
    }

    /**
     * @return mixed
     */
    public function getHojaRuta()
    {
        return $this->hojaRuta;
    }

    /**
     * @param \Time $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return \Time
     */
    public function getHora()
    {
        return $this->hora;
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
     * @param string $noSello
     */
    public function setNoSello($noSello)
    {
        $this->noSello = $noSello;
    }

    /**
     * @return string
     */
    public function getNoSello()
    {
        return $this->noSello;
    }

    /**
     * @param string $noVale
     */
    public function setNoVale($noVale)
    {
        $this->noVale = $noVale;
    }

    /**
     * @return string
     */
    public function getNoVale()
    {
        return $this->noVale;
    }

    /**
     * @param float $recaudacion
     */
    public function setRecaudacion($recaudacion)
    {
        $this->recaudacion = $recaudacion;
    }

    /**
     * @return float
     */
    public function getRecaudacion()
    {
        return $this->recaudacion;
    }

    /**
     * @param string $recaudador
     */
    public function setRecaudador($recaudador)
    {
        $this->recaudador = $recaudador;
    }

    /**
     * @return string
     */
    public function getRecaudador()
    {
        return $this->recaudador;
    }
}
