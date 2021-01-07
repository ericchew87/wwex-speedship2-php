<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLevelFee Structs
 * @subpackage Structs
 */
class ShipmentLevelFee extends AbstractStructBase
{
    /**
     * The feeItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems
     */
    public $feeItems;
    /**
     * The shipmentLevelFeeSubTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentLevelFeeSubTotal;
    /**
     * Constructor method for ShipmentLevelFee
     * @uses ShipmentLevelFee::setFeeItems()
     * @uses ShipmentLevelFee::setShipmentLevelFeeSubTotal()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems
     * @param string $shipmentLevelFeeSubTotal
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems = null, $shipmentLevelFeeSubTotal = null)
    {
        $this
            ->setFeeItems($feeItems)
            ->setShipmentLevelFeeSubTotal($shipmentLevelFeeSubTotal);
    }
    /**
     * Get feeItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems|null
     */
    public function getFeeItems()
    {
        return isset($this->feeItems) ? $this->feeItems : null;
    }
    /**
     * Set feeItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee
     */
    public function setFeeItems(\ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems = null)
    {
        if (is_null($feeItems) || (is_array($feeItems) && empty($feeItems))) {
            unset($this->feeItems);
        } else {
            $this->feeItems = $feeItems;
        }
        return $this;
    }
    /**
     * Get shipmentLevelFeeSubTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentLevelFeeSubTotal()
    {
        return isset($this->shipmentLevelFeeSubTotal) ? $this->shipmentLevelFeeSubTotal : null;
    }
    /**
     * Set shipmentLevelFeeSubTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentLevelFeeSubTotal
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee
     */
    public function setShipmentLevelFeeSubTotal($shipmentLevelFeeSubTotal = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentLevelFeeSubTotal) && !is_string($shipmentLevelFeeSubTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentLevelFeeSubTotal)), __LINE__);
        }
        if (is_null($shipmentLevelFeeSubTotal) || (is_array($shipmentLevelFeeSubTotal) && empty($shipmentLevelFeeSubTotal))) {
            unset($this->shipmentLevelFeeSubTotal);
        } else {
            $this->shipmentLevelFeeSubTotal = $shipmentLevelFeeSubTotal;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee
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
