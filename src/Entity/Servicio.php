<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity(repositoryClass="App\Repository\ServicioRepository")
 */
class Servicio
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
     * @ORM\OneToMany(targetEntity="App\Entity\Ruta", mappedBy="servicio")
     */
    protected $ruta;
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

public function __toString()
{
    return $this->getTipo();
}

    /**
     * Add rutum
     *
     * @param \App\Entity\Ruta $rutum
     *
     * @return Servicio
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
     * Constructor
     */
    public function __construct()
    {
        $this->ruta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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


}
