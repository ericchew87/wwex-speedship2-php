<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailShippingLabelDetail Structs
 * @subpackage Structs
 */
class EmailShippingLabelDetail extends AbstractStructBase
{
    /**
     * The emailShippingLabelIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailShippingLabelIndicator;
    /**
     * The fromEmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $fromEmailAddress;
    /**
     * The personalMessage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $personalMessage;
    /**
     * The recipientEmailAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $recipientEmailAddresses;
    /**
     * Constructor method for EmailShippingLabelDetail
     * @uses EmailShippingLabelDetail::setEmailShippingLabelIndicator()
     * @uses EmailShippingLabelDetail::setFromEmailAddress()
     * @uses EmailShippingLabelDetail::setPersonalMessage()
     * @uses EmailShippingLabelDetail::setRecipientEmailAddresses()
     * @param string $emailShippingLabelIndicator
     * @param string $fromEmailAddress
     * @param string $personalMessage
     * @param string $recipientEmailAddresses
     */
    public function __construct($emailShippingLabelIndicator = null, $fromEmailAddress = null, $personalMessage = null, $recipientEmailAddresses = null)
    {
        $this
            ->setEmailShippingLabelIndicator($emailShippingLabelIndicator)
            ->setFromEmailAddress($fromEmailAddress)
            ->setPersonalMessage($personalMessage)
            ->setRecipientEmailAddresses($recipientEmailAddresses);
    }
    /**
     * Get emailShippingLabelIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailShippingLabelIndicator()
    {
        return isset($this->emailShippingLabelIndicator) ? $this->emailShippingLabelIndicator : null;
    }
    /**
     * Set emailShippingLabelIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailShippingLabelIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
     */
    public function setEmailShippingLabelIndicator($emailShippingLabelIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($emailShippingLabelIndicator) && !is_string($emailShippingLabelIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailShippingLabelIndicator)), __LINE__);
        }
        if (is_null($emailShippingLabelIndicator) || (is_array($emailShippingLabelIndicator) && empty($emailShippingLabelIndicator))) {
            unset($this->emailShippingLabelIndicator);
        } else {
            $this->emailShippingLabelIndicator = $emailShippingLabelIndicator;
        }
        return $this;
    }
    /**
     * Get fromEmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFromEmailAddress()
    {
        return isset($this->fromEmailAddress) ? $this->fromEmailAddress : null;
    }
    /**
     * Set fromEmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fromEmailAddress
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
     */
    public function setFromEmailAddress($fromEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmailAddress) && !is_string($fromEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmailAddress)), __LINE__);
        }
        if (is_null($fromEmailAddress) || (is_array($fromEmailAddress) && empty($fromEmailAddress))) {
            unset($this->fromEmailAddress);
        } else {
            $this->fromEmailAddress = $fromEmailAddress;
        }
        return $this;
    }
    /**
     * Get personalMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonalMessage()
    {
        return isset($this->personalMessage) ? $this->personalMessage : null;
    }
    /**
     * Set personalMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personalMessage
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
     */
    public function setPersonalMessage($personalMessage = null)
    {
        // validation for constraint: string
        if (!is_null($personalMessage) && !is_string($personalMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalMessage)), __LINE__);
        }
        if (is_null($personalMessage) || (is_array($personalMessage) && empty($personalMessage))) {
            unset($this->personalMessage);
        } else {
            $this->personalMessage = $personalMessage;
        }
        return $this;
    }
    /**
     * Get recipientEmailAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecipientEmailAddresses()
    {
        return isset($this->recipientEmailAddresses) ? $this->recipientEmailAddresses : null;
    }
    /**
     * Set recipientEmailAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recipientEmailAddresses
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
     */
    public function setRecipientEmailAddresses($recipientEmailAddresses = null)
    {
        // validation for constraint: string
        if (!is_null($recipientEmailAddresses) && !is_string($recipientEmailAddresses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientEmailAddresses)), __LINE__);
        }
        if (is_null($recipientEmailAddresses) || (is_array($recipientEmailAddresses) && empty($recipientEmailAddresses))) {
            unset($this->recipientEmailAddresses);
        } else {
            $this->recipientEmailAddresses = $recipientEmailAddresses;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\EmailShippingLabelDetail
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
