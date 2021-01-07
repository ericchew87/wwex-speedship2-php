<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackShipmentRequest Structs
 * @subpackage Structs
 */
class TrackShipmentRequest extends AbstractStructBase
{
    /**
     * The additionalParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public $additionalParameters;
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentNumber;
    /**
     * Constructor method for TrackShipmentRequest
     * @uses TrackShipmentRequest::setAdditionalParameters()
     * @uses TrackShipmentRequest::setShipmentNumber()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @param string $shipmentNumber
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null, $shipmentNumber = null)
    {
        $this
            ->setAdditionalParameters($additionalParameters)
            ->setShipmentNumber($shipmentNumber);
    }
    /**
     * Get additionalParameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters|null
     */
    public function getAdditionalParameters()
    {
        return isset($this->additionalParameters) ? $this->additionalParameters : null;
    }
    /**
     * Set additionalParameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest
     */
    public function setAdditionalParameters(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null)
    {
        if (is_null($additionalParameters) || (is_array($additionalParameters) && empty($additionalParameters))) {
            unset($this->additionalParameters);
        } else {
            $this->additionalParameters = $additionalParameters;
        }
        return $this;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest
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
