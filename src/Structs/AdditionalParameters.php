<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalParameters Structs
 * @subpackage Structs
 */
class AdditionalParameters extends AbstractStructBase
{
    /**
     * The shipmentParameter
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter[]
     */
    public $shipmentParameter;
    /**
     * Constructor method for AdditionalParameters
     * @uses AdditionalParameters::setShipmentParameter()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter[] $shipmentParameter
     */
    public function __construct(array $shipmentParameter = array())
    {
        $this
            ->setShipmentParameter($shipmentParameter);
    }
    /**
     * Get shipmentParameter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter[]|null
     */
    public function getShipmentParameter()
    {
        return isset($this->shipmentParameter) ? $this->shipmentParameter : null;
    }
    /**
     * Set shipmentParameter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter[] $shipmentParameter
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public function setShipmentParameter(array $shipmentParameter = array())
    {
        foreach ($shipmentParameter as $additionalParametersShipmentParameterItem) {
            // validation for constraint: itemType
            if (!$additionalParametersShipmentParameterItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter) {
                throw new \InvalidArgumentException(sprintf('The shipmentParameter property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter, "%s" given', is_object($additionalParametersShipmentParameterItem) ? get_class($additionalParametersShipmentParameterItem) : gettype($additionalParametersShipmentParameterItem)), __LINE__);
            }
        }
        if (is_null($shipmentParameter) || (is_array($shipmentParameter) && empty($shipmentParameter))) {
            unset($this->shipmentParameter);
        } else {
            $this->shipmentParameter = $shipmentParameter;
        }
        return $this;
    }
    /**
     * Add item to shipmentParameter value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public function addToShipmentParameter(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter) {
            throw new \InvalidArgumentException(sprintf('The shipmentParameter property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentParameter, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->shipmentParameter[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
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
