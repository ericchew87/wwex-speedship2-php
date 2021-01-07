<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipUPSShipment Structs
 * @subpackage Structs
 */
class ShipUPSShipment extends AbstractStructBase
{
    /**
     * The shipUPSRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public $shipUPSRequest;
    /**
     * Constructor method for shipUPSShipment
     * @uses ShipUPSShipment::setShipUPSRequest()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest $shipUPSRequest
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest $shipUPSRequest = null)
    {
        $this
            ->setShipUPSRequest($shipUPSRequest);
    }
    /**
     * Get shipUPSRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest|null
     */
    public function getShipUPSRequest()
    {
        return isset($this->shipUPSRequest) ? $this->shipUPSRequest : null;
    }
    /**
     * Set shipUPSRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest $shipUPSRequest
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipment
     */
    public function setShipUPSRequest(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest $shipUPSRequest = null)
    {
        if (is_null($shipUPSRequest) || (is_array($shipUPSRequest) && empty($shipUPSRequest))) {
            unset($this->shipUPSRequest);
        } else {
            $this->shipUPSRequest = $shipUPSRequest;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSShipment
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
