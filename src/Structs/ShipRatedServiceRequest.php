<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipRatedServiceRequest Structs
 * @subpackage Structs
 */
class ShipRatedServiceRequest extends AbstractStructBase
{
    /**
     * The billChargesToDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail
     */
    public $billChargesToDetail;
    /**
     * The receiverFullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress
     */
    public $receiverFullAddress;
    /**
     * The returnShipmentAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress
     */
    public $returnShipmentAddress;
    /**
     * The senderFullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress
     */
    public $senderFullAddress;
    /**
     * The shipmentAdditionalServiceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
     */
    public $shipmentAdditionalServiceOptions;
    /**
     * The shipmentPackageAdditionalInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo
     */
    public $shipmentPackageAdditionalInfo;
    /**
     * The shipmentRateEstimateId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentRateEstimateId;
    /**
     * Constructor method for ShipRatedServiceRequest
     * @uses ShipRatedServiceRequest::setBillChargesToDetail()
     * @uses ShipRatedServiceRequest::setReceiverFullAddress()
     * @uses ShipRatedServiceRequest::setReturnShipmentAddress()
     * @uses ShipRatedServiceRequest::setSenderFullAddress()
     * @uses ShipRatedServiceRequest::setShipmentAdditionalServiceOptions()
     * @uses ShipRatedServiceRequest::setShipmentPackageAdditionalInfo()
     * @uses ShipRatedServiceRequest::setShipmentRateEstimateId()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail $billChargesToDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress $receiverFullAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress $returnShipmentAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress $senderFullAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions $shipmentAdditionalServiceOptions
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo
     * @param string $shipmentRateEstimateId
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail $billChargesToDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress $receiverFullAddress = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress $returnShipmentAddress = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress $senderFullAddress = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions $shipmentAdditionalServiceOptions = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo = null, $shipmentRateEstimateId = null)
    {
        $this
            ->setBillChargesToDetail($billChargesToDetail)
            ->setReceiverFullAddress($receiverFullAddress)
            ->setReturnShipmentAddress($returnShipmentAddress)
            ->setSenderFullAddress($senderFullAddress)
            ->setShipmentAdditionalServiceOptions($shipmentAdditionalServiceOptions)
            ->setShipmentPackageAdditionalInfo($shipmentPackageAdditionalInfo)
            ->setShipmentRateEstimateId($shipmentRateEstimateId);
    }
    /**
     * Get billChargesToDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail|null
     */
    public function getBillChargesToDetail()
    {
        return isset($this->billChargesToDetail) ? $this->billChargesToDetail : null;
    }
    /**
     * Set billChargesToDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail $billChargesToDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public function setBillChargesToDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail $billChargesToDetail = null)
    {
        if (is_null($billChargesToDetail) || (is_array($billChargesToDetail) && empty($billChargesToDetail))) {
            unset($this->billChargesToDetail);
        } else {
            $this->billChargesToDetail = $billChargesToDetail;
        }
        return $this;
    }
    /**
     * Get receiverFullAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress|null
     */
    public function getReceiverFullAddress()
    {
        return isset($this->receiverFullAddress) ? $this->receiverFullAddress : null;
    }
    /**
     * Set receiverFullAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress $receiverFullAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public function setReceiverFullAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress $receiverFullAddress = null)
    {
        if (is_null($receiverFullAddress) || (is_array($receiverFullAddress) && empty($receiverFullAddress))) {
            unset($this->receiverFullAddress);
        } else {
            $this->receiverFullAddress = $receiverFullAddress;
        }
        return $this;
    }
    /**
     * Get returnShipmentAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress|null
     */
    public function getReturnShipmentAddress()
    {
        return isset($this->returnShipmentAddress) ? $this->returnShipmentAddress : null;
    }
    /**
     * Set returnShipmentAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress $returnShipmentAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public function setReturnShipmentAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress $returnShipmentAddress = null)
    {
        if (is_null($returnShipmentAddress) || (is_array($returnShipmentAddress) && empty($returnShipmentAddress))) {
            unset($this->returnShipmentAddress);
        } else {
            $this->returnShipmentAddress = $returnShipmentAddress;
        }
        return $this;
    }
    /**
     * Get senderFullAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress|null
     */
    public function getSenderFullAddress()
    {
        return isset($this->senderFullAddress) ? $this->senderFullAddress : null;
    }
    /**
     * Set senderFullAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress $senderFullAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public function setSenderFullAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress $senderFullAddress = null)
    {
        if (is_null($senderFullAddress) || (is_array($senderFullAddress) && empty($senderFullAddress))) {
            unset($this->senderFullAddress);
        } else {
            $this->senderFullAddress = $senderFullAddress;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
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
     * Get shipmentPackageAdditionalInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo|null
     */
    public function getShipmentPackageAdditionalInfo()
    {
        return isset($this->shipmentPackageAdditionalInfo) ? $this->shipmentPackageAdditionalInfo : null;
    }
    /**
     * Set shipmentPackageAdditionalInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public function setShipmentPackageAdditionalInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageAdditionalInfo $shipmentPackageAdditionalInfo = null)
    {
        if (is_null($shipmentPackageAdditionalInfo) || (is_array($shipmentPackageAdditionalInfo) && empty($shipmentPackageAdditionalInfo))) {
            unset($this->shipmentPackageAdditionalInfo);
        } else {
            $this->shipmentPackageAdditionalInfo = $shipmentPackageAdditionalInfo;
        }
        return $this;
    }
    /**
     * Get shipmentRateEstimateId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentRateEstimateId()
    {
        return isset($this->shipmentRateEstimateId) ? $this->shipmentRateEstimateId : null;
    }
    /**
     * Set shipmentRateEstimateId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentRateEstimateId
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public function setShipmentRateEstimateId($shipmentRateEstimateId = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentRateEstimateId) && !is_string($shipmentRateEstimateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentRateEstimateId)), __LINE__);
        }
        if (is_null($shipmentRateEstimateId) || (is_array($shipmentRateEstimateId) && empty($shipmentRateEstimateId))) {
            unset($this->shipmentRateEstimateId);
        } else {
            $this->shipmentRateEstimateId = $shipmentRateEstimateId;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
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
