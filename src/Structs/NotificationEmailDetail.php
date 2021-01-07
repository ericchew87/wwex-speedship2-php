<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationEmailDetail Structs
 * @subpackage Structs
 */
class NotificationEmailDetail extends AbstractStructBase
{
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailAddress;
    /**
     * The emailDeliveryIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailDeliveryIndicator;
    /**
     * The emailExceptionIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailExceptionIndicator;
    /**
     * The emailShipIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailShipIndicator;
    /**
     * Constructor method for NotificationEmailDetail
     * @uses NotificationEmailDetail::setEmailAddress()
     * @uses NotificationEmailDetail::setEmailDeliveryIndicator()
     * @uses NotificationEmailDetail::setEmailExceptionIndicator()
     * @uses NotificationEmailDetail::setEmailShipIndicator()
     * @param string $emailAddress
     * @param string $emailDeliveryIndicator
     * @param string $emailExceptionIndicator
     * @param string $emailShipIndicator
     */
    public function __construct($emailAddress = null, $emailDeliveryIndicator = null, $emailExceptionIndicator = null, $emailShipIndicator = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setEmailDeliveryIndicator($emailDeliveryIndicator)
            ->setEmailExceptionIndicator($emailExceptionIndicator)
            ->setEmailShipIndicator($emailShipIndicator);
    }
    /**
     * Get emailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailAddress()
    {
        return isset($this->emailAddress) ? $this->emailAddress : null;
    }
    /**
     * Set emailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->emailAddress);
        } else {
            $this->emailAddress = $emailAddress;
        }
        return $this;
    }
    /**
     * Get emailDeliveryIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailDeliveryIndicator()
    {
        return isset($this->emailDeliveryIndicator) ? $this->emailDeliveryIndicator : null;
    }
    /**
     * Set emailDeliveryIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailDeliveryIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail
     */
    public function setEmailDeliveryIndicator($emailDeliveryIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($emailDeliveryIndicator) && !is_string($emailDeliveryIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailDeliveryIndicator)), __LINE__);
        }
        if (is_null($emailDeliveryIndicator) || (is_array($emailDeliveryIndicator) && empty($emailDeliveryIndicator))) {
            unset($this->emailDeliveryIndicator);
        } else {
            $this->emailDeliveryIndicator = $emailDeliveryIndicator;
        }
        return $this;
    }
    /**
     * Get emailExceptionIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailExceptionIndicator()
    {
        return isset($this->emailExceptionIndicator) ? $this->emailExceptionIndicator : null;
    }
    /**
     * Set emailExceptionIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailExceptionIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail
     */
    public function setEmailExceptionIndicator($emailExceptionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($emailExceptionIndicator) && !is_string($emailExceptionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailExceptionIndicator)), __LINE__);
        }
        if (is_null($emailExceptionIndicator) || (is_array($emailExceptionIndicator) && empty($emailExceptionIndicator))) {
            unset($this->emailExceptionIndicator);
        } else {
            $this->emailExceptionIndicator = $emailExceptionIndicator;
        }
        return $this;
    }
    /**
     * Get emailShipIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailShipIndicator()
    {
        return isset($this->emailShipIndicator) ? $this->emailShipIndicator : null;
    }
    /**
     * Set emailShipIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailShipIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail
     */
    public function setEmailShipIndicator($emailShipIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($emailShipIndicator) && !is_string($emailShipIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailShipIndicator)), __LINE__);
        }
        if (is_null($emailShipIndicator) || (is_array($emailShipIndicator) && empty($emailShipIndicator))) {
            unset($this->emailShipIndicator);
        } else {
            $this->emailShipIndicator = $emailShipIndicator;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\NotificationEmailDetail
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
