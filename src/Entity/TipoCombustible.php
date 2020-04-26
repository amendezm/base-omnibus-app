<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCombustible
 *
 * @ORM\Table(name="tipo_combustible")
 * @ORM\Entity(repositoryClass="App\Repository\TipoCombustibleRepository")
 */
class TipoCombustible
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
     * @ORM\OneToMany(targetEntity="App\Entity\Tarjeta_combustible", mappedBy="combustibleTipo")
     */
    protected $tarjetaCombustible;

    public function __toString()
    {
        return $this->tipo;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tarjetaCombustible = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tarjetaCombustible
     *
     * @param \App\Entity\Tarjeta_combustible $tarjetaCombustible
     *
     * @return TipoCombustible
     */
    public function addTarjetaCombustible(\App\Entity\Tarjeta_combustible $tarjetaCombustible)
    {
        $this->tarjetaCombustible[] = $tarjetaCombustible;

        return $this;
    }

    /**
     * Remove tarjetaCombustible
     *
     * @param \App\Entity\Tarjeta_combustible $tarjetaCombustible
     */
    public function removeTarjetaCombustible(\App\Entity\Tarjeta_combustible $tarjetaCombustible)
    {
        $this->tarjetaCombustible->removeElement($tarjetaCombustible);
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
     * @param mixed $tarjetaCombustible
     */
    public function setTarjetaCombustible($tarjetaCombustible)
    {
        $this->tarjetaCombustible = $tarjetaCombustible;
    }

    /**
     * @return mixed
     */
    public function getTarjetaCombustible()
    {
        return $this->tarjetaCombustible;
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


}
