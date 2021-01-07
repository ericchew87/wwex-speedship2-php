<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentTrackingDetails Structs
 * @subpackage Structs
 */
class ShipmentTrackingDetails extends AbstractStructBase
{
    /**
     * The shipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType[]
     */
    public $shipment;
    /**
     * Constructor method for ShipmentTrackingDetails
     * @uses ShipmentTrackingDetails::setShipment()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType[] $shipment
     */
    public function __construct(array $shipment = array())
    {
        $this
            ->setShipment($shipment);
    }
    /**
     * Get shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType[]|null
     */
    public function getShipment()
    {
        return isset($this->shipment) ? $this->shipment : null;
    }
    /**
     * Set shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType[] $shipment
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails
     */
    public function setShipment(array $shipment = array())
    {
        foreach ($shipment as $shipmentTrackingDetailsShipmentItem) {
            // validation for constraint: itemType
            if (!$shipmentTrackingDetailsShipmentItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType) {
                throw new \InvalidArgumentException(sprintf('The shipment property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType, "%s" given', is_object($shipmentTrackingDetailsShipmentItem) ? get_class($shipmentTrackingDetailsShipmentItem) : gettype($shipmentTrackingDetailsShipmentItem)), __LINE__);
            }
        }
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->shipment);
        } else {
            $this->shipment = $shipment;
        }
        return $this;
    }
    /**
     * Add item to shipment value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails
     */
    public function addToShipment(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType) {
            throw new \InvalidArgumentException(sprintf('The shipment property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails
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
