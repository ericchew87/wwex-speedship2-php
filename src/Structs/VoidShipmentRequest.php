<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidShipmentRequest Structs
 * @subpackage Structs
 */
class VoidShipmentRequest extends AbstractStructBase
{
    /**
     * The shipmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers
     */
    public $shipmentNumbers;
    /**
     * Constructor method for VoidShipmentRequest
     * @uses VoidShipmentRequest::setShipmentNumbers()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers $shipmentNumbers
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers $shipmentNumbers = null)
    {
        $this
            ->setShipmentNumbers($shipmentNumbers);
    }
    /**
     * Get shipmentNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers|null
     */
    public function getShipmentNumbers()
    {
        return isset($this->shipmentNumbers) ? $this->shipmentNumbers : null;
    }
    /**
     * Set shipmentNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers $shipmentNumbers
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentRequest
     */
    public function setShipmentNumbers(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers $shipmentNumbers = null)
    {
        if (is_null($shipmentNumbers) || (is_array($shipmentNumbers) && empty($shipmentNumbers))) {
            unset($this->shipmentNumbers);
        } else {
            $this->shipmentNumbers = $shipmentNumbers;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentRequest
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
