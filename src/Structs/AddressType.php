<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType Structs
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The addressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $addressLine;
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
     * The stateProvinceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $stateProvinceCode;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setAddressLine()
     * @uses AddressType::setCity()
     * @uses AddressType::setCountryCode()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setStateProvinceCode()
     * @param string[] $addressLine
     * @param string $city
     * @param string $countryCode
     * @param string $postalCode
     * @param string $stateProvinceCode
     */
    public function __construct(array $addressLine = array(), $city = null, $countryCode = null, $postalCode = null, $stateProvinceCode = null)
    {
        $this
            ->setAddressLine($addressLine)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setPostalCode($postalCode)
            ->setStateProvinceCode($stateProvinceCode);
    }
    /**
     * Get addressLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getAddressLine()
    {
        return isset($this->addressLine) ? $this->addressLine : null;
    }
    /**
     * Set addressLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $addressLine
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
     */
    public function setAddressLine(array $addressLine = array())
    {
        foreach ($addressLine as $addressTypeAddressLineItem) {
            // validation for constraint: itemType
            if (!is_string($addressTypeAddressLineItem)) {
                throw new \InvalidArgumentException(sprintf('The addressLine property can only contain items of string, "%s" given', is_object($addressTypeAddressLineItem) ? get_class($addressTypeAddressLineItem) : gettype($addressTypeAddressLineItem)), __LINE__);
            }
        }
        if (is_null($addressLine) || (is_array($addressLine) && empty($addressLine))) {
            unset($this->addressLine);
        } else {
            $this->addressLine = $addressLine;
        }
        return $this;
    }
    /**
     * Add item to addressLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
     */
    public function addToAddressLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The addressLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->addressLine[] = $item;
        return $this;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
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
     * Get stateProvinceCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStateProvinceCode()
    {
        return isset($this->stateProvinceCode) ? $this->stateProvinceCode : null;
    }
    /**
     * Set stateProvinceCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stateProvinceCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
     */
    public function setStateProvinceCode($stateProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateProvinceCode) && !is_string($stateProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateProvinceCode)), __LINE__);
        }
        if (is_null($stateProvinceCode) || (is_array($stateProvinceCode) && empty($stateProvinceCode))) {
            unset($this->stateProvinceCode);
        } else {
            $this->stateProvinceCode = $stateProvinceCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
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
