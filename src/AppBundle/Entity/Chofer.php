<?php

namespace AppBundle\Entity;

use Doctrine\DBAL\Types\StringType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Chofer
 *
 * @ORM\Table(name="chofer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChoferRepository")
 */
class Chofer
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licencia_emision", type="date", nullable=true)
     */
    private $licencia_emision;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licenciaVencimiento", type="date", nullable=true)
     */
    private $licencia_vencimiento;


    /**
     * @var string
     *
     * @ORM\Column(name="noLicenciaOperativa", type="string", length=255, nullable=true)
     */
    private $noLicenciaOperativa;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recalificacionEmision", type="date", nullable=true)
     */
    private $recalificacion_emision;
//    /**
//     * @var int
//     *
//     * @ORM\Column(name="tiempo_servicio", type="integer", nullable=true)
//     */
//    private $tiempoServicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recalificacionVencimiento", type="date", nullable=true)
     */
    private $recalificacionVencimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="examenMedicoEmision", type="date", nullable=true)
     */
    private $examenMedicoEmision;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="examenMedicoVencimiento", type="date", nullable=true)
     */
    private $examenMedicoVencimiento;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="examenPsicofisiologicoEmision", type="date", nullable=true)
     */
    private $examenPsicofisiologicoEmision;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="examenPsicofisiologicoVencimiento", type="date", nullable=true)
     */
    private $examenPsicofisiologicoVencimiento;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Omnibus", inversedBy="chofer")
     * @ORM\JoinColumn(name="omnibus_id", referencedColumnName="id")
     */
    protected $omnibus;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\EscogidaTurno", mappedBy="chofer")
     */
    protected $escogida;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Trabajador", inversedBy="chofer")
     * @ORM\JoinColumn(name="trabajador_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $trabajador;


    public function __toString(){
        return $this->getNombre();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->escogida = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add escogida
     *
     * @param \AppBundle\Entity\EscogidaTurno $escogida
     *
     * @return Chofer
     */
    public function addEscogida(\AppBundle\Entity\EscogidaTurno $escogida)
    {
        $this->escogida[] = $escogida;

        return $this;
    }

    /**
     * Remove escogida
     *
     * @param \AppBundle\Entity\EscogidaTurno $escogida
     */
    public function removeEscogida(\AppBundle\Entity\EscogidaTurno $escogida)
    {
        $this->escogida->removeElement($escogida);
    }

    /**
     * @param mixed $escogida
     */
    public function setEscogida($escogida)
    {
        $this->escogida = $escogida;
    }

    /**
     * @return mixed
     */
    public function getEscogida()
    {
        return $this->escogida;
    }

    /**
     * @param \DateTime $examenMedicoEmision
     */
    public function setExamenMedicoEmision($examenMedicoEmision)
    {
        $this->examenMedicoEmision = $examenMedicoEmision;
    }

    /**
     * @return \DateTime
     */
    public function getExamenMedicoEmision()
    {
        return $this->examenMedicoEmision;
    }

    /**
     * @param \DateTime $examenMedicoVencimiento
     */
    public function setExamenMedicoVencimiento($examenMedicoVencimiento)
    {
        $this->examenMedicoVencimiento = $examenMedicoVencimiento;
    }

    /**
     * @return \DateTime
     */
    public function getExamenMedicoVencimiento()
    {
        return $this->examenMedicoVencimiento;
    }

    /**
     * @param \DateTime $examenPsicofisiologicoEmision
     */
    public function setExamenPsicofisiologicoEmision($examenPsicofisiologicoEmision)
    {
        $this->examenPsicofisiologicoEmision = $examenPsicofisiologicoEmision;
    }

    /**
     * @return \DateTime
     */
    public function getExamenPsicofisiologicoEmision()
    {
        return $this->examenPsicofisiologicoEmision;
    }

    /**
     * @param \DateTime $examenPsicofisiologicoVencimiento
     */
    public function setExamenPsicofisiologicoVencimiento($examenPsicofisiologicoVencimiento)
    {
        $this->examenPsicofisiologicoVencimiento = $examenPsicofisiologicoVencimiento;
    }

    /**
     * @return \DateTime
     */
    public function getExamenPsicofisiologicoVencimiento()
    {
        return $this->examenPsicofisiologicoVencimiento;
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
     * @param \DateTime $licencia_emision
     */
    public function setLicenciaEmision($licencia_emision)
    {
        $this->licencia_emision = $licencia_emision;
    }

    /**
     * @return \DateTime
     */
    public function getLicenciaEmision()
    {
        return $this->licencia_emision;
    }

    /**
     * @param \DateTime $licencia_vencimiento
     */
    public function setLicenciaVencimiento($licencia_vencimiento)
    {
        $this->licencia_vencimiento = $licencia_vencimiento;
    }

    /**
     * @return \DateTime
     */
    public function getLicenciaVencimiento()
    {
        return $this->licencia_vencimiento;
    }

    /**
     * @param string $noLicenciaOperativa
     */
    public function setNoLicenciaOperativa($noLicenciaOperativa)
    {
        $this->noLicenciaOperativa = $noLicenciaOperativa;
    }

    /**
     * @return string
     */
    public function getNoLicenciaOperativa()
    {
        return $this->noLicenciaOperativa;
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

    /**
     * @param \DateTime $recalificacionVencimiento
     */
    public function setRecalificacionVencimiento($recalificacionVencimiento)
    {
        $this->recalificacionVencimiento = $recalificacionVencimiento;
    }

    /**
     * @return \DateTime
     */
    public function getRecalificacionVencimiento()
    {
        return $this->recalificacionVencimiento;
    }

    /**
     * @param \DateTime $recalificacion_emision
     */
    public function setRecalificacionEmision($recalificacion_emision)
    {
        $this->recalificacion_emision = $recalificacion_emision;
    }

    /**
     * @return \DateTime
     */
    public function getRecalificacionEmision()
    {
        return $this->recalificacion_emision;
    }

    /**
     * @param mixed $trabajador
     */
    public function setTrabajador($trabajador)
    {
        $this->trabajador = $trabajador;
    }

    /**
     * @return mixed
     */
    public function getTrabajador()
    {
        return $this->trabajador;
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

}
