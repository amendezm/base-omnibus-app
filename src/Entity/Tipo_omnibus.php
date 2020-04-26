<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo_omnibus
 *
 * @ORM\Table(name="tipo_omnibus")
 * @ORM\Entity(repositoryClass="App\Repository\Tipo_omnibusRepository")
 */
class Tipo_omnibus
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
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;
    /**
     * @var int
     *
     * @ORM\Column(name="desviacion", type="integer")
     */
    private $desviacion;

    /**
     * @var float
     *
     * @ORM\Column(name="indiceConsumoNormado", type="float")
     */
    private $indiceConsumoNormado;
    /**
     * @var int
     *
     * @ORM\Column(name="cantidadkmtsxlitro", type="integer")
     */
    private $cantidadKmtsXlitro;
    /**
     * @var int
     *
     * @ORM\Column(name="capacidad_total", type="integer", nullable=true)
     */
    private $capacidad_total;

    /**
     * @var int
     *
     * @ORM\Column(name="capacidad_sentados", type="integer")
     */
    private $capacidad_sentados;

    /**
     * @var int
     *
     * @ORM\Column(name="capacidad_parados", type="integer")
     */
    private $capacidad_parados;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Omnibus", mappedBy="typeOmnibus")
     */
    protected $omnibus;

    public function __toString()
    {
        return $this->tipo;
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
     * @param \App\Entity\Omnibus $omnibus
     *
     * @return Tipo_omnibus
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
     * @return int
     */
    public function getCantidadKmtsXlitro()
    {
        return $this->cantidadKmtsXlitro;
    }

    /**
     * @param int $cantidadKmtsXlitro
     */
    public function setCantidadKmtsXlitro($cantidadKmtsXlitro)
    {
        $this->cantidadKmtsXlitro = $cantidadKmtsXlitro;
    }


    /**
     * @return int
     */
    public function getCapacidadParados()
    {
        return $this->capacidad_parados;
    }

    /**
     * @param int $capacidad_parados
     */
    public function setCapacidadParados($capacidad_parados)
    {
        $this->capacidad_parados = $capacidad_parados;
    }

    /**
     * @return int
     */
    public function getCapacidadSentados()
    {
        return $this->capacidad_sentados;
    }

    /**
     * @param int $capacidad_sentados
     */
    public function setCapacidadSentados($capacidad_sentados)
    {
        $this->capacidad_sentados = $capacidad_sentados;
    }

    /**
     * @return int
     */
    public function getCapacidadTotal()
    {
        return $this->capacidad_total;
    }

    /**
     * @param int $capacidad_total
     */
    public function setCapacidadTotal($capacidad_total)
    {
        $this->capacidad_total = $capacidad_total;
    }

    /**
     * @return int
     */
    public function getDesviacion()
    {
        return $this->desviacion;
    }

    /**
     * @param int $desviacion
     */
    public function setDesviacion($desviacion)
    {
        $this->desviacion = $desviacion;
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
     * @return float
     */
    public function getIndiceConsumoNormado()
    {
        return $this->indiceConsumoNormado;
    }

    /**
     * @param float $indiceConsumoNormado
     */
    public function setIndiceConsumoNormado($indiceConsumoNormado)
    {
        $this->indiceConsumoNormado = $indiceConsumoNormado;
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
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}
