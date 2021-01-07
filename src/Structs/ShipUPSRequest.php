<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipUPSRequest Structs
 * @subpackage Structs
 */
class ShipUPSRequest extends AbstractStructBase
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
     * The emailShippingLabelDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
     */
    public $emailShippingLabelDetail;
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
     * The sendEmailNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail
     */
    public $sendEmailNotificationDetail;
    /**
     * The senderFullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress
     */
    public $senderFullAddress;
    /**
     * The shipmentFullServiceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions
     */
    public $shipmentFullServiceOptions;
    /**
     * The shipmentPackagesWithAddInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo
     */
    public $shipmentPackagesWithAddInfo;
    /**
     * The shipmentPickupInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public $shipmentPickupInfo;
    /**
     * The shipmentServiceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentServiceCode;
    /**
     * Constructor method for ShipUPSRequest
     * @uses ShipUPSRequest::setBillChargesToDetail()
     * @uses ShipUPSRequest::setEmailShippingLabelDetail()
     * @uses ShipUPSRequest::setReceiverFullAddress()
     * @uses ShipUPSRequest::setReturnShipmentAddress()
     * @uses ShipUPSRequest::setSendEmailNotificationDetail()
     * @uses ShipUPSRequest::setSenderFullAddress()
     * @uses ShipUPSRequest::setShipmentFullServiceOptions()
     * @uses ShipUPSRequest::setShipmentPackagesWithAddInfo()
     * @uses ShipUPSRequest::setShipmentPickupInfo()
     * @uses ShipUPSRequest::setShipmentServiceCode()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail $billChargesToDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail $emailShippingLabelDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress $receiverFullAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress $returnShipmentAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail $sendEmailNotificationDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress $senderFullAddress
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions $shipmentFullServiceOptions
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo $shipmentPackagesWithAddInfo
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo
     * @param string $shipmentServiceCode
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail $billChargesToDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail $emailShippingLabelDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress $receiverFullAddress = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ReturnFullAddress $returnShipmentAddress = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail $sendEmailNotificationDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress $senderFullAddress = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions $shipmentFullServiceOptions = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo $shipmentPackagesWithAddInfo = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo = null, $shipmentServiceCode = null)
    {
        $this
            ->setBillChargesToDetail($billChargesToDetail)
            ->setEmailShippingLabelDetail($emailShippingLabelDetail)
            ->setReceiverFullAddress($receiverFullAddress)
            ->setReturnShipmentAddress($returnShipmentAddress)
            ->setSendEmailNotificationDetail($sendEmailNotificationDetail)
            ->setSenderFullAddress($senderFullAddress)
            ->setShipmentFullServiceOptions($shipmentFullServiceOptions)
            ->setShipmentPackagesWithAddInfo($shipmentPackagesWithAddInfo)
            ->setShipmentPickupInfo($shipmentPickupInfo)
            ->setShipmentServiceCode($shipmentServiceCode);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
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
     * Get emailShippingLabelDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail|null
     */
    public function getEmailShippingLabelDetail()
    {
        return isset($this->emailShippingLabelDetail) ? $this->emailShippingLabelDetail : null;
    }
    /**
     * Set emailShippingLabelDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail $emailShippingLabelDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public function setEmailShippingLabelDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail $emailShippingLabelDetail = null)
    {
        if (is_null($emailShippingLabelDetail) || (is_array($emailShippingLabelDetail) && empty($emailShippingLabelDetail))) {
            unset($this->emailShippingLabelDetail);
        } else {
            $this->emailShippingLabelDetail = $emailShippingLabelDetail;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
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
     * Get sendEmailNotificationDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail|null
     */
    public function getSendEmailNotificationDetail()
    {
        return isset($this->sendEmailNotificationDetail) ? $this->sendEmailNotificationDetail : null;
    }
    /**
     * Set sendEmailNotificationDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail $sendEmailNotificationDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public function setSendEmailNotificationDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail $sendEmailNotificationDetail = null)
    {
        if (is_null($sendEmailNotificationDetail) || (is_array($sendEmailNotificationDetail) && empty($sendEmailNotificationDetail))) {
            unset($this->sendEmailNotificationDetail);
        } else {
            $this->sendEmailNotificationDetail = $sendEmailNotificationDetail;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
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
     * Get shipmentFullServiceOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions|null
     */
    public function getShipmentFullServiceOptions()
    {
        return isset($this->shipmentFullServiceOptions) ? $this->shipmentFullServiceOptions : null;
    }
    /**
     * Set shipmentFullServiceOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions $shipmentFullServiceOptions
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public function setShipmentFullServiceOptions(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentFullServiceOptions $shipmentFullServiceOptions = null)
    {
        if (is_null($shipmentFullServiceOptions) || (is_array($shipmentFullServiceOptions) && empty($shipmentFullServiceOptions))) {
            unset($this->shipmentFullServiceOptions);
        } else {
            $this->shipmentFullServiceOptions = $shipmentFullServiceOptions;
        }
        return $this;
    }
    /**
     * Get shipmentPackagesWithAddInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo|null
     */
    public function getShipmentPackagesWithAddInfo()
    {
        return isset($this->shipmentPackagesWithAddInfo) ? $this->shipmentPackagesWithAddInfo : null;
    }
    /**
     * Set shipmentPackagesWithAddInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo $shipmentPackagesWithAddInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public function setShipmentPackagesWithAddInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackagesWithAddInfo $shipmentPackagesWithAddInfo = null)
    {
        if (is_null($shipmentPackagesWithAddInfo) || (is_array($shipmentPackagesWithAddInfo) && empty($shipmentPackagesWithAddInfo))) {
            unset($this->shipmentPackagesWithAddInfo);
        } else {
            $this->shipmentPackagesWithAddInfo = $shipmentPackagesWithAddInfo;
        }
        return $this;
    }
    /**
     * Get shipmentPickupInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo|null
     */
    public function getShipmentPickupInfo()
    {
        return isset($this->shipmentPickupInfo) ? $this->shipmentPickupInfo : null;
    }
    /**
     * Set shipmentPickupInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public function setShipmentPickupInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo $shipmentPickupInfo = null)
    {
        if (is_null($shipmentPickupInfo) || (is_array($shipmentPickupInfo) && empty($shipmentPickupInfo))) {
            unset($this->shipmentPickupInfo);
        } else {
            $this->shipmentPickupInfo = $shipmentPickupInfo;
        }
        return $this;
    }
    /**
     * Get shipmentServiceCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentServiceCode()
    {
        return isset($this->shipmentServiceCode) ? $this->shipmentServiceCode : null;
    }
    /**
     * Set shipmentServiceCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentServiceCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
     */
    public function setShipmentServiceCode($shipmentServiceCode = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentServiceCode) && !is_string($shipmentServiceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentServiceCode)), __LINE__);
        }
        if (is_null($shipmentServiceCode) || (is_array($shipmentServiceCode) && empty($shipmentServiceCode))) {
            unset($this->shipmentServiceCode);
        } else {
            $this->shipmentServiceCode = $shipmentServiceCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipUPSRequest
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
