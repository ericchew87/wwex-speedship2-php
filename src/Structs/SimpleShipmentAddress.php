<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimpleShipmentAddress Structs
 * @subpackage Structs
 */
class SimpleShipmentAddress extends AbstractStructBase
{
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The postalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $postalCode;
    /**
     * The residentialIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $residentialIndicator;
    /**
     * The state
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * Constructor method for SimpleShipmentAddress
     * @uses SimpleShipmentAddress::setCity()
     * @uses SimpleShipmentAddress::setCountryCode()
     * @uses SimpleShipmentAddress::setPostalCode()
     * @uses SimpleShipmentAddress::setResidentialIndicator()
     * @uses SimpleShipmentAddress::setState()
     * @param string $city
     * @param string $countryCode
     * @param string $postalCode
     * @param string $residentialIndicator
     * @param string $state
     */
    public function __construct($city = null, $countryCode = null, $postalCode = null, $residentialIndicator = null, $state = null)
    {
        $this
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setPostalCode($postalCode)
            ->setResidentialIndicator($residentialIndicator)
            ->setState($state);
    }
    /**
     * Get city value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }
    /**
     * Set city value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
        }
        return $this;
    }
    /**
     * Get countryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->countryCode) ? $this->countryCode : null;
    }
    /**
     * Set countryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->countryCode);
        } else {
            $this->countryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get postalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->postalCode) ? $this->postalCode : null;
    }
    /**
     * Set postalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->postalCode);
        } else {
            $this->postalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get residentialIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResidentialIndicator()
    {
        return isset($this->residentialIndicator) ? $this->residentialIndicator : null;
    }
    /**
     * Set residentialIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $residentialIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public function setResidentialIndicator($residentialIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($residentialIndicator) && !is_string($residentialIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($residentialIndicator)), __LINE__);
        }
        if (is_null($residentialIndicator) || (is_array($residentialIndicator) && empty($residentialIndicator))) {
            unset($this->residentialIndicator);
        } else {
            $this->residentialIndicator = $residentialIndicator;
        }
        return $this;
    }
    /**
     * Get state value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : null;
    }
    /**
     * Set state value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->state);
        } else {
            $this->state = $state;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
