<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidencia
 *
 * @ORM\Table(name="incidencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IncidenciaRepository")
 */
class Incidencia
{
    /**
     * @var int
     *
     * @orm\Column(name="idincidencia", type="integer")
     * @orm\Id
     * @orm\Generatedvalue(strategy="AUTO")
     *
     */
    private $idincidencia;
    /**
     * @var string
     *
     * @orm\Column(name="detalles", type="string", nullable=true)
     */
    private $detalles;

//    /**
//     * @orm\OneToMany(targetEntity="AppBundle\Entity\HojaRuta", mappedBy="incidenciahr")
//     */
//    protected $hojaRuta;

    /**
     * @orm\Manytoone(targetEntity="AppBundle\Entity\TipoIncidencia", inversedBy="incidencia")
     * @orm\Joincolumn(name="id_tipo", referencedColumnName="id")
     */
    protected $tipoIncidencia;

    /**
     * @orm\OneToMany(targetEntity="AppBundle\Entity\Incidencias_HR", mappedBy="incidencias")
     */
    protected $incidencia_hr;


    public function __toString()
    {
        return $this->getDetalles();
    }

    /**
     * constructor
     */
    public function __construct()
    {
        $this->incidencia_hr = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add incidencia_hr
     *
     * @param \AppBundle\Entity\Incidencias_HR $incidencia_hr
     *
     * @return Incidencias_HR
     */
    public function addIncidencias_HR(\AppBundle\Entity\Incidencias_HR $incidencia_hr)
    {
        $this->incidencia_hr[] = $incidencia_hr;

        return $this;
    }

    /**
     * Remove incidencia_hr
     *
     * @param \AppBundle\Entity\Incidencias_HR $incidencia_hr
     */
    public function removeIncidencias_HR (\AppBundle\Entity\Incidencias_HR $incidencia_hr)
    {
        $this->incidencia_hr->removeElement($incidencia_hr);
    }


    /**
     * @param string $detalles
     */
    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;
    }

    /**
     * @return string
     */
    public function getDetalles()
    {
        return $this->detalles;
    }

    /**
     * @return int
     */
    public function getIdincidencia()
    {
        return $this->idincidencia;
    }

    /**
     * @param int $idincidencia
     */
    public function setIdincidencia($idincidencia)
    {
        $this->idincidencia = $idincidencia;
    }

    /**
     * @return mixed
     */
    public function getIncidenciaHr()
    {
        return $this->incidencia_hr;
    }

    /**
     * @param mixed $incidencia_hr
     */
    public function setIncidenciaHr($incidencia_hr)
    {
        $this->incidencia_hr = $incidencia_hr;
    }

    /**
     * @return mixed
     */
    public function getTipoIncidencia()
    {
        return $this->tipoIncidencia;
    }

    /**
     * @param mixed $tipoIncidencia
     */
    public function setTipoIncidencia($tipoIncidencia)
    {
        $this->tipoIncidencia = $tipoIncidencia;
    }




}
