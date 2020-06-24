<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EscogidaTurno
 *
 * @ORM\Table(name="escogida_turno")
 * @ORM\Entity(repositoryClass="App\Repository\EscogidaTurnoRepository")
 */
class EscogidaTurno
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
    /*
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="empieza", type="time")
     */
    private $empieza;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sale", type="time")
     */
    private $sale;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="termina", type="time")
     */
    private $termina;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidadviajes", type="integer")
     */
    private $cantidadViajes;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ruta", inversedBy="escogida")
     * @ORM\JoinColumn(name="id_ruta", referencedColumnName="id")
     */

    protected $ruta;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Chofer", inversedBy="escogida")
     * @ORM\JoinColumn(name="chofer_id", referencedColumnName="id", onDelete="CASCADE")
     */

    protected $chofer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Omnibus", inversedBy="escogida")
     * @ORM\JoinColumn(name="id_omnibus", referencedColumnName="id")
     */
    protected $omnibus;

    /**
     * @var string
     *
     * @ORM\Column(name="turno", type="string", length=5)
     */
    private $turno;

    /**
     * @var int
     *
     * @ORM\Column(name="trabajahoras", type="integer")
     */
    private $trabajaHoras;

    /**
     * @var int
     *
     * @ORM\Column(name="descansodias", type="integer")
     */
    private $descansoDias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="descansocomienza", type="date", nullable=true)
     */
    private $descansoComienza;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="descansotermina", type="date", nullable=true)
     */
    private $descansoTermina;

    /**
     * @var string
     *
     * @ORM\Column(name="periodoescogida", type="string", nullable=true)
     */
    private $periodoEscogida;

    public function __toString()
    {
        return (string) $this->id;
    }
    /**const
     * Constructor
     */
    public function __construct()
    {
        $this->ruta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->chofer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->omnibus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ruta
     *
     * @param \App\Entity\Ruta $ruta
     *
     * @return EscogidaTurno
     */
    public function addRuta(\App\Entity\Ruta $ruta)
    {
        $this->ruta[] = $ruta;

        return $this;
    }

    /**
     * Remove ruta
     *
     * @param \App\Entity\Ruta $ruta
     */
    public function removeRuta(\App\Entity\Ruta $ruta)
    {
        $this->ruta->removeElement($ruta);
    }


    /**
     * Add chofer
     *
     * @param \App\Entity\Chofer $chofer
     *
     * @return EscogidaTurno
     */
    public function addChofer(\App\Entity\Chofer $chofer)
    {
        $this->chofer[] = $chofer;

        return $this;
    }

    /**
     * Remove chofer
     *
     * @param \App\Entity\Chofer $chofer
     */
    public function removeChofer(\App\Entity\Chofer $chofer)
    {
        $this->chofer->removeElement($chofer);
    }

    /**
     * Add omnibus
     *
     * @param \App\Entity\Omnibus $omnibus
     *
     * @return EscogidaTurno
     */
    public function addOmnibus(\App\Entity\Omnibus $omnibus)
    {
        $this->omnibus[] = $omnibus;

        return $this;
    }

    /**
     * Remove omnibus
     *
     * @param \App\Entity\Omnibus $omnibus
     */
    public function removeOmnibus(\App\Entity\Omnibus $omnibus)
    {
        $this->omnibus->removeElement($omnibus);
    }

    /**
     * Add rutum
     *
     * @param \App\Entity\Ruta $rutum
     *
     * @return EscogidaTurno
     */
    public function addRutum(\App\Entity\Ruta $rutum)
    {
        $this->ruta[] = $rutum;

        return $this;
    }

    /**
     * Remove rutum
     *
     * @param \App\Entity\Ruta $rutum
     */
    public function removeRutum(\App\Entity\Ruta $rutum)
    {
        $this->ruta->removeElement($rutum);
    }

    /**
     * @return int
     */
    public function getCantidadViajes()
    {
        return $this->cantidadViajes;
    }

    /**
     * @param int $cantidadViajes
     */
    public function setCantidadViajes($cantidadViajes)
    {
        $this->cantidadViajes = $cantidadViajes;
    }

    /**
     * @return mixed
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * @param mixed $chofer
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;
    }

    /**
     * @return \DateTime
     */
    public function getDescansoComienza()
    {
        return $this->descansoComienza;
    }

    /**
     * @param \DateTime $descansoComienza
     */
    public function setDescansoComienza($descansoComienza)
    {
        $this->descansoComienza = $descansoComienza;
    }

    /**
     * @return int
     */
    public function getDescansoDias()
    {
        return $this->descansoDias;
    }

    /**
     * @param int $descansoDias
     */
    public function setDescansoDias($descansoDias)
    {
        $this->descansoDias = $descansoDias;
    }

    /**
     * @return \DateTime
     */
    public function getDescansoTermina()
    {
        return $this->descansoTermina;
    }

    /**
     * @param \DateTime $descansoTermina
     */
    public function setDescansoTermina($descansoTermina)
    {
        $this->descansoTermina = $descansoTermina;
    }

    /**
     * @return \DateTime
     */
    public function getEmpieza()
    {
        return $this->empieza;
    }

    /**
     * @param \DateTime $empieza
     */
    public function setEmpieza($empieza)
    {
        $this->empieza = $empieza;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOmnibus()
    {
        return $this->omnibus;
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
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * @param mixed $ruta
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;
    }

    /**
     * @return \DateTime
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * @param \DateTime $sale
     */
    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    /**
     * @return \DateTime
     */
    public function getTermina()
    {
        return $this->termina;
    }

    /**
     * @param \DateTime $termina
     */
    public function setTermina($termina)
    {
        $this->termina = $termina;
    }

    /**
     * @return int
     */
    public function getTrabajaHoras()
    {
        return $this->trabajaHoras;
    }

    /**
     * @param int $trabajaHoras
     */
    public function setTrabajaHoras($trabajaHoras)
    {
        $this->trabajaHoras = $trabajaHoras;
    }

    /**
     * @return string
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * @param string $turno
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    /**
     * @return string
     */
    public function getPeriodoEscogida()
    {
        return $this->periodoEscogida;
    }

    /**
     * @param string $periodoEscogida
     */
    public function setPeriodoEscogida($periodoEscogida)
    {
        $this->periodoEscogida = $periodoEscogida;
    }
}
