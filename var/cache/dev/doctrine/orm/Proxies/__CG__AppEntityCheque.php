<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cheque extends \App\Entity\Cheque implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'montantC', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'destinationC', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'compteID', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'DateEmission', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'reclamtions', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'isfav'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'montantC', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'destinationC', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'compteID', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'DateEmission', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'reclamtions', '' . "\0" . 'App\\Entity\\Cheque' . "\0" . 'isfav'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cheque $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantC(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantC', []);

        return parent::getMontantC();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantC(float $montantC): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantC', [$montantC]);

        return parent::setMontantC($montantC);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinationC(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinationC', []);

        return parent::getDestinationC();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinationC(?\App\Entity\User $destinationC): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinationC', [$destinationC]);

        return parent::setDestinationC($destinationC);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompteID(): ?\App\Entity\Compte
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompteID', []);

        return parent::getCompteID();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompteID(?\App\Entity\Compte $compteID): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompteID', [$compteID]);

        return parent::setCompteID($compteID);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEmission(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEmission', []);

        return parent::getDateEmission();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEmission(\DateTimeInterface $DateEmission): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEmission', [$DateEmission]);

        return parent::setDateEmission($DateEmission);
    }

    /**
     * {@inheritDoc}
     */
    public function getReclamtions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReclamtions', []);

        return parent::getReclamtions();
    }

    /**
     * {@inheritDoc}
     */
    public function addReclamtion(\App\Entity\Reclamtion $reclamtion): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReclamtion', [$reclamtion]);

        return parent::addReclamtion($reclamtion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReclamtion(\App\Entity\Reclamtion $reclamtion): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReclamtion', [$reclamtion]);

        return parent::removeReclamtion($reclamtion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsfav(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsfav', []);

        return parent::getIsfav();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsfav(int $isfav): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsfav', [$isfav]);

        return parent::setIsfav($isfav);
    }

}
