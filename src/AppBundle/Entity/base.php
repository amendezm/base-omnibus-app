<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Base
 *
 * @ORM\Table(name="base")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BaseRepository")
 */
class base
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Omnibus", mappedBy="base")
     */
    protected $omnibus;
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    public function __toString()
    {
        return $this->nombre;
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
     * @return base
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
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
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


}
