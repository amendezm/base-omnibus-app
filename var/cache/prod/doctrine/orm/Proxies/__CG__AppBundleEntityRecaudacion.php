<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Recaudacion extends \AppBundle\Entity\Recaudacion implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'id', 'hojaRuta', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'noSello', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'noVale', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'recaudacion', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'recaudador', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'fecha', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'hora');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'id', 'hojaRuta', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'noSello', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'noVale', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'recaudacion', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'recaudador', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'fecha', '' . "\0" . 'AppBundle\\Entity\\Recaudacion' . "\0" . 'hora');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Recaudacion $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setHojaRuta($hojaRuta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHojaRuta', array($hojaRuta));

        return parent::setHojaRuta($hojaRuta);
    }

    /**
     * {@inheritDoc}
     */
    public function getHojaRuta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHojaRuta', array());

        return parent::getHojaRuta();
    }

    /**
     * {@inheritDoc}
     */
    public function setHora($hora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHora', array($hora));

        return parent::setHora($hora);
    }

    /**
     * {@inheritDoc}
     */
    public function getHora()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHora', array());

        return parent::getHora();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoSello($noSello)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoSello', array($noSello));

        return parent::setNoSello($noSello);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoSello()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoSello', array());

        return parent::getNoSello();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoVale($noVale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoVale', array($noVale));

        return parent::setNoVale($noVale);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoVale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoVale', array());

        return parent::getNoVale();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecaudacion($recaudacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecaudacion', array($recaudacion));

        return parent::setRecaudacion($recaudacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecaudacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecaudacion', array());

        return parent::getRecaudacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecaudador($recaudador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecaudador', array($recaudador));

        return parent::setRecaudador($recaudador);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecaudador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecaudador', array());

        return parent::getRecaudador();
    }

}
