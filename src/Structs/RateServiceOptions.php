<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateServiceOptions Structs
 * @subpackage Structs
 */
class RateServiceOptions extends AbstractStructBase
{
    /**
     * The additionalParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public $additionalParameters;
    /**
     * The carbonNeutralIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $carbonNeutralIndicator;
    /**
     * The codIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $codIndicator;
    /**
     * The confirmDeliveryIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $confirmDeliveryIndicator;
    /**
     * The deliveryOnSatIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $deliveryOnSatIndicator;
    /**
     * The handlingChargeIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $handlingChargeIndicator;
    /**
     * The returnLabelIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $returnLabelIndicator;
    /**
     * The schedulePickupIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $schedulePickupIndicator;
    /**
     * The shipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentType;
    /**
     * Constructor method for RateServiceOptions
     * @uses RateServiceOptions::setAdditionalParameters()
     * @uses RateServiceOptions::setCarbonNeutralIndicator()
     * @uses RateServiceOptions::setCodIndicator()
     * @uses RateServiceOptions::setConfirmDeliveryIndicator()
     * @uses RateServiceOptions::setDeliveryOnSatIndicator()
     * @uses RateServiceOptions::setHandlingChargeIndicator()
     * @uses RateServiceOptions::setReturnLabelIndicator()
     * @uses RateServiceOptions::setSchedulePickupIndicator()
     * @uses RateServiceOptions::setShipmentType()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @param string $carbonNeutralIndicator
     * @param string $codIndicator
     * @param string $confirmDeliveryIndicator
     * @param string $deliveryOnSatIndicator
     * @param string $handlingChargeIndicator
     * @param string $returnLabelIndicator
     * @param string $schedulePickupIndicator
     * @param string $shipmentType
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null, $carbonNeutralIndicator = null, $codIndicator = null, $confirmDeliveryIndicator = null, $deliveryOnSatIndicator = null, $handlingChargeIndicator = null, $returnLabelIndicator = null, $schedulePickupIndicator = null, $shipmentType = null)
    {
        $this
            ->setAdditionalParameters($additionalParameters)
            ->setCarbonNeutralIndicator($carbonNeutralIndicator)
            ->setCodIndicator($codIndicator)
            ->setConfirmDeliveryIndicator($confirmDeliveryIndicator)
            ->setDeliveryOnSatIndicator($deliveryOnSatIndicator)
            ->setHandlingChargeIndicator($handlingChargeIndicator)
            ->setReturnLabelIndicator($returnLabelIndicator)
            ->setSchedulePickupIndicator($schedulePickupIndicator)
            ->setShipmentType($shipmentType);
    }
    /**
     * Get additionalParameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters|null
     */
    public function getAdditionalParameters()
    {
        return isset($this->additionalParameters) ? $this->additionalParameters : null;
    }
    /**
     * Set additionalParameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setAdditionalParameters(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null)
    {
        if (is_null($additionalParameters) || (is_array($additionalParameters) && empty($additionalParameters))) {
            unset($this->additionalParameters);
        } else {
            $this->additionalParameters = $additionalParameters;
        }
        return $this;
    }
    /**
     * Get carbonNeutralIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarbonNeutralIndicator()
    {
        return isset($this->carbonNeutralIndicator) ? $this->carbonNeutralIndicator : null;
    }
    /**
     * Set carbonNeutralIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carbonNeutralIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setCarbonNeutralIndicator($carbonNeutralIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($carbonNeutralIndicator) && !is_string($carbonNeutralIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carbonNeutralIndicator)), __LINE__);
        }
        if (is_null($carbonNeutralIndicator) || (is_array($carbonNeutralIndicator) && empty($carbonNeutralIndicator))) {
            unset($this->carbonNeutralIndicator);
        } else {
            $this->carbonNeutralIndicator = $carbonNeutralIndicator;
        }
        return $this;
    }
    /**
     * Get codIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCodIndicator()
    {
        return isset($this->codIndicator) ? $this->codIndicator : null;
    }
    /**
     * Set codIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $codIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setCodIndicator($codIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($codIndicator) && !is_string($codIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codIndicator)), __LINE__);
        }
        if (is_null($codIndicator) || (is_array($codIndicator) && empty($codIndicator))) {
            unset($this->codIndicator);
        } else {
            $this->codIndicator = $codIndicator;
        }
        return $this;
    }
    /**
     * Get confirmDeliveryIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfirmDeliveryIndicator()
    {
        return isset($this->confirmDeliveryIndicator) ? $this->confirmDeliveryIndicator : null;
    }
    /**
     * Set confirmDeliveryIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $confirmDeliveryIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setConfirmDeliveryIndicator($confirmDeliveryIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($confirmDeliveryIndicator) && !is_string($confirmDeliveryIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmDeliveryIndicator)), __LINE__);
        }
        if (is_null($confirmDeliveryIndicator) || (is_array($confirmDeliveryIndicator) && empty($confirmDeliveryIndicator))) {
            unset($this->confirmDeliveryIndicator);
        } else {
            $this->confirmDeliveryIndicator = $confirmDeliveryIndicator;
        }
        return $this;
    }
    /**
     * Get deliveryOnSatIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeliveryOnSatIndicator()
    {
        return isset($this->deliveryOnSatIndicator) ? $this->deliveryOnSatIndicator : null;
    }
    /**
     * Set deliveryOnSatIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deliveryOnSatIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setDeliveryOnSatIndicator($deliveryOnSatIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryOnSatIndicator) && !is_string($deliveryOnSatIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryOnSatIndicator)), __LINE__);
        }
        if (is_null($deliveryOnSatIndicator) || (is_array($deliveryOnSatIndicator) && empty($deliveryOnSatIndicator))) {
            unset($this->deliveryOnSatIndicator);
        } else {
            $this->deliveryOnSatIndicator = $deliveryOnSatIndicator;
        }
        return $this;
    }
    /**
     * Get handlingChargeIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHandlingChargeIndicator()
    {
        return isset($this->handlingChargeIndicator) ? $this->handlingChargeIndicator : null;
    }
    /**
     * Set handlingChargeIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $handlingChargeIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setHandlingChargeIndicator($handlingChargeIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($handlingChargeIndicator) && !is_string($handlingChargeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingChargeIndicator)), __LINE__);
        }
        if (is_null($handlingChargeIndicator) || (is_array($handlingChargeIndicator) && empty($handlingChargeIndicator))) {
            unset($this->handlingChargeIndicator);
        } else {
            $this->handlingChargeIndicator = $handlingChargeIndicator;
        }
        return $this;
    }
    /**
     * Get returnLabelIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReturnLabelIndicator()
    {
        return isset($this->returnLabelIndicator) ? $this->returnLabelIndicator : null;
    }
    /**
     * Set returnLabelIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $returnLabelIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setReturnLabelIndicator($returnLabelIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($returnLabelIndicator) && !is_string($returnLabelIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnLabelIndicator)), __LINE__);
        }
        if (is_null($returnLabelIndicator) || (is_array($returnLabelIndicator) && empty($returnLabelIndicator))) {
            unset($this->returnLabelIndicator);
        } else {
            $this->returnLabelIndicator = $returnLabelIndicator;
        }
        return $this;
    }
    /**
     * Get schedulePickupIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSchedulePickupIndicator()
    {
        return isset($this->schedulePickupIndicator) ? $this->schedulePickupIndicator : null;
    }
    /**
     * Set schedulePickupIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $schedulePickupIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setSchedulePickupIndicator($schedulePickupIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($schedulePickupIndicator) && !is_string($schedulePickupIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($schedulePickupIndicator)), __LINE__);
        }
        if (is_null($schedulePickupIndicator) || (is_array($schedulePickupIndicator) && empty($schedulePickupIndicator))) {
            unset($this->schedulePickupIndicator);
        } else {
            $this->schedulePickupIndicator = $schedulePickupIndicator;
        }
        return $this;
    }
    /**
     * Get shipmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentType()
    {
        return isset($this->shipmentType) ? $this->shipmentType : null;
    }
    /**
     * Set shipmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentType
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public function setShipmentType($shipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentType) && !is_string($shipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentType)), __LINE__);
        }
        if (is_null($shipmentType) || (is_array($shipmentType) && empty($shipmentType))) {
            unset($this->shipmentType);
        } else {
            $this->shipmentType = $shipmentType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
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
