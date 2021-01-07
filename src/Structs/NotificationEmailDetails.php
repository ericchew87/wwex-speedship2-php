<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEmailDetails Structs
 * @subpackage Structs
 */
class NotificationEmailDetails extends AbstractStructBase
{
    /**
     * The emailMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailMessage;
    /**
     * The notificationEmailDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail[]
     */
    public $notificationEmailDetail;
    /**
     * The sendUndeliverableEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sendUndeliverableEmail;
    /**
     * The undeliverableEmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $undeliverableEmailAddress;
    /**
     * Constructor method for NotificationEmailDetails
     * @uses NotificationEmailDetails::setEmailMessage()
     * @uses NotificationEmailDetails::setNotificationEmailDetail()
     * @uses NotificationEmailDetails::setSendUndeliverableEmail()
     * @uses NotificationEmailDetails::setUndeliverableEmailAddress()
     * @param string $emailMessage
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail[] $notificationEmailDetail
     * @param string $sendUndeliverableEmail
     * @param string $undeliverableEmailAddress
     */
    public function __construct($emailMessage = null, array $notificationEmailDetail = array(), $sendUndeliverableEmail = null, $undeliverableEmailAddress = null)
    {
        $this
            ->setEmailMessage($emailMessage)
            ->setNotificationEmailDetail($notificationEmailDetail)
            ->setSendUndeliverableEmail($sendUndeliverableEmail)
            ->setUndeliverableEmailAddress($undeliverableEmailAddress);
    }
    /**
     * Get emailMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailMessage()
    {
        return isset($this->emailMessage) ? $this->emailMessage : null;
    }
    /**
     * Set emailMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailMessage
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
     */
    public function setEmailMessage($emailMessage = null)
    {
        // validation for constraint: string
        if (!is_null($emailMessage) && !is_string($emailMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailMessage)), __LINE__);
        }
        if (is_null($emailMessage) || (is_array($emailMessage) && empty($emailMessage))) {
            unset($this->emailMessage);
        } else {
            $this->emailMessage = $emailMessage;
        }
        return $this;
    }
    /**
     * Get notificationEmailDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail[]|null
     */
    public function getNotificationEmailDetail()
    {
        return isset($this->notificationEmailDetail) ? $this->notificationEmailDetail : null;
    }
    /**
     * Set notificationEmailDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail[] $notificationEmailDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
     */
    public function setNotificationEmailDetail(array $notificationEmailDetail = array())
    {
        foreach ($notificationEmailDetail as $notificationEmailDetailsNotificationEmailDetailItem) {
            // validation for constraint: itemType
            if (!$notificationEmailDetailsNotificationEmailDetailItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail) {
                throw new \InvalidArgumentException(sprintf('The notificationEmailDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail, "%s" given', is_object($notificationEmailDetailsNotificationEmailDetailItem) ? get_class($notificationEmailDetailsNotificationEmailDetailItem) : gettype($notificationEmailDetailsNotificationEmailDetailItem)), __LINE__);
            }
        }
        if (is_null($notificationEmailDetail) || (is_array($notificationEmailDetail) && empty($notificationEmailDetail))) {
            unset($this->notificationEmailDetail);
        } else {
            $this->notificationEmailDetail = $notificationEmailDetail;
        }
        return $this;
    }
    /**
     * Add item to notificationEmailDetail value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
     */
    public function addToNotificationEmailDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail) {
            throw new \InvalidArgumentException(sprintf('The notificationEmailDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notificationEmailDetail[] = $item;
        return $this;
    }
    /**
     * Get sendUndeliverableEmail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSendUndeliverableEmail()
    {
        return isset($this->sendUndeliverableEmail) ? $this->sendUndeliverableEmail : null;
    }
    /**
     * Set sendUndeliverableEmail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sendUndeliverableEmail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
     */
    public function setSendUndeliverableEmail($sendUndeliverableEmail = null)
    {
        // validation for constraint: string
        if (!is_null($sendUndeliverableEmail) && !is_string($sendUndeliverableEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sendUndeliverableEmail)), __LINE__);
        }
        if (is_null($sendUndeliverableEmail) || (is_array($sendUndeliverableEmail) && empty($sendUndeliverableEmail))) {
            unset($this->sendUndeliverableEmail);
        } else {
            $this->sendUndeliverableEmail = $sendUndeliverableEmail;
        }
        return $this;
    }
    /**
     * Get undeliverableEmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUndeliverableEmailAddress()
    {
        return isset($this->undeliverableEmailAddress) ? $this->undeliverableEmailAddress : null;
    }
    /**
     * Set undeliverableEmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $undeliverableEmailAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
     */
    public function setUndeliverableEmailAddress($undeliverableEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($undeliverableEmailAddress) && !is_string($undeliverableEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($undeliverableEmailAddress)), __LINE__);
        }
        if (is_null($undeliverableEmailAddress) || (is_array($undeliverableEmailAddress) && empty($undeliverableEmailAddress))) {
            unset($this->undeliverableEmailAddress);
        } else {
            $this->undeliverableEmailAddress = $undeliverableEmailAddress;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
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
