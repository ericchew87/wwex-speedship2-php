<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiverFullAddress Structs
 * @subpackage Structs
 */
class ReceiverFullAddress extends CommonFullAddress
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
     * The contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $contact;
    /**
     * Constructor method for ReceiverFullAddress
     * @uses ReceiverFullAddress::setAdditionalParameters()
     * @uses ReceiverFullAddress::setContact()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @param string $contact
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null, $contact = null)
    {
        $this
            ->setAdditionalParameters($additionalParameters)
            ->setContact($contact);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress
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
     * Get contact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContact()
    {
        return isset($this->contact) ? $this->contact : null;
    }
    /**
     * Set contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contact
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress
     */
    public function setContact($contact = null)
    {
        // validation for constraint: string
        if (!is_null($contact) && !is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contact)), __LINE__);
        }
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->contact);
        } else {
            $this->contact = $contact;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ReceiverFullAddress
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
