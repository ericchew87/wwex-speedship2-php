<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLabels Structs
 * @subpackage Structs
 */
class ShipmentLabels extends AbstractStructBase
{
    /**
     * The shipmentLabel
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel[]
     */
    public $shipmentLabel;
    /**
     * Constructor method for ShipmentLabels
     * @uses ShipmentLabels::setShipmentLabel()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel[] $shipmentLabel
     */
    public function __construct(array $shipmentLabel = array())
    {
        $this
            ->setShipmentLabel($shipmentLabel);
    }
    /**
     * Get shipmentLabel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel[]|null
     */
    public function getShipmentLabel()
    {
        return isset($this->shipmentLabel) ? $this->shipmentLabel : null;
    }
    /**
     * Set shipmentLabel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel[] $shipmentLabel
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels
     */
    public function setShipmentLabel(array $shipmentLabel = array())
    {
        foreach ($shipmentLabel as $shipmentLabelsShipmentLabelItem) {
            // validation for constraint: itemType
            if (!$shipmentLabelsShipmentLabelItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel) {
                throw new \InvalidArgumentException(sprintf('The shipmentLabel property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel, "%s" given', is_object($shipmentLabelsShipmentLabelItem) ? get_class($shipmentLabelsShipmentLabelItem) : gettype($shipmentLabelsShipmentLabelItem)), __LINE__);
            }
        }
        if (is_null($shipmentLabel) || (is_array($shipmentLabel) && empty($shipmentLabel))) {
            unset($this->shipmentLabel);
        } else {
            $this->shipmentLabel = $shipmentLabel;
        }
        return $this;
    }
    /**
     * Add item to shipmentLabel value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels
     */
    public function addToShipmentLabel(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel) {
            throw new \InvalidArgumentException(sprintf('The shipmentLabel property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentLabel[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels
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
