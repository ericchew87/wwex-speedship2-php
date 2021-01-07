<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailNotificationDetail Structs
 * @subpackage Structs
 */
class SendEmailNotificationDetail extends AbstractStructBase
{
    /**
     * The notificationEmailDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails
     */
    public $notificationEmailDetails;
    /**
     * The sendEmailNotificationIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sendEmailNotificationIndicator;
    /**
     * Constructor method for SendEmailNotificationDetail
     * @uses SendEmailNotificationDetail::setNotificationEmailDetails()
     * @uses SendEmailNotificationDetail::setSendEmailNotificationIndicator()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails $notificationEmailDetails
     * @param string $sendEmailNotificationIndicator
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails $notificationEmailDetails = null, $sendEmailNotificationIndicator = null)
    {
        $this
            ->setNotificationEmailDetails($notificationEmailDetails)
            ->setSendEmailNotificationIndicator($sendEmailNotificationIndicator);
    }
    /**
     * Get notificationEmailDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails|null
     */
    public function getNotificationEmailDetails()
    {
        return isset($this->notificationEmailDetails) ? $this->notificationEmailDetails : null;
    }
    /**
     * Set notificationEmailDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails $notificationEmailDetails
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail
     */
    public function setNotificationEmailDetails(\ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetails $notificationEmailDetails = null)
    {
        if (is_null($notificationEmailDetails) || (is_array($notificationEmailDetails) && empty($notificationEmailDetails))) {
            unset($this->notificationEmailDetails);
        } else {
            $this->notificationEmailDetails = $notificationEmailDetails;
        }
        return $this;
    }
    /**
     * Get sendEmailNotificationIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSendEmailNotificationIndicator()
    {
        return isset($this->sendEmailNotificationIndicator) ? $this->sendEmailNotificationIndicator : null;
    }
    /**
     * Set sendEmailNotificationIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sendEmailNotificationIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail
     */
    public function setSendEmailNotificationIndicator($sendEmailNotificationIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($sendEmailNotificationIndicator) && !is_string($sendEmailNotificationIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sendEmailNotificationIndicator)), __LINE__);
        }
        if (is_null($sendEmailNotificationIndicator) || (is_array($sendEmailNotificationIndicator) && empty($sendEmailNotificationIndicator))) {
            unset($this->sendEmailNotificationIndicator);
        } else {
            $this->sendEmailNotificationIndicator = $sendEmailNotificationIndicator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SendEmailNotificationDetail
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
