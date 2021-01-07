<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentReferences Structs
 * @subpackage Structs
 */
class ShipmentReferences extends AbstractStructBase
{
    /**
     * The shipmentReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference[]
     */
    public $shipmentReference;
    /**
     * Constructor method for ShipmentReferences
     * @uses ShipmentReferences::setShipmentReference()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference[] $shipmentReference
     */
    public function __construct(array $shipmentReference = array())
    {
        $this
            ->setShipmentReference($shipmentReference);
    }
    /**
     * Get shipmentReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference[]|null
     */
    public function getShipmentReference()
    {
        return isset($this->shipmentReference) ? $this->shipmentReference : null;
    }
    /**
     * Set shipmentReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference[] $shipmentReference
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences
     */
    public function setShipmentReference(array $shipmentReference = array())
    {
        foreach ($shipmentReference as $shipmentReferencesShipmentReferenceItem) {
            // validation for constraint: itemType
            if (!$shipmentReferencesShipmentReferenceItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference) {
                throw new \InvalidArgumentException(sprintf('The shipmentReference property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference, "%s" given', is_object($shipmentReferencesShipmentReferenceItem) ? get_class($shipmentReferencesShipmentReferenceItem) : gettype($shipmentReferencesShipmentReferenceItem)), __LINE__);
            }
        }
        if (is_null($shipmentReference) || (is_array($shipmentReference) && empty($shipmentReference))) {
            unset($this->shipmentReference);
        } else {
            $this->shipmentReference = $shipmentReference;
        }
        return $this;
    }
    /**
     * Add item to shipmentReference value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences
     */
    public function addToShipmentReference(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference) {
            throw new \InvalidArgumentException(sprintf('The shipmentReference property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentReference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReferences
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
