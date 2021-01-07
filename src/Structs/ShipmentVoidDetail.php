<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentVoidDetail Structs
 * @subpackage Structs
 */
class ShipmentVoidDetail extends AbstractStructBase
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentNumber;
    /**
     * The statusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $statusCode;
    /**
     * The statusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $statusDescription;
    /**
     * The voidDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $voidDescription;
    /**
     * Constructor method for ShipmentVoidDetail
     * @uses ShipmentVoidDetail::setShipmentNumber()
     * @uses ShipmentVoidDetail::setStatusCode()
     * @uses ShipmentVoidDetail::setStatusDescription()
     * @uses ShipmentVoidDetail::setVoidDescription()
     * @param string $shipmentNumber
     * @param string $statusCode
     * @param string $statusDescription
     * @param string $voidDescription
     */
    public function __construct($shipmentNumber = null, $statusCode = null, $statusDescription = null, $voidDescription = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setStatusCode($statusCode)
            ->setStatusDescription($statusDescription)
            ->setVoidDescription($voidDescription);
    }
    /**
     * Get shipmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return isset($this->shipmentNumber) ? $this->shipmentNumber : null;
    }
    /**
     * Set shipmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentNumber)), __LINE__);
        }
        if (is_null($shipmentNumber) || (is_array($shipmentNumber) && empty($shipmentNumber))) {
            unset($this->shipmentNumber);
        } else {
            $this->shipmentNumber = $shipmentNumber;
        }
        return $this;
    }
    /**
     * Get statusCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusCode()
    {
        return isset($this->statusCode) ? $this->statusCode : null;
    }
    /**
     * Set statusCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        if (is_null($statusCode) || (is_array($statusCode) && empty($statusCode))) {
            unset($this->statusCode);
        } else {
            $this->statusCode = $statusCode;
        }
        return $this;
    }
    /**
     * Get statusDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusDescription()
    {
        return isset($this->statusDescription) ? $this->statusDescription : null;
    }
    /**
     * Set statusDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusDescription
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail
     */
    public function setStatusDescription($statusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusDescription)), __LINE__);
        }
        if (is_null($statusDescription) || (is_array($statusDescription) && empty($statusDescription))) {
            unset($this->statusDescription);
        } else {
            $this->statusDescription = $statusDescription;
        }
        return $this;
    }
    /**
     * Get voidDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVoidDescription()
    {
        return isset($this->voidDescription) ? $this->voidDescription : null;
    }
    /**
     * Set voidDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $voidDescription
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail
     */
    public function setVoidDescription($voidDescription = null)
    {
        // validation for constraint: string
        if (!is_null($voidDescription) && !is_string($voidDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voidDescription)), __LINE__);
        }
        if (is_null($voidDescription) || (is_array($voidDescription) && empty($voidDescription))) {
            unset($this->voidDescription);
        } else {
            $this->voidDescription = $voidDescription;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail
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
