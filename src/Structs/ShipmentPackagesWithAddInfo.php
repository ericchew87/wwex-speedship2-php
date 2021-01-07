<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPackagesWithAddInfo Structs
 * @subpackage Structs
 */
class ShipmentPackagesWithAddInfo extends AbstractStructBase
{
    /**
     * The shipmentPackageWithAddInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo[]
     */
    public $shipmentPackageWithAddInfo;
    /**
     * Constructor method for ShipmentPackagesWithAddInfo
     * @uses ShipmentPackagesWithAddInfo::setShipmentPackageWithAddInfo()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo[] $shipmentPackageWithAddInfo
     */
    public function __construct(array $shipmentPackageWithAddInfo = array())
    {
        $this
            ->setShipmentPackageWithAddInfo($shipmentPackageWithAddInfo);
    }
    /**
     * Get shipmentPackageWithAddInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo[]|null
     */
    public function getShipmentPackageWithAddInfo()
    {
        return isset($this->shipmentPackageWithAddInfo) ? $this->shipmentPackageWithAddInfo : null;
    }
    /**
     * Set shipmentPackageWithAddInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo[] $shipmentPackageWithAddInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo
     */
    public function setShipmentPackageWithAddInfo(array $shipmentPackageWithAddInfo = array())
    {
        foreach ($shipmentPackageWithAddInfo as $shipmentPackagesWithAddInfoShipmentPackageWithAddInfoItem) {
            // validation for constraint: itemType
            if (!$shipmentPackagesWithAddInfoShipmentPackageWithAddInfoItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo) {
                throw new \InvalidArgumentException(sprintf('The shipmentPackageWithAddInfo property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo, "%s" given', is_object($shipmentPackagesWithAddInfoShipmentPackageWithAddInfoItem) ? get_class($shipmentPackagesWithAddInfoShipmentPackageWithAddInfoItem) : gettype($shipmentPackagesWithAddInfoShipmentPackageWithAddInfoItem)), __LINE__);
            }
        }
        if (is_null($shipmentPackageWithAddInfo) || (is_array($shipmentPackageWithAddInfo) && empty($shipmentPackageWithAddInfo))) {
            unset($this->shipmentPackageWithAddInfo);
        } else {
            $this->shipmentPackageWithAddInfo = $shipmentPackageWithAddInfo;
        }
        return $this;
    }
    /**
     * Add item to shipmentPackageWithAddInfo value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo
     */
    public function addToShipmentPackageWithAddInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo) {
            throw new \InvalidArgumentException(sprintf('The shipmentPackageWithAddInfo property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentPackageWithAddInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo
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
