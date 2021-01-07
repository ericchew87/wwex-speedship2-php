<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPackageWithAddInfo Structs
 * @subpackage Structs
 */
class ShipmentPackageWithAddInfo extends AbstractStructBase
{
    /**
     * The shipmentPackageAdditionalInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo
     */
    public $shipmentPackageAdditionalInfo;
    /**
     * The shipmentPackageInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage
     */
    public $shipmentPackageInfo;
    /**
     * Constructor method for ShipmentPackageWithAddInfo
     * @uses ShipmentPackageWithAddInfo::setShipmentPackageAdditionalInfo()
     * @uses ShipmentPackageWithAddInfo::setShipmentPackageInfo()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage $shipmentPackageInfo
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage $shipmentPackageInfo = null)
    {
        $this
            ->setShipmentPackageAdditionalInfo($shipmentPackageAdditionalInfo)
            ->setShipmentPackageInfo($shipmentPackageInfo);
    }
    /**
     * Get shipmentPackageAdditionalInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo|null
     */
    public function getShipmentPackageAdditionalInfo()
    {
        return isset($this->shipmentPackageAdditionalInfo) ? $this->shipmentPackageAdditionalInfo : null;
    }
    /**
     * Set shipmentPackageAdditionalInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo
     */
    public function setShipmentPackageAdditionalInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo = null)
    {
        if (is_null($shipmentPackageAdditionalInfo) || (is_array($shipmentPackageAdditionalInfo) && empty($shipmentPackageAdditionalInfo))) {
            unset($this->shipmentPackageAdditionalInfo);
        } else {
            $this->shipmentPackageAdditionalInfo = $shipmentPackageAdditionalInfo;
        }
        return $this;
    }
    /**
     * Get shipmentPackageInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage|null
     */
    public function getShipmentPackageInfo()
    {
        return isset($this->shipmentPackageInfo) ? $this->shipmentPackageInfo : null;
    }
    /**
     * Set shipmentPackageInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage $shipmentPackageInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo
     */
    public function setShipmentPackageInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackage $shipmentPackageInfo = null)
    {
        if (is_null($shipmentPackageInfo) || (is_array($shipmentPackageInfo) && empty($shipmentPackageInfo))) {
            unset($this->shipmentPackageInfo);
        } else {
            $this->shipmentPackageInfo = $shipmentPackageInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageWithAddInfo
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
