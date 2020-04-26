<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pto_expedicion
 *
 * @ORM\Table(name="pto_expedicion")
 * @ORM\Entity(repositoryClass="App\Repository\Pto_expedicionRepository")
 */
class Pto_expedicion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
    /** */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ruta", mappedBy="expedicion")
     */
    protected $ruta;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=255)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


    function __toString()
    {
        return $this->nombre;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ruta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rutum
     *
     * @param \App\Entity\Ruta $rutum
     *
     * @return Pto_expedicion
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
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
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
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * @param string $ubicacion
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }
}
