<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * HojaRuta
 *
 * @ORM\Table(name="hoja_ruta")
 * @ORM\Entity(repositoryClass="App\Repository\HojaRutaRepository")
 */
class HojaRuta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */

    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="NoHojaRuta", type="string", length=5)
     */
    private $NoHojaRuta;
    /**
    /**
     * @var float
     *
     * @ORM\Column(name="basico", type="float")
     *
     */
    private $basico;
    /**
     * @var float
     *
     * @ORM\Column(name="conIncremento", type="float")
     */
    private $conIncremento;
    /**
     * @var float
     *
     * @ORM\Column(name="turnopartido", type="float")
     */
    private $turnopartido;
    /**
     * @var float
     *
     * @ORM\Column(name="confronta", type="float")
     */
    private $confronta;
    /**
     * @var float
     *
     * @ORM\Column(name="voluntario", type="float")
     */
    private $voluntario;

    /**
     * @var float
     *
     * @ORM\Column(name="totalHoras", type="float", nullable=true)
     */
    private $totalHoras;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidadViajes", type="integer")
     */
    private $cantidadViajes;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidadSalidas", type="integer")
     */
    private $cantidadSalidas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Turno", inversedBy="hojaRute")
     * @ORM\JoinColumn(name="id_turno", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $turno;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Omnibus", inversedBy="hojaRute")
     * @ORM\JoinColumn(name="id_omnibus", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $omnibus;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Recaudacion", mappedBy="hojaRute")
     */
    protected $recaudaciones;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ruta", inversedBy="hojaRute")
     * @ORM\JoinColumn(name="id_ruta", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $ruta;

//    /**
//     * @orm\Manytoone(targetEntity="App\Entity\Incidencia", inversedBy="hojaRuta")
//     * @orm\Joincolumn(name="id_incidencia", referencedColumnName="idincidencia")
//     */
//    protected $incidenciahr;

    /**
     * @orm\OneToMany(targetEntity="App\Entity\Incidencias_HR", mappedBy="hojaRuta")
     */
    protected $incidencia_hr;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recaudaciones = new \Doctrine\Common\Collections\ArrayCollection();
//        $this->incidencia_hr = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add recaudacione
     *
     * @param \App\Entity\Recaudacion $recaudacione
     *
     * @return HojaRuta
     */
    public function addRecaudacione(\App\Entity\Recaudacion $recaudacione)
    {
        $this->recaudaciones[] = $recaudacione;

        return $this;
    }

    /**
     * Remove recaudacione
     *
     * @param \App\Entity\Recaudacion $recaudacione
     */
    public function removeRecaudacione(\App\Entity\Recaudacion $recaudacione)
    {
        $this->recaudaciones->removeElement($recaudacione);
    }

    public function __toString(){
        return $this->getNoHojaRuta();
    }

    /**
     * @return mixed
     */
    public function getIncidenciaHr()
    {
        return $this->incidencia_hr;
    }

    /**
     * @param mixed $incidencia_hr
     */
    public function setIncidenciaHr($incidencia_hr)
    {
        $this->incidencia_hr = $incidencia_hr;
    }

    /**
     * @param string $NoHojaRuta
     */
    public function setNoHojaRuta($NoHojaRuta)
    {
        $this->NoHojaRuta = $NoHojaRuta;
    }

    /**
     * @return string
     */
    public function getNoHojaRuta()
    {
        return $this->NoHojaRuta;
    }

    /**
     * @param float $basico
     */
    public function setBasico($basico)
    {
        $this->basico = $basico;
    }

    /**
     * @return float
     */
    public function getBasico()
    {
        return $this->basico;
    }

    /**
     * @param int $cantidadSalidas
     */
    public function setCantidadSalidas($cantidadSalidas)
    {
        $this->cantidadSalidas = $cantidadSalidas;
    }

    /**
     * @return int
     */
    public function getCantidadSalidas()
    {
        return $this->cantidadSalidas;
    }

    /**
     * @param int $cantidadViajes
     */
    public function setCantidadViajes($cantidadViajes)
    {
        $this->cantidadViajes = $cantidadViajes;
    }

    /**
     * @return int
     */
    public function getCantidadViajes()
    {
        return $this->cantidadViajes;
    }

    /**
     * @param float $conIncremento
     */
    public function setConIncremento($conIncremento)
    {
        $this->conIncremento = $conIncremento;
    }

    /**
     * @return float
     */
    public function getConIncremento()
    {
        return $this->conIncremento;
    }

    /**
     * @param float $confronta
     */
    public function setConfronta($confronta)
    {
        $this->confronta = $confronta;
    }

    /**
     * @return float
     */
    public function getConfronta()
    {
        return $this->confronta;
    }

    /**
     * @param \DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * @param string $observaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    /**
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $omnibus
     */
    public function setOmnibus($omnibus)
    {
        $this->omnibus = $omnibus;
    }

    /**
     * @return mixed
     */
    public function getOmnibus()
    {
        return $this->omnibus;
    }

    /**
     * @param mixed $recaudaciones
     */
    public function setRecaudaciones($recaudaciones)
    {
        $this->recaudaciones = $recaudaciones;
    }

    /**
     * @return mixed
     */
    public function getRecaudaciones()
    {
        return $this->recaudaciones;
    }

    /**
     * @param mixed $ruta
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * @return mixed
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * @param float $totalHoras
     */
    public function setTotalHoras($totalHoras)
    {
        $this->totalHoras = $totalHoras;
    }

    /**
     * @return float
     */
    public function getTotalHoras()
    {
        return $this->totalHoras;
    }

    /**
     * @param mixed $turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    /**
     * @return mixed
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param float $turnopartido
     */
    public function setTurnopartido($turnopartido)
    {
        $this->turnopartido = $turnopartido;
    }

    /**
     * @return float
     */
    public function getTurnopartido()
    {
        return $this->turnopartido;
    }

    /**
     * @param float $voluntario
     */
    public function setVoluntario($voluntario)
    {
        $this->voluntario = $voluntario;
    }

    /**
     * @return float
     */
    public function getVoluntario()
    {
        return $this->voluntario;
    }




    /**
     * Add incidenciaHr
     *
     * @param \App\Entity\Incidencias_HR $incidenciaHr
     *
     * @return HojaRuta
     */
    public function addIncidenciaHr(\App\Entity\Incidencias_HR $incidenciaHr)
    {
        $this->incidencia_hr[] = $incidenciaHr;

        return $this;
    }

    /**
     * Remove incidenciaHr
     *
     * @param \App\Entity\Incidencias_HR $incidenciaHr
     */
    public function removeIncidenciaHr(\App\Entity\Incidencias_HR $incidenciaHr)
    {
        $this->incidencia_hr->removeElement($incidenciaHr);
    }
}
