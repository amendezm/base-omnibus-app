<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Omnibus
 *
 * @ORM\Table(name="omnibus")
 * @ORM\Entity(repositoryClass="App\Repository\OmnibusRepository")
 */
class Omnibus
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
     * @ORM\Column(name="chapa", type="string", length=9)
     */

    private $chapa;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Chofer", mappedBy="omnibus")
     */
    protected $chofer;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tipo_omnibus", inversedBy="omnibus")
     * @ORM\JoinColumn(name="id_tipoOmnibus", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $typeOmnibus;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GPS", mappedBy="omnibus")
     */
    protected $gps;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\base", inversedBy="omnibus")
     * @ORM\JoinColumn(name="id_base", referencedColumnName="id", onDelete="CASCADE")
     * 
     */
    protected $base;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tarjeta_combustible", inversedBy="omnibus")
     * @ORM\JoinColumn(nullable=true, name="id_tarjetaCombustible", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $tarjetaCombustible;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EscogidaTurno", mappedBy="omnibus")
     */
    protected $escogida;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\HojaRuta", mappedBy="omnibus")
     */
    protected $hojaRuta;

    /**
     * @var string
     *
     * @ORM\Column(name="NoOmnibus", type="string", length=255)
     */

    private $noOmnibus;


    /**
     * @var float
     *
     * @ORM\Column(name="indiceConsumoReal", type="float", nullable=true)
     */
    private $indiceConsumoReal;
    /**
     * @var float
     *
     * @ORM\Column(name="kmRecorridosAcumulados", type="float")
     *
     */
    private $kmRecorridosAcumulados;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licenciaOperativaEmision", type="date")
     */
    private $licenciaOperativaEmision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licenciaOperativaVencimiento", type="date")
     */
    private $licenciaOperativaVencimiento;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licenciaCirculacionEmision", type="date")
     */
    private $licenciaCirculacionEmision;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="licenciaCirculacionVencimiento", type="date")
     */
    private $licenciaCirculacionVencimiento;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FICAV_emision", type="date")
     */
    private $FICAV_emision;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FICAV_vencimiento", type="date")
     */
    private $FICAV_vencimiento;

    /**
     * @var bool
     *
     * @ORM\Column(name="mantenimiento", type="boolean")
     */

    private $mantenimiento;
    /**
     * @var bool
     *
     * @ORM\Column(name="en_revision", type="boolean")
     */

    private $en_revision;
    /**
     * @var bool
     *
     * @ORM\Column(name="is_roto", type="boolean")
     */

    private $is_roto;


    public function __toString()
    {
        return $this->noOmnibus;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chofer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gps = new \Doctrine\Common\Collections\ArrayCollection();
        $this->escogida = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hojaRuta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add chofer
     *
     * @param \App\Entity\Chofer $chofer
     *
     * @return Omnibus
     */
    public function addChofer(\App\Entity\Chofer $chofer)
    {
        $this->chofer[] = $chofer;

        return $this;
    }

    /**
     * Remove chofer
     *
     * @param \App\Entity\Chofer $chofer
     */
    public function removeChofer(\App\Entity\Chofer $chofer)
    {
        $this->chofer->removeElement($chofer);
    }

    /**
     * Add gp
     *
     * @param \App\Entity\GPS $gp
     *
     * @return Omnibus
     */
    public function addGp(\App\Entity\GPS $gp)
    {
        $this->gps[] = $gp;

        return $this;
    }

    /**
     * Remove gp
     *
     * @param \App\Entity\GPS $gp
     */
    public function removeGp(\App\Entity\GPS $gp)
    {
        $this->gps->removeElement($gp);
    }

    /**
     * Add escogida
     *
     * @param \App\Entity\EscogidaTurno $escogida
     *
     * @return Omnibus
     */
    public function addEscogida(\App\Entity\EscogidaTurno $escogida)
    {
        $this->escogida[] = $escogida;

        return $this;
    }

    /**
     * Remove escogida
     *
     * @param \App\Entity\EscogidaTurno $escogida
     */
    public function removeEscogida(\App\Entity\EscogidaTurno $escogida)
    {
        $this->escogida->removeElement($escogida);
    }

    /**
     * Add hojaRutum
     *
     * @param \App\Entity\HojaRuta $hojaRutum
     *
     * @return Omnibus
     */
    public function addHojaRutum(\App\Entity\HojaRuta $hojaRutum)
    {
        $this->hojaRuta[] = $hojaRutum;

        return $this;
    }

    /**
     * Remove hojaRutum
     *
     * @param \App\Entity\HojaRuta $hojaRutum
     */
    public function removeHojaRutum(\App\Entity\HojaRuta $hojaRutum)
    {
        $this->hojaRuta->removeElement($hojaRutum);
    }

    /**
     * @return \DateTime
     */
    public function getFICAVEmision()
    {
        return $this->FICAV_emision;
    }

    /**
     * @param \DateTime $FICAV_emision
     */
    public function setFICAVEmision($FICAV_emision)
    {
        $this->FICAV_emision = $FICAV_emision;
    }

    /**
     * @return \DateTime
     */
    public function getFICAVVencimiento()
    {
        return $this->FICAV_vencimiento;
    }

    /**
     * @param \DateTime $FICAV_vencimiento
     */
    public function setFICAVVencimiento($FICAV_vencimiento)
    {
        $this->FICAV_vencimiento = $FICAV_vencimiento;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return string
     */
    public function getChapa()
    {
        return $this->chapa;
    }

    /**
     * @param string $chapa
     */
    public function setChapa($chapa)
    {
        $this->chapa = $chapa;
    }

    /**
     * @return mixed
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * @param mixed $chofer
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;
    }

    /**
     * @return boolean
     */
    public function isEnRevision()
    {
        return $this->en_revision;
    }

    /**
     * @param boolean $en_revision
     */
    public function setEnRevision($en_revision)
    {
        $this->en_revision = $en_revision;
    }

    /**
     * @return mixed
     */
    public function getEscogida()
    {
        return $this->escogida;
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
    public function getGps()
    {
        return $this->gps;
    }

    /**
     * @param mixed $gps
     */
    public function setGps($gps)
    {
        $this->gps = $gps;
    }

    /**
     * @return mixed
     */
    public function getHojaRuta()
    {
        return $this->hojaRuta;
    }

    /**
     * @param mixed $hojaRuta
     */
    public function setHojaRuta($hojaRuta)
    {
        $this->hojaRuta = $hojaRuta;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getIndiceConsumoReal()
    {
        return $this->indiceConsumoReal;
    }

    /**
     * @param float $indiceConsumoReal
     */
    public function setIndiceConsumoReal($indiceConsumoReal)
    {
        $this->indiceConsumoReal = $indiceConsumoReal;
    }

    /**
     * @return boolean
     */
    public function isIsRoto()
    {
        return $this->is_roto;
    }

    /**
     * @param boolean $is_roto
     */
    public function setIsRoto($is_roto)
    {
        $this->is_roto = $is_roto;
    }

    /**
     * @return float
     */
    public function getKmRecorridosAcumulados()
    {
        return $this->kmRecorridosAcumulados;
    }

    /**
     * @param float $kmRecorridosAcumulados
     */
    public function setKmRecorridosAcumulados($kmRecorridosAcumulados)
    {
        $this->kmRecorridosAcumulados = $kmRecorridosAcumulados;
    }

    /**
     * @return \DateTime
     */
    public function getLicenciaOperativaEmision()
    {
        return $this->licenciaOperativaEmision;
    }

    /**
     * @param \DateTime $licenciaOperativaEmision
     */
    public function setLicenciaOperativaEmision($licenciaOperativaEmision)
    {
        $this->licenciaOperativaEmision = $licenciaOperativaEmision;
    }

    /**
     * @return \DateTime
     */
    public function getLicenciaOperativaVencimiento()
    {
        return $this->licenciaOperativaVencimiento;
    }

    /**
     * @param \DateTime $licenciaOperativaVencimiento
     */
    public function setLicenciaOperativaVencimiento($licenciaOperativaVencimiento)
    {
        $this->licenciaOperativaVencimiento = $licenciaOperativaVencimiento;
    }

    /**
     * @return boolean
     */
    public function isMantenimiento()
    {
        return $this->mantenimiento;
    }

    /**
     * @param boolean $mantenimiento
     */
    public function setMantenimiento($mantenimiento)
    {
        $this->mantenimiento = $mantenimiento;
    }

    /**
     * @return string
     */
    public function getNoOmnibus()
    {
        return $this->noOmnibus;
    }

    /**
     * @param string $noOmnibus
     */
    public function setNoOmnibus($noOmnibus)
    {
        $this->noOmnibus = $noOmnibus;
    }

    /**
     * @return mixed
     */
    public function getTarjetaCombustible()
    {
        return $this->tarjetaCombustible;
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
    public function getTypeOmnibus()
    {
        return $this->typeOmnibus;
    }

    /**
     * @param mixed $typeOmnibus
     */
    public function setTypeOmnibus($typeOmnibus)
    {
        $this->typeOmnibus = $typeOmnibus;
    }

    /**
     * Set licenciaCirculacionVencimiento
     *
     * @param \DateTime $licenciaCirculacionVencimiento
     *
     * @return Omnibus
     */
    public function setLicenciaCirculacionVencimiento($licenciaCirculacionVencimiento)
    {
        $this->licenciaCirculacionVencimiento = $licenciaCirculacionVencimiento;

        return $this;
    }

    /**
     * Get licenciaCirculacionVencimiento
     *
     * @return \DateTime
     */
    public function getLicenciaCirculacionVencimiento()
    {
        return $this->licenciaCirculacionVencimiento;
    }

    /**
     * Get mantenimiento
     *
     * @return boolean
     */
    public function getMantenimiento()
    {
        return $this->mantenimiento;
    }

    /**
     * Get enRevision
     *
     * @return boolean
     */
    public function getEnRevision()
    {
        return $this->en_revision;
    }

    /**
     * Get isRoto
     *
     * @return boolean
     */
    public function getIsRoto()
    {
        return $this->is_roto;
    }

    /**
     * Set licenciaCirculacionEmision
     *
     * @param \DateTime $licenciaCirculacionEmision
     *
     * @return Omnibus
     */
    public function setLicenciaCirculacionEmision($licenciaCirculacionEmision)
    {
        $this->licenciaCirculacionEmision = $licenciaCirculacionEmision;

        return $this;
    }

    /**
     * Get licenciaCirculacionEmision
     *
     * @return \DateTime
     */
    public function getLicenciaCirculacionEmision()
    {
        return $this->licenciaCirculacionEmision;
    }
}
