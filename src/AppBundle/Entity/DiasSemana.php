<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiasSemana
 *
 * @ORM\Table(name="dias_semana")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiasSemanaRepository")
 */
class DiasSemana
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ruta", inversedBy="dias")
     * @ORM\JoinColumn(name="id_ruta", referencedColumnName="id")
     */
    protected $ruta;

    /**
     * @var string
     *
     * @ORM\Column(name="dia", type="string", length=255)
     */
    private $dia;


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getDia();
    }

    /**
     * @param string $dia
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    /**
     * @return string
     */
    public function getDia()
    {
        return $this->dia;
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
