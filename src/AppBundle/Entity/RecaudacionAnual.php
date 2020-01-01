<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecaudacionAnual
 *
 * @ORM\Table(name="recaudacion_anual")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecaudacionAnualRepository")
 */
class RecaudacionAnual
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
     * @var float
     *
     * @ORM\Column(name="anno", type="integer", nullable=false)
     */
    private $anno;

    /**
     * @var float
     *
     * @ORM\Column(name="enero", type="float", nullable=true)
     */
    private $enero;

    /**
     * @var float
     *
     * @ORM\Column(name="febrero", type="float", nullable=true)
     */
    private $febrero;

    /**
     * @var float
     *
     * @ORM\Column(name="marzo", type="float", nullable=true)
     */
    private $marzo;

    /**
     * @var float
     *
     * @ORM\Column(name="abril", type="float", nullable=true)
     */
    private $abril;

    /**
     * @var float
     *
     * @ORM\Column(name="mayo", type="float", nullable=true)
     */
    private $mayo;

    /**
     * @var float
     *
     * @ORM\Column(name="junio", type="float", nullable=true)
     */
    private $junio;

    /**
     * @var float
     *
     * @ORM\Column(name="julio", type="float", nullable=true)
     */
    private $julio;

    /**
     * @var float
     *
     * @ORM\Column(name="agosto", type="float", nullable=true)
     */
    private $agosto;

    /**
     * @var float
     *
     * @ORM\Column(name="septiembre", type="float", nullable=true)
     */
    private $septiembre;

    /**
     * @var float
     *
     * @ORM\Column(name="octubre", type="float", nullable=true)
     */
    private $octubre;

    /**
     * @var float
     *
     * @ORM\Column(name="noviembre", type="float", nullable=true)
     */
    private $noviembre;

    /**
     * @var float
     *
     * @ORM\Column(name="diciembre", type="float", nullable=true)
     */
    private $diciembre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set enero
     *
     * @param float $enero
     *
     * @return RecaudacionAnual
     */
    public function setEnero($enero)
    {
        $this->enero = $enero;

        return $this;
    }

    /**
     * Get enero
     *
     * @return float
     */
    public function getEnero()
    {
        return $this->enero;
    }

    /**
     * Set febrero
     *
     * @param float $febrero
     *
     * @return RecaudacionAnual
     */
    public function setFebrero($febrero)
    {
        $this->febrero = $febrero;

        return $this;
    }

    /**
     * Get febrero
     *
     * @return float
     */
    public function getFebrero()
    {
        return $this->febrero;
    }

    /**
     * Set marzo
     *
     * @param float $marzo
     *
     * @return RecaudacionAnual
     */
    public function setMarzo($marzo)
    {
        $this->marzo = $marzo;

        return $this;
    }

    /**
     * Get marzo
     *
     * @return float
     */
    public function getMarzo()
    {
        return $this->marzo;
    }

    /**
     * Set abril
     *
     * @param float $abril
     *
     * @return RecaudacionAnual
     */
    public function setAbril($abril)
    {
        $this->abril = $abril;

        return $this;
    }

    /**
     * Get abril
     *
     * @return float
     */
    public function getAbril()
    {
        return $this->abril;
    }

    /**
     * Set mayo
     *
     * @param float $mayo
     *
     * @return RecaudacionAnual
     */
    public function setMayo($mayo)
    {
        $this->mayo = $mayo;

        return $this;
    }

    /**
     * Get mayo
     *
     * @return float
     */
    public function getMayo()
    {
        return $this->mayo;
    }

    /**
     * Set junio
     *
     * @param float $junio
     *
     * @return RecaudacionAnual
     */
    public function setJunio($junio)
    {
        $this->junio = $junio;

        return $this;
    }

    /**
     * Get junio
     *
     * @return float
     */
    public function getJunio()
    {
        return $this->junio;
    }

    /**
     * Set julio
     *
     * @param float $julio
     *
     * @return RecaudacionAnual
     */
    public function setJulio($julio)
    {
        $this->julio = $julio;

        return $this;
    }

    /**
     * Get julio
     *
     * @return float
     */
    public function getJulio()
    {
        return $this->julio;
    }

    /**
     * Set agosto
     *
     * @param float $agosto
     *
     * @return RecaudacionAnual
     */
    public function setAgosto($agosto)
    {
        $this->agosto = $agosto;

        return $this;
    }

    /**
     * Get agosto
     *
     * @return float
     */
    public function getAgosto()
    {
        return $this->agosto;
    }

    /**
     * Set septiembre
     *
     * @param float $septiembre
     *
     * @return RecaudacionAnual
     */
    public function setSeptiembre($septiembre)
    {
        $this->septiembre = $septiembre;

        return $this;
    }

    /**
     * Get septiembre
     *
     * @return float
     */
    public function getSeptiembre()
    {
        return $this->septiembre;
    }

    /**
     * Set octubre
     *
     * @param float $octubre
     *
     * @return RecaudacionAnual
     */
    public function setOctubre($octubre)
    {
        $this->octubre = $octubre;

        return $this;
    }

    /**
     * Get octubre
     *
     * @return float
     */
    public function getOctubre()
    {
        return $this->octubre;
    }

    /**
     * Set noviembre
     *
     * @param float $noviembre
     *
     * @return RecaudacionAnual
     */
    public function setNoviembre($noviembre)
    {
        $this->noviembre = $noviembre;

        return $this;
    }

    /**
     * Get noviembre
     *
     * @return float
     */
    public function getNoviembre()
    {
        return $this->noviembre;
    }

    /**
     * Set diciembre
     *
     * @param float $diciembre
     *
     * @return RecaudacionAnual
     */
    public function setDiciembre($diciembre)
    {
        $this->diciembre = $diciembre;

        return $this;
    }

    /**
     * Get diciembre
     *
     * @return float
     */
    public function getDiciembre()
    {
        return $this->diciembre;
    }
}

