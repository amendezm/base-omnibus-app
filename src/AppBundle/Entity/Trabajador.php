<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabajador
 *
 * @ORM\Table(name="trabajador")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrabajadorRepository")
 */
class Trabajador
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Chofer", mappedBy="trabajador", cascade="remove")
     */
    protected $chofer;
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Usuario", mappedBy="trabajador")
     */
    protected $user;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ci", type="string", length=11)
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, unique=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255)
     */
    private $cargo;


    public function __toString()
    {
        return $this->getNombre();
    //    return $this->getCi();
    //    return $this->getDireccion();// TODO: Implement __toString() method.
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chofer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add chofer
     *
     * @param \AppBundle\Entity\Chofer $chofer
     *
     * @return Trabajador
     */
    public function addChofer(\AppBundle\Entity\Chofer $chofer)
    {
        $this->chofer[] = $chofer;

        return $this;
    }

    /**
     * Remove chofer
     *
     * @param \AppBundle\Entity\Chofer $chofer
     */
    public function removeChofer(\AppBundle\Entity\Chofer $chofer)
    {
        $this->chofer->removeElement($chofer);
    }


    /**
     * Add user
     *
     * @param \AppBundle\Entity\Usuario $user
     *
     * @return Trabajador
     */
    public function addUser(\AppBundle\Entity\Usuario $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\Usuario $user
     */
    public function removeUser(\AppBundle\Entity\Usuario $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * @param string $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $chofer
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;
    }

    /**
     * @return mixed
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * @param string $ci
     */
    public function setCi($ci)
    {
        $this->ci = $ci;
    }

    /**
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
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

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }


}
