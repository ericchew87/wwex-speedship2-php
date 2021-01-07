<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentAdditionalServiceOptions Structs
 * @subpackage Structs
 */
class ShipmentAdditionalServiceOptions extends AbstractStructBase
{
    /**
     * The emailShippingLabelDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
     */
    public $emailShippingLabelDetail;
    /**
     * The schedulePickupDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail
     */
    public $schedulePickupDetail;
    /**
     * The sendEmailNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail
     */
    public $sendEmailNotificationDetail;
    /**
     * The senderReceiptIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $senderReceiptIndicator;
    /**
     * The shipmentLabelSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentLabelSize;
    /**
     * The shipperReleaseIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipperReleaseIndicator;
    /**
     * Constructor method for ShipmentAdditionalServiceOptions
     * @uses ShipmentAdditionalServiceOptions::setEmailShippingLabelDetail()
     * @uses ShipmentAdditionalServiceOptions::setSchedulePickupDetail()
     * @uses ShipmentAdditionalServiceOptions::setSendEmailNotificationDetail()
     * @uses ShipmentAdditionalServiceOptions::setSenderReceiptIndicator()
     * @uses ShipmentAdditionalServiceOptions::setShipmentLabelSize()
     * @uses ShipmentAdditionalServiceOptions::setShipperReleaseIndicator()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail $emailShippingLabelDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail $schedulePickupDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail $sendEmailNotificationDetail
     * @param string $senderReceiptIndicator
     * @param string $shipmentLabelSize
     * @param string $shipperReleaseIndicator
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail $emailShippingLabelDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail $schedulePickupDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail $sendEmailNotificationDetail = null, $senderReceiptIndicator = null, $shipmentLabelSize = null, $shipperReleaseIndicator = null)
    {
        $this
            ->setEmailShippingLabelDetail($emailShippingLabelDetail)
            ->setSchedulePickupDetail($schedulePickupDetail)
            ->setSendEmailNotificationDetail($sendEmailNotificationDetail)
            ->setSenderReceiptIndicator($senderReceiptIndicator)
            ->setShipmentLabelSize($shipmentLabelSize)
            ->setShipperReleaseIndicator($shipperReleaseIndicator);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
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
     * Get schedulePickupDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail|null
     */
    public function getSchedulePickupDetail()
    {
        return isset($this->schedulePickupDetail) ? $this->schedulePickupDetail : null;
    }
    /**
     * Set schedulePickupDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail $schedulePickupDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
     */
    public function setSchedulePickupDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\SchedulePickupDetail $schedulePickupDetail = null)
    {
        if (is_null($schedulePickupDetail) || (is_array($schedulePickupDetail) && empty($schedulePickupDetail))) {
            unset($this->schedulePickupDetail);
        } else {
            $this->schedulePickupDetail = $schedulePickupDetail;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
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
     * Get senderReceiptIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderReceiptIndicator()
    {
        return isset($this->senderReceiptIndicator) ? $this->senderReceiptIndicator : null;
    }
    /**
     * Set senderReceiptIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderReceiptIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
     */
    public function setSenderReceiptIndicator($senderReceiptIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($senderReceiptIndicator) && !is_string($senderReceiptIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderReceiptIndicator)), __LINE__);
        }
        if (is_null($senderReceiptIndicator) || (is_array($senderReceiptIndicator) && empty($senderReceiptIndicator))) {
            unset($this->senderReceiptIndicator);
        } else {
            $this->senderReceiptIndicator = $senderReceiptIndicator;
        }
        return $this;
    }
    /**
     * Get shipmentLabelSize value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentLabelSize()
    {
        return isset($this->shipmentLabelSize) ? $this->shipmentLabelSize : null;
    }
    /**
     * Set shipmentLabelSize value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentLabelSize
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
     */
    public function setShipmentLabelSize($shipmentLabelSize = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentLabelSize) && !is_string($shipmentLabelSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentLabelSize)), __LINE__);
        }
        if (is_null($shipmentLabelSize) || (is_array($shipmentLabelSize) && empty($shipmentLabelSize))) {
            unset($this->shipmentLabelSize);
        } else {
            $this->shipmentLabelSize = $shipmentLabelSize;
        }
        return $this;
    }
    /**
     * Get shipperReleaseIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipperReleaseIndicator()
    {
        return isset($this->shipperReleaseIndicator) ? $this->shipperReleaseIndicator : null;
    }
    /**
     * Set shipperReleaseIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipperReleaseIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
     */
    public function setShipperReleaseIndicator($shipperReleaseIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($shipperReleaseIndicator) && !is_string($shipperReleaseIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipperReleaseIndicator)), __LINE__);
        }
        if (is_null($shipperReleaseIndicator) || (is_array($shipperReleaseIndicator) && empty($shipperReleaseIndicator))) {
            unset($this->shipperReleaseIndicator);
        } else {
            $this->shipperReleaseIndicator = $shipperReleaseIndicator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAdditionalServiceOptions
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
