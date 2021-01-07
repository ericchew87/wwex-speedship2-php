<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentVoidDetails Structs
 * @subpackage Structs
 */
class ShipmentVoidDetails extends AbstractStructBase
{
    /**
     * The shipmentVoidDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail[]
     */
    public $shipmentVoidDetail;
    /**
     * Constructor method for ShipmentVoidDetails
     * @uses ShipmentVoidDetails::setShipmentVoidDetail()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail[] $shipmentVoidDetail
     */
    public function __construct(array $shipmentVoidDetail = array())
    {
        $this
            ->setShipmentVoidDetail($shipmentVoidDetail);
    }
    /**
     * Get shipmentVoidDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail[]|null
     */
    public function getShipmentVoidDetail()
    {
        return isset($this->shipmentVoidDetail) ? $this->shipmentVoidDetail : null;
    }
    /**
     * Set shipmentVoidDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail[] $shipmentVoidDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetails
     */
    public function setShipmentVoidDetail(array $shipmentVoidDetail = array())
    {
        foreach ($shipmentVoidDetail as $shipmentVoidDetailsShipmentVoidDetailItem) {
            // validation for constraint: itemType
            if (!$shipmentVoidDetailsShipmentVoidDetailItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail) {
                throw new \InvalidArgumentException(sprintf('The shipmentVoidDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail, "%s" given', is_object($shipmentVoidDetailsShipmentVoidDetailItem) ? get_class($shipmentVoidDetailsShipmentVoidDetailItem) : gettype($shipmentVoidDetailsShipmentVoidDetailItem)), __LINE__);
            }
        }
        if (is_null($shipmentVoidDetail) || (is_array($shipmentVoidDetail) && empty($shipmentVoidDetail))) {
            unset($this->shipmentVoidDetail);
        } else {
            $this->shipmentVoidDetail = $shipmentVoidDetail;
        }
        return $this;
    }
    /**
     * Add item to shipmentVoidDetail value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetails
     */
    public function addToShipmentVoidDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail) {
            throw new \InvalidArgumentException(sprintf('The shipmentVoidDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentVoidDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentVoidDetails
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
