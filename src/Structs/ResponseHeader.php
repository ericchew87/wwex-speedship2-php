<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseHeader Structs
 * @subpackage Structs
 */
class ResponseHeader extends AbstractStructBase
{
    /**
     * The errorDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription
     */
    public $errorDescriptions;
    /**
     * The notifications
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\Notification
     */
    public $notifications;
    /**
     * The responseStatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $responseStatusCode;
    /**
     * The responseStatusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $responseStatusDescription;
    /**
     * Constructor method for ResponseHeader
     * @uses ResponseHeader::setErrorDescriptions()
     * @uses ResponseHeader::setNotifications()
     * @uses ResponseHeader::setResponseStatusCode()
     * @uses ResponseHeader::setResponseStatusDescription()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription $errorDescriptions
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\Notification $notifications
     * @param string $responseStatusCode
     * @param string $responseStatusDescription
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription $errorDescriptions = null, \ericchew87\WWEXSpeedShip2PHP\Structs\Notification $notifications = null, $responseStatusCode = null, $responseStatusDescription = null)
    {
        $this
            ->setErrorDescriptions($errorDescriptions)
            ->setNotifications($notifications)
            ->setResponseStatusCode($responseStatusCode)
            ->setResponseStatusDescription($responseStatusDescription);
    }
    /**
     * Get errorDescriptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription|null
     */
    public function getErrorDescriptions()
    {
        return isset($this->errorDescriptions) ? $this->errorDescriptions : null;
    }
    /**
     * Set errorDescriptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription $errorDescriptions
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader
     */
    public function setErrorDescriptions(\ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription $errorDescriptions = null)
    {
        if (is_null($errorDescriptions) || (is_array($errorDescriptions) && empty($errorDescriptions))) {
            unset($this->errorDescriptions);
        } else {
            $this->errorDescriptions = $errorDescriptions;
        }
        return $this;
    }
    /**
     * Get notifications value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\Notification|null
     */
    public function getNotifications()
    {
        return isset($this->notifications) ? $this->notifications : null;
    }
    /**
     * Set notifications value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\Notification $notifications
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader
     */
    public function setNotifications(\ericchew87\WWEXSpeedShip2PHP\Structs\Notification $notifications = null)
    {
        if (is_null($notifications) || (is_array($notifications) && empty($notifications))) {
            unset($this->notifications);
        } else {
            $this->notifications = $notifications;
        }
        return $this;
    }
    /**
     * Get responseStatusCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseStatusCode()
    {
        return isset($this->responseStatusCode) ? $this->responseStatusCode : null;
    }
    /**
     * Set responseStatusCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseStatusCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader
     */
    public function setResponseStatusCode($responseStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($responseStatusCode) && !is_string($responseStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseStatusCode)), __LINE__);
        }
        if (is_null($responseStatusCode) || (is_array($responseStatusCode) && empty($responseStatusCode))) {
            unset($this->responseStatusCode);
        } else {
            $this->responseStatusCode = $responseStatusCode;
        }
        return $this;
    }
    /**
     * Get responseStatusDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseStatusDescription()
    {
        return isset($this->responseStatusDescription) ? $this->responseStatusDescription : null;
    }
    /**
     * Set responseStatusDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseStatusDescription
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader
     */
    public function setResponseStatusDescription($responseStatusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($responseStatusDescription) && !is_string($responseStatusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseStatusDescription)), __LINE__);
        }
        if (is_null($responseStatusDescription) || (is_array($responseStatusDescription) && empty($responseStatusDescription))) {
            unset($this->responseStatusDescription);
        } else {
            $this->responseStatusDescription = $responseStatusDescription;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader
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
