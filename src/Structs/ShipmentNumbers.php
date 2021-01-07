<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentNumbers Structs
 * @subpackage Structs
 */
class ShipmentNumbers extends AbstractStructBase
{
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $shipmentNumber;
    /**
     * Constructor method for ShipmentNumbers
     * @uses ShipmentNumbers::setShipmentNumber()
     * @param string[] $shipmentNumber
     */
    public function __construct(array $shipmentNumber = array())
    {
        $this
            ->setShipmentNumber($shipmentNumber);
    }
    /**
     * Get shipmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getShipmentNumber()
    {
        return isset($this->shipmentNumber) ? $this->shipmentNumber : null;
    }
    /**
     * Set shipmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $shipmentNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers
     */
    public function setShipmentNumber(array $shipmentNumber = array())
    {
        foreach ($shipmentNumber as $shipmentNumbersShipmentNumberItem) {
            // validation for constraint: itemType
            if (!is_string($shipmentNumbersShipmentNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The shipmentNumber property can only contain items of string, "%s" given', is_object($shipmentNumbersShipmentNumberItem) ? get_class($shipmentNumbersShipmentNumberItem) : gettype($shipmentNumbersShipmentNumberItem)), __LINE__);
            }
        }
        if (is_null($shipmentNumber) || (is_array($shipmentNumber) && empty($shipmentNumber))) {
            unset($this->shipmentNumber);
        } else {
            $this->shipmentNumber = $shipmentNumber;
        }
        return $this;
    }
    /**
     * Add item to shipmentNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers
     */
    public function addToShipmentNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The shipmentNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentNumbers
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
