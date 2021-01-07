<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentFullServiceOptions Structs
 * @subpackage Structs
 */
class ShipmentFullServiceOptions extends AbstractStructBase
{
    /**
     * The addtionalParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public $addtionalParameters;
    /**
     * The rateServiceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public $rateServiceOptions;
    /**
     * The shipmentAdditionalServiceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
     */
    public $shipmentAdditionalServiceOptions;
    /**
     * Constructor method for ShipmentFullServiceOptions
     * @uses ShipmentFullServiceOptions::setAddtionalParameters()
     * @uses ShipmentFullServiceOptions::setRateServiceOptions()
     * @uses ShipmentFullServiceOptions::setShipmentAdditionalServiceOptions()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $addtionalParameters
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $rateServiceOptions
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions $shipmentAdditionalServiceOptions
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $addtionalParameters = null, \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $rateServiceOptions = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions $shipmentAdditionalServiceOptions = null)
    {
        $this
            ->setAddtionalParameters($addtionalParameters)
            ->setRateServiceOptions($rateServiceOptions)
            ->setShipmentAdditionalServiceOptions($shipmentAdditionalServiceOptions);
    }
    /**
     * Get addtionalParameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters|null
     */
    public function getAddtionalParameters()
    {
        return isset($this->addtionalParameters) ? $this->addtionalParameters : null;
    }
    /**
     * Set addtionalParameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $addtionalParameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions
     */
    public function setAddtionalParameters(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $addtionalParameters = null)
    {
        if (is_null($addtionalParameters) || (is_array($addtionalParameters) && empty($addtionalParameters))) {
            unset($this->addtionalParameters);
        } else {
            $this->addtionalParameters = $addtionalParameters;
        }
        return $this;
    }
    /**
     * Get rateServiceOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions|null
     */
    public function getRateServiceOptions()
    {
        return isset($this->rateServiceOptions) ? $this->rateServiceOptions : null;
    }
    /**
     * Set rateServiceOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $rateServiceOptions
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions
     */
    public function setRateServiceOptions(\ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $rateServiceOptions = null)
    {
        if (is_null($rateServiceOptions) || (is_array($rateServiceOptions) && empty($rateServiceOptions))) {
            unset($this->rateServiceOptions);
        } else {
            $this->rateServiceOptions = $rateServiceOptions;
        }
        return $this;
    }
    /**
     * Get shipmentAdditionalServiceOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions|null
     */
    public function getShipmentAdditionalServiceOptions()
    {
        return isset($this->shipmentAdditionalServiceOptions) ? $this->shipmentAdditionalServiceOptions : null;
    }
    /**
     * Set shipmentAdditionalServiceOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions $shipmentAdditionalServiceOptions
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions
     */
    public function setShipmentAdditionalServiceOptions(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions $shipmentAdditionalServiceOptions = null)
    {
        if (is_null($shipmentAdditionalServiceOptions) || (is_array($shipmentAdditionalServiceOptions) && empty($shipmentAdditionalServiceOptions))) {
            unset($this->shipmentAdditionalServiceOptions);
        } else {
            $this->shipmentAdditionalServiceOptions = $shipmentAdditionalServiceOptions;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions
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
