<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPackageAdditionalInfo Structs
 * @subpackage Structs
 */
class ShipmentPackageAdditionalInfo extends AbstractStructBase
{
    /**
     * The shipmentPackageDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescriptions
     */
    public $shipmentPackageDescriptions;
    /**
     * The shipmentReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences
     */
    public $shipmentReferences;
    /**
     * Constructor method for ShipmentPackageAdditionalInfo
     * @uses ShipmentPackageAdditionalInfo::setShipmentPackageDescriptions()
     * @uses ShipmentPackageAdditionalInfo::setShipmentReferences()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescriptions $shipmentPackageDescriptions
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences $shipmentReferences
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescriptions $shipmentPackageDescriptions = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences $shipmentReferences = null)
    {
        $this
            ->setShipmentPackageDescriptions($shipmentPackageDescriptions)
            ->setShipmentReferences($shipmentReferences);
    }
    /**
     * Get shipmentPackageDescriptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescriptions|null
     */
    public function getShipmentPackageDescriptions()
    {
        return isset($this->shipmentPackageDescriptions) ? $this->shipmentPackageDescriptions : null;
    }
    /**
     * Set shipmentPackageDescriptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescriptions $shipmentPackageDescriptions
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo
     */
    public function setShipmentPackageDescriptions(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescriptions $shipmentPackageDescriptions = null)
    {
        if (is_null($shipmentPackageDescriptions) || (is_array($shipmentPackageDescriptions) && empty($shipmentPackageDescriptions))) {
            unset($this->shipmentPackageDescriptions);
        } else {
            $this->shipmentPackageDescriptions = $shipmentPackageDescriptions;
        }
        return $this;
    }
    /**
     * Get shipmentReferences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences|null
     */
    public function getShipmentReferences()
    {
        return isset($this->shipmentReferences) ? $this->shipmentReferences : null;
    }
    /**
     * Set shipmentReferences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences $shipmentReferences
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo
     */
    public function setShipmentReferences(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences $shipmentReferences = null)
    {
        if (is_null($shipmentReferences) || (is_array($shipmentReferences) && empty($shipmentReferences))) {
            unset($this->shipmentReferences);
        } else {
            $this->shipmentReferences = $shipmentReferences;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo
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
