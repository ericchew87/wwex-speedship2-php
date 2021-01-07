<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceFeeDetail Structs
 * @subpackage Structs
 */
class ServiceFeeDetail extends AbstractStructBase
{
    /**
     * The packageLevelFees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees
     */
    public $packageLevelFees;
    /**
     * The serviceFeeGrandTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $serviceFeeGrandTotal;
    /**
     * The shipmentLevelFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee
     */
    public $shipmentLevelFee;
    /**
     * Constructor method for ServiceFeeDetail
     * @uses ServiceFeeDetail::setPackageLevelFees()
     * @uses ServiceFeeDetail::setServiceFeeGrandTotal()
     * @uses ServiceFeeDetail::setShipmentLevelFee()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees $packageLevelFees
     * @param string $serviceFeeGrandTotal
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee $shipmentLevelFee
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees $packageLevelFees = null, $serviceFeeGrandTotal = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee $shipmentLevelFee = null)
    {
        $this
            ->setPackageLevelFees($packageLevelFees)
            ->setServiceFeeGrandTotal($serviceFeeGrandTotal)
            ->setShipmentLevelFee($shipmentLevelFee);
    }
    /**
     * Get packageLevelFees value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees|null
     */
    public function getPackageLevelFees()
    {
        return isset($this->packageLevelFees) ? $this->packageLevelFees : null;
    }
    /**
     * Set packageLevelFees value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees $packageLevelFees
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail
     */
    public function setPackageLevelFees(\ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees $packageLevelFees = null)
    {
        if (is_null($packageLevelFees) || (is_array($packageLevelFees) && empty($packageLevelFees))) {
            unset($this->packageLevelFees);
        } else {
            $this->packageLevelFees = $packageLevelFees;
        }
        return $this;
    }
    /**
     * Get serviceFeeGrandTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceFeeGrandTotal()
    {
        return isset($this->serviceFeeGrandTotal) ? $this->serviceFeeGrandTotal : null;
    }
    /**
     * Set serviceFeeGrandTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceFeeGrandTotal
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail
     */
    public function setServiceFeeGrandTotal($serviceFeeGrandTotal = null)
    {
        // validation for constraint: string
        if (!is_null($serviceFeeGrandTotal) && !is_string($serviceFeeGrandTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceFeeGrandTotal)), __LINE__);
        }
        if (is_null($serviceFeeGrandTotal) || (is_array($serviceFeeGrandTotal) && empty($serviceFeeGrandTotal))) {
            unset($this->serviceFeeGrandTotal);
        } else {
            $this->serviceFeeGrandTotal = $serviceFeeGrandTotal;
        }
        return $this;
    }
    /**
     * Get shipmentLevelFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee|null
     */
    public function getShipmentLevelFee()
    {
        return isset($this->shipmentLevelFee) ? $this->shipmentLevelFee : null;
    }
    /**
     * Set shipmentLevelFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee $shipmentLevelFee
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail
     */
    public function setShipmentLevelFee(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLevelFee $shipmentLevelFee = null)
    {
        if (is_null($shipmentLevelFee) || (is_array($shipmentLevelFee) && empty($shipmentLevelFee))) {
            unset($this->shipmentLevelFee);
        } else {
            $this->shipmentLevelFee = $shipmentLevelFee;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail
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
