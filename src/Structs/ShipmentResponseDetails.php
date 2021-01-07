<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentResponseDetails Structs
 * @subpackage Structs
 */
class ShipmentResponseDetails extends AbstractStructBase
{
    /**
     * The shipmentResponseDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail[]
     */
    public $shipmentResponseDetail;
    /**
     * Constructor method for ShipmentResponseDetails
     * @uses ShipmentResponseDetails::setShipmentResponseDetail()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail[] $shipmentResponseDetail
     */
    public function __construct(array $shipmentResponseDetail = array())
    {
        $this
            ->setShipmentResponseDetail($shipmentResponseDetail);
    }
    /**
     * Get shipmentResponseDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail[]|null
     */
    public function getShipmentResponseDetail()
    {
        return isset($this->shipmentResponseDetail) ? $this->shipmentResponseDetail : null;
    }
    /**
     * Set shipmentResponseDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail[] $shipmentResponseDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails
     */
    public function setShipmentResponseDetail(array $shipmentResponseDetail = array())
    {
        foreach ($shipmentResponseDetail as $shipmentResponseDetailsShipmentResponseDetailItem) {
            // validation for constraint: itemType
            if (!$shipmentResponseDetailsShipmentResponseDetailItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail) {
                throw new \InvalidArgumentException(sprintf('The shipmentResponseDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail, "%s" given', is_object($shipmentResponseDetailsShipmentResponseDetailItem) ? get_class($shipmentResponseDetailsShipmentResponseDetailItem) : gettype($shipmentResponseDetailsShipmentResponseDetailItem)), __LINE__);
            }
        }
        if (is_null($shipmentResponseDetail) || (is_array($shipmentResponseDetail) && empty($shipmentResponseDetail))) {
            unset($this->shipmentResponseDetail);
        } else {
            $this->shipmentResponseDetail = $shipmentResponseDetail;
        }
        return $this;
    }
    /**
     * Add item to shipmentResponseDetail value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails
     */
    public function addToShipmentResponseDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail) {
            throw new \InvalidArgumentException(sprintf('The shipmentResponseDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentResponseDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails
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
