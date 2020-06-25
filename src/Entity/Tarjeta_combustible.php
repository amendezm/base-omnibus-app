<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tarjeta_combustible
 *
 * @ORM\Table(name="tarjeta_combustible")
 * @ORM\Entity(repositoryClass="App\Repository\Tarjeta_combustibleRepository")
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
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoCombustible", inversedBy="tarjetaCombustible")
     * @ORM\JoinColumn(name="id_combustibleTipo", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $combustibleTipo;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_vencimiento", type="date")
     */
    private $fechaVencimiento;

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
     * @ORM\OneToMany(targetEntity="App\Entity\CombustibleHabilitado", mappedBy="tarjeta", orphanRemoval=true)
     */
    private $habilitaciones;

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
        $this->combustiblesAsignados = new ArrayCollection();
        $this->habilitaciones = new ArrayCollection();
    }

    /**
     * Add omnibus
     *
     * @param \App\Entity\Omnibus $omnibus
     *
     * @return Tarjeta_combustible
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
     * Add combustibleTipo
     *
     * @param \App\Entity\TipoCombustible $combustibleTipo
     *
     * @return Tarjeta_combustible
     */
    public function addCombustibleTipo(\App\Entity\TipoCombustible $combustibleTipo)
    {
        $this->combustibleTipo[] = $combustibleTipo;

        return $this;
    }

    /**
     * Remove combustibleTipo
     *
     * @param \App\Entity\TipoCombustible $combustibleTipo
     */
    public function removeCombustibleTipo(\App\Entity\TipoCombustible $combustibleTipo)
    {
        $this->combustibleTipo->removeElement($combustibleTipo);
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
     * @return Collection|CombustibleHabilitado[]
     */
    public function getHabilitaciones(): Collection
    {
        return $this->habilitaciones;
    }

    public function addHabilitacione(CombustibleHabilitado $habilitacione): self
    {
        if (!$this->habilitaciones->contains($habilitacione)) {
            $this->habilitaciones[] = $habilitacione;
            $habilitacione->setTarjeta($this);
        }

        return $this;
    }

    public function removeHabilitacione(CombustibleHabilitado $habilitacione): self
    {
        if ($this->habilitaciones->contains($habilitacione)) {
            $this->habilitaciones->removeElement($habilitacione);
            // set the owning side to null (unless already changed)
            if ($habilitacione->getTarjeta() === $this) {
                $habilitacione->setTarjeta(null);
            }
        }

        return $this;
    }
}
