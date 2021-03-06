<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SchedulePickupDetail Structs
 * @subpackage Structs
 */
class SchedulePickupDetail extends AbstractStructBase
{
    /**
     * The shipmentPickupInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public $shipmentPickupInfo;
    /**
     * Constructor method for SchedulePickupDetail
     * @uses SchedulePickupDetail::setShipmentPickupInfo()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo = null)
    {
        $this
            ->setShipmentPickupInfo($shipmentPickupInfo);
    }
    /**
     * Get shipmentPickupInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo|null
     */
    public function getShipmentPickupInfo()
    {
        return isset($this->shipmentPickupInfo) ? $this->shipmentPickupInfo : null;
    }
    /**
     * Set shipmentPickupInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail
     */
    public function setShipmentPickupInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo = null)
    {
        if (is_null($shipmentPickupInfo) || (is_array($shipmentPickupInfo) && empty($shipmentPickupInfo))) {
            unset($this->shipmentPickupInfo);
        } else {
            $this->shipmentPickupInfo = $shipmentPickupInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail
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
