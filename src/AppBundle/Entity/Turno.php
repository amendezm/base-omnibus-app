<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turno
 *
 * @ORM\Table(name="turno")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TurnoRepository")
 */
class Turno
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\HojaRuta", mappedBy="turno")
     */
    protected $hojaRute;
    /**
     * @var string
     *
     * @ORM\Column(name="hora", type="string", length=255)
     */
    private $hora;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hojaRute = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add hojaRute
     *
     * @param \AppBundle\Entity\HojaRuta $hojaRute
     *
     * @return Turno
     */
    public function addHojaRute(\AppBundle\Entity\HojaRuta $hojaRute)
    {
        $this->hojaRute[] = $hojaRute;

        return $this;
    }

    /**
     * Remove hojaRute
     *
     * @param \AppBundle\Entity\HojaRuta $hojaRute
     */
    public function removeHojaRute(\AppBundle\Entity\HojaRuta $hojaRute)
    {
        $this->hojaRute->removeElement($hojaRute);
    }

    /**
     * @param mixed $hojaRute
     */
    public function setHojaRute($hojaRute)
    {
        $this->hojaRute = $hojaRute;
    }

    /**
     * @return mixed
     */
    public function getHojaRute()
    {
        return $this->hojaRute;
    }

    /**
     * @param string $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
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


}
