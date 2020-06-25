<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CombustibleAsignadoRepository")
 */
class CombustibleAsignado
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $cantAsignada;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tarjeta_combustible", inversedBy="combustiblesAsignados")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $tarjeta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantAsignada(): ?float
    {
        return $this->cantAsignada;
    }

    public function setCantAsignada(float $cantAsignada): self
    {
        $this->cantAsignada = $cantAsignada;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getTarjeta(): ?Tarjeta_combustible
    {
        return $this->tarjeta;
    }

    public function setTarjeta(?Tarjeta_combustible $tarjeta): self
    {
        $this->tarjeta = $tarjeta;

        return $this;
    }
}
