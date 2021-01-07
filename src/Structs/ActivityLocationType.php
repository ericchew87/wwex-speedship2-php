<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityLocationType Structs
 * @subpackage Structs
 */
class ActivityLocationType extends AbstractStructBase
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
     */
    public $address;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The signedForByName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $signedForByName;
    /**
     * Constructor method for ActivityLocationType
     * @uses ActivityLocationType::setAddress()
     * @uses ActivityLocationType::setCode()
     * @uses ActivityLocationType::setDescription()
     * @uses ActivityLocationType::setSignedForByName()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address
     * @param string $code
     * @param string $description
     * @param string $signedForByName
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address = null, $code = null, $description = null, $signedForByName = null)
    {
        $this
            ->setAddress($address)
            ->setCode($code)
            ->setDescription($description)
            ->setSignedForByName($signedForByName);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType
     */
    public function setAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        return $this;
    }
    /**
     * Get code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : null;
    }
    /**
     * Set code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->code);
        } else {
            $this->code = $code;
        }
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        return $this;
    }
    /**
     * Get signedForByName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSignedForByName()
    {
        return isset($this->signedForByName) ? $this->signedForByName : null;
    }
    /**
     * Set signedForByName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $signedForByName
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType
     */
    public function setSignedForByName($signedForByName = null)
    {
        // validation for constraint: string
        if (!is_null($signedForByName) && !is_string($signedForByName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signedForByName)), __LINE__);
        }
        if (is_null($signedForByName) || (is_array($signedForByName) && empty($signedForByName))) {
            unset($this->signedForByName);
        } else {
            $this->signedForByName = $signedForByName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ActivityLocationType
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
