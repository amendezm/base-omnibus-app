<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarjeta_combustible
 *
 * @ORM\Table(name="tarjeta_combustible")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Tarjeta_combustibleRepository")
 */
class Tarjeta_combustible
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
     * @var int
     *
     * @ORM\Column(name="asignacion", type="integer", nullable=true)
     */

    private $asignacion;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TipoCombustible", inversedBy="tarjetaCombustible")
     * @ORM\JoinColumn(name="id_combustibleTipo", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $combustibleTipo;

    /**
     * @ORM\OneToMany(targetEntity="Omnibus", mappedBy="tarjetaCombustible")
     */
    protected $omnibus;

    /**
     * @var int
     *
     * @ORM\Column(name="gastoReal", type="integer",nullable=true)
     */
    private $gastoReal;

    /**
 * @var \DateTime
 *
 * @ORM\Column(name="fecha_vencimiento", type="date")
 */
    private $fechaVencimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_asignacion", type="date")
     */
    private $fechaAsignacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_combustible", type="string", length=255,nullable=true)
     */
    private $tipoCombustible;
    /**
     * @var string
     *
     * @ORM\Column(name="saldoActual", type="string", length=255)
     */
    private $saldoActual;

    /**
     * @var string
     *
     * @ORM\Column(name="noTarjeta", type="string", length=255)
     */
    private $noTarjeta;

    /**
     * @var string
     *
     * @ORM\Column(name="ping", type="string", length=255)
     */
    private $ping;

    public function __toString()
    {
        return $this->noTarjeta;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->omnibus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add omnibus
     *
     * @param \AppBundle\Entity\Omnibus $omnibus
     *
     * @return Tarjeta_combustible
     */
    public function addOmnibus(\AppBundle\Entity\Omnibus $omnibus)
    {
        $this->omnibus[] = $omnibus;

        return $this;
    }

    /**
     * Remove omnibus
     *
     * @param \AppBundle\Entity\Omnibus $omnibus
     */
    public function removeOmnibus(\AppBundle\Entity\Omnibus $omnibus)
    {
        $this->omnibus->removeElement($omnibus);
    }

    /**
     * Add combustibleTipo
     *
     * @param \AppBundle\Entity\TipoCombustible $combustibleTipo
     *
     * @return Tarjeta_combustible
     */
    public function addCombustibleTipo(\AppBundle\Entity\TipoCombustible $combustibleTipo)
    {
        $this->combustibleTipo[] = $combustibleTipo;

        return $this;
    }

    /**
     * Remove combustibleTipo
     *
     * @param \AppBundle\Entity\TipoCombustible $combustibleTipo
     */
    public function removeCombustibleTipo(\AppBundle\Entity\TipoCombustible $combustibleTipo)
    {
        $this->combustibleTipo->removeElement($combustibleTipo);
    }

    /**
     * @return int
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }

    /**
     * @param int $asignacion
     */
    public function setAsignacion($asignacion)
    {
        $this->asignacion = $asignacion;
    }


    /**
     * @param mixed $combustibleTipo
     */
    public function setCombustibleTipo($combustibleTipo)
    {
        $this->combustibleTipo = $combustibleTipo;
    }

    /**
     * @return mixed
     */
    public function getCombustibleTipo()
    {
        return $this->combustibleTipo;
    }

    /**
     * @param \DateTime $fechaAsignacion
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;
    }

    /**
     * @return \DateTime
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * @param \DateTime $fechaVencimiento
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    /**
     * @return \DateTime
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * @param int $gastoReal
     */
    public function setGastoReal($gastoReal)
    {
        $this->gastoReal = $gastoReal;
    }

    /**
     * @return int
     */
    public function getGastoReal()
    {
        return $this->gastoReal;
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
     * @param string $noTarjeta
     */
    public function setNoTarjeta($noTarjeta)
    {
        $this->noTarjeta = $noTarjeta;
    }

    /**
     * @return string
     */
    public function getNoTarjeta()
    {
        return $this->noTarjeta;
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
     * @param string $ping
     */
    public function setPing($ping)
    {
        $this->ping = $ping;
    }

    /**
     * @return string
     */
    public function getPing()
    {
        return $this->ping;
    }

    /**
     * @param string $saldoActual
     */
    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;
    }

    /**
     * @return string
     */
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }

    /**
     * @param string $tipoCombustible
     */
    public function setTipoCombustible($tipoCombustible)
    {
        $this->tipoCombustible = $tipoCombustible;
    }

    /**
     * @return string
     */
    public function getTipoCombustible()
    {
        return $this->tipoCombustible;
    }

}
