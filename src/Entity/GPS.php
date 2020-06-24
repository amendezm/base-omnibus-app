<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GPS
 *
 * @ORM\Table(name="g_p_s")
 * @ORM\Entity(repositoryClass="App\Repository\GPSRepository")
 */
class GPS
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
     * @ORM\Column(name="combustible", type="integer")
     */
    private $combustible;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Omnibus", inversedBy="gps")
     * @ORM\JoinColumn(name="id_omnibus", referencedColumnName="id",  onDelete="CASCADE")
     */
    protected $omnibus;

    /**
     * @var float
     *
     * @ORM\Column(name="kmRecorridos", type="float")
     *
     */
    private $kmRecorridos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @param int $combustible
     */
    public function setCombustible($combustible)
    {
        $this->combustible = $combustible;
    }

    /**
     * @return int
     */
    public function getCombustible()
    {
        return $this->combustible;
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
     * @param float $kmRecorridos
     */
    public function setKmRecorridos($kmRecorridos)
    {
        $this->kmRecorridos = $kmRecorridos;
    }

    /**
     * @return float
     */
    public function getKmRecorridos()
    {
        return $this->kmRecorridos;
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
