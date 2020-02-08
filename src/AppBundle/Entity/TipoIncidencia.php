<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoIncidencia
 *
 * @ORM\Table(name="tipo_incidencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipoIncidenciaRepository")
 */
class TipoIncidencia
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
     * @ORM\Column(name="tipoIncidencias", type="string", length=255, nullable=true)
     */
    private $tipoIncidencias;

    /**
     * @var string
     *
     * @orm\Column(name="descripcion", type="string", nullable=true)
     */
    private $descripcion;

    /**
     * @orm\OneToMany(targetEntity="AppBundle\Entity\Incidencia", mappedBy="tipoIncidencia")
     */
    protected $incidencia;


    public function __toString()
    {
        return $this->getTipoIncidencias();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->incidencia = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param mixed $incidencia
     */
    public function setIncidencia($incidencia)
    {
        $this->incidencia = $incidencia;
    }

    /**
     * @return mixed
     */
    public function getIncidencia()
    {
        return $this->incidencia;
    }

    /**
     * @param string $tipoIncidencias
     */
    public function setTipoIncidencias($tipoIncidencias)
    {
        $this->tipoIncidencias = $tipoIncidencias;
    }

    /**
     * @return string
     */
    public function getTipoIncidencias()
    {
        return $this->tipoIncidencias;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TipoIncidencia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add incidencium
     *
     * @param \AppBundle\Entity\Incidencia $incidencium
     *
     * @return TipoIncidencia
     */
    public function addIncidencium(\AppBundle\Entity\Incidencia $incidencium)
    {
        $this->incidencia[] = $incidencium;

        return $this;
    }

    /**
     * Remove incidencium
     *
     * @param \AppBundle\Entity\Incidencia $incidencium
     */
    public function removeIncidencium(\AppBundle\Entity\Incidencia $incidencium)
    {
        $this->incidencia->removeElement($incidencium);
    }
}
