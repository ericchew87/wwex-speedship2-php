<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPackages Structs
 * @subpackage Structs
 */
class ShipmentPackages extends AbstractStructBase
{
    /**
     * The shipmentPackage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage[]
     */
    public $shipmentPackage;
    /**
     * Constructor method for ShipmentPackages
     * @uses ShipmentPackages::setShipmentPackage()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage[] $shipmentPackage
     */
    public function __construct(array $shipmentPackage = array())
    {
        $this
            ->setShipmentPackage($shipmentPackage);
    }
    /**
     * Get shipmentPackage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage[]|null
     */
    public function getShipmentPackage()
    {
        return isset($this->shipmentPackage) ? $this->shipmentPackage : null;
    }
    /**
     * Set shipmentPackage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage[] $shipmentPackage
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages
     */
    public function setShipmentPackage(array $shipmentPackage = array())
    {
        foreach ($shipmentPackage as $shipmentPackagesShipmentPackageItem) {
            // validation for constraint: itemType
            if (!$shipmentPackagesShipmentPackageItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage) {
                throw new \InvalidArgumentException(sprintf('The shipmentPackage property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage, "%s" given', is_object($shipmentPackagesShipmentPackageItem) ? get_class($shipmentPackagesShipmentPackageItem) : gettype($shipmentPackagesShipmentPackageItem)), __LINE__);
            }
        }
        if (is_null($shipmentPackage) || (is_array($shipmentPackage) && empty($shipmentPackage))) {
            unset($this->shipmentPackage);
        } else {
            $this->shipmentPackage = $shipmentPackage;
        }
        return $this;
    }
    /**
     * Add item to shipmentPackage value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages
     */
    public function addToShipmentPackage(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage) {
            throw new \InvalidArgumentException(sprintf('The shipmentPackage property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentPackage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages
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
