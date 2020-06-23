<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CombustibleHabilitado
 *
 * @ORM\Table(name="combustible_habilitado")
 * @ORM\Entity(repositoryClass="App\Repository\CombustibleHabilitadoRepository")
 */
class CombustibleHabilitado
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
     * @var int
     *
     * @ORM\Column(name="noComprobante", type="integer")
     */
    private $noComprobante;

    /**
     * @var string
     *
     * @ORM\Column(name="cupet", type="string", length=255, nullable=true)
     */
    private $cupet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitador", type="string", length=255, nullable=true)
     */
    private $habilitador;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Omnibus")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $omnibus;

    /**
     * @var float
     *
     * @ORM\Column(name="importe", type="float")
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="cantLitros", type="float")
     */
    private $cantLitros;

    /**
     * @var int
     *
     * @ORM\Column(name="noControl", type="integer")
     */
    private $noControl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tarjeta_combustible", inversedBy="habilitaciones")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tarjeta;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set noComprobante
     *
     * @param integer $noComprobante
     *
     * @return CombustibleHabilitado
     */
    public function setNoComprobante($noComprobante)
    {
        $this->noComprobante = $noComprobante;

        return $this;
    }

    /**
     * Get noComprobante
     *
     * @return int
     */
    public function getNoComprobante()
    {
        return $this->noComprobante;
    }

    /**
     * Set cupet
     *
     * @param string $cupet
     *
     * @return CombustibleHabilitado
     */
    public function setCupet($cupet)
    {
        $this->cupet = $cupet;

        return $this;
    }

    /**
     * Get cupet
     *
     * @return string
     */
    public function getCupet()
    {
        return $this->cupet;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return CombustibleHabilitado
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set habilitador
     *
     * @param string $habilitador
     *
     * @return CombustibleHabilitado
     */
    public function setHabilitador($habilitador)
    {
        $this->habilitador = $habilitador;

        return $this;
    }

    /**
     * Get habilitador
     *
     * @return string
     */
    public function getHabilitador()
    {
        return $this->habilitador;
    }


    public function setOmnibus(?Omnibus $omnibus): self
    {
        $this->omnibus = $omnibus;
        return $this;
    }

    public function getOmnibus(): ?Omnibus
    {
        return $this->omnibus;
    }

    /**
     * Set importe
     *
     * @param float $importe
     *
     * @return CombustibleHabilitado
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set cantLitros
     *
     * @param float $cantLitros
     *
     * @return CombustibleHabilitado
     */
    public function setCantLitros($cantLitros)
    {
        $this->cantLitros = $cantLitros;

        return $this;
    }

    /**
     * Get cantLitros
     *
     * @return float
     */
    public function getCantLitros()
    {
        return $this->cantLitros;
    }

    /**
     * Set noControl
     *
     * @param integer $noControl
     *
     * @return CombustibleHabilitado
     */
    public function setNoControl($noControl)
    {
        $this->noControl = $noControl;

        return $this;
    }

    /**
     * Get noControl
     *
     * @return int
     */
    public function getNoControl()
    {
        return $this->noControl;
    }

    public function getTarjeta(): ?Tarjeta_combustible
    {
        return $this->tarjeta;
    }

    public function setTarjeta(?Tarjeta_combustible $tarjeta): self
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }
}
