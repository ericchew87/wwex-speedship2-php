<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UPSServiceDetail Structs
 * @subpackage Structs
 */
class UPSServiceDetail extends AbstractStructBase
{
    /**
     * The estimateDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $estimateDelivery;
    /**
     * The pickupBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupBy;
    /**
     * The rateEstimateId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $rateEstimateId;
    /**
     * The serviceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $serviceCode;
    /**
     * The serviceDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $serviceDescription;
    /**
     * The serviceFeeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail
     */
    public $serviceFeeDetail;
    /**
     * Constructor method for UPSServiceDetail
     * @uses UPSServiceDetail::setEstimateDelivery()
     * @uses UPSServiceDetail::setPickupBy()
     * @uses UPSServiceDetail::setRateEstimateId()
     * @uses UPSServiceDetail::setServiceCode()
     * @uses UPSServiceDetail::setServiceDescription()
     * @uses UPSServiceDetail::setServiceFeeDetail()
     * @param string $estimateDelivery
     * @param string $pickupBy
     * @param string $rateEstimateId
     * @param string $serviceCode
     * @param string $serviceDescription
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail $serviceFeeDetail
     */
    public function __construct($estimateDelivery = null, $pickupBy = null, $rateEstimateId = null, $serviceCode = null, $serviceDescription = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail $serviceFeeDetail = null)
    {
        $this
            ->setEstimateDelivery($estimateDelivery)
            ->setPickupBy($pickupBy)
            ->setRateEstimateId($rateEstimateId)
            ->setServiceCode($serviceCode)
            ->setServiceDescription($serviceDescription)
            ->setServiceFeeDetail($serviceFeeDetail);
    }
    /**
     * Get estimateDelivery value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEstimateDelivery()
    {
        return isset($this->estimateDelivery) ? $this->estimateDelivery : null;
    }
    /**
     * Set estimateDelivery value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $estimateDelivery
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
     */
    public function setEstimateDelivery($estimateDelivery = null)
    {
        // validation for constraint: string
        if (!is_null($estimateDelivery) && !is_string($estimateDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimateDelivery)), __LINE__);
        }
        if (is_null($estimateDelivery) || (is_array($estimateDelivery) && empty($estimateDelivery))) {
            unset($this->estimateDelivery);
        } else {
            $this->estimateDelivery = $estimateDelivery;
        }
        return $this;
    }
    /**
     * Get pickupBy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupBy()
    {
        return isset($this->pickupBy) ? $this->pickupBy : null;
    }
    /**
     * Set pickupBy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupBy
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
     */
    public function setPickupBy($pickupBy = null)
    {
        // validation for constraint: string
        if (!is_null($pickupBy) && !is_string($pickupBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupBy)), __LINE__);
        }
        if (is_null($pickupBy) || (is_array($pickupBy) && empty($pickupBy))) {
            unset($this->pickupBy);
        } else {
            $this->pickupBy = $pickupBy;
        }
        return $this;
    }
    /**
     * Get rateEstimateId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRateEstimateId()
    {
        return isset($this->rateEstimateId) ? $this->rateEstimateId : null;
    }
    /**
     * Set rateEstimateId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rateEstimateId
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
     */
    public function setRateEstimateId($rateEstimateId = null)
    {
        // validation for constraint: string
        if (!is_null($rateEstimateId) && !is_string($rateEstimateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateEstimateId)), __LINE__);
        }
        if (is_null($rateEstimateId) || (is_array($rateEstimateId) && empty($rateEstimateId))) {
            unset($this->rateEstimateId);
        } else {
            $this->rateEstimateId = $rateEstimateId;
        }
        return $this;
    }
    /**
     * Get serviceCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceCode()
    {
        return isset($this->serviceCode) ? $this->serviceCode : null;
    }
    /**
     * Set serviceCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
     */
    public function setServiceCode($serviceCode = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCode)), __LINE__);
        }
        if (is_null($serviceCode) || (is_array($serviceCode) && empty($serviceCode))) {
            unset($this->serviceCode);
        } else {
            $this->serviceCode = $serviceCode;
        }
        return $this;
    }
    /**
     * Get serviceDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceDescription()
    {
        return isset($this->serviceDescription) ? $this->serviceDescription : null;
    }
    /**
     * Set serviceDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceDescription
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
     */
    public function setServiceDescription($serviceDescription = null)
    {
        // validation for constraint: string
        if (!is_null($serviceDescription) && !is_string($serviceDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceDescription)), __LINE__);
        }
        if (is_null($serviceDescription) || (is_array($serviceDescription) && empty($serviceDescription))) {
            unset($this->serviceDescription);
        } else {
            $this->serviceDescription = $serviceDescription;
        }
        return $this;
    }
    /**
     * Get serviceFeeDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail|null
     */
    public function getServiceFeeDetail()
    {
        return isset($this->serviceFeeDetail) ? $this->serviceFeeDetail : null;
    }
    /**
     * Set serviceFeeDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail $serviceFeeDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
     */
    public function setServiceFeeDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\ServiceFeeDetail $serviceFeeDetail = null)
    {
        if (is_null($serviceFeeDetail) || (is_array($serviceFeeDetail) && empty($serviceFeeDetail))) {
            unset($this->serviceFeeDetail);
        } else {
            $this->serviceFeeDetail = $serviceFeeDetail;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail
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
