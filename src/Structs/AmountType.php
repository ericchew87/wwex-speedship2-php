<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType Structs
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $currencyCode;
    /**
     * The monetaryValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $monetaryValue;
    /**
     * Constructor method for AmountType
     * @uses AmountType::setCurrencyCode()
     * @uses AmountType::setMonetaryValue()
     * @param string $currencyCode
     * @param string $monetaryValue
     */
    public function __construct($currencyCode = null, $monetaryValue = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setMonetaryValue($monetaryValue);
    }
    /**
     * Get currencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return isset($this->currencyCode) ? $this->currencyCode : null;
    }
    /**
     * Set currencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->currencyCode);
        } else {
            $this->currencyCode = $currencyCode;
        }
        return $this;
    }
    /**
     * Get monetaryValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMonetaryValue()
    {
        return isset($this->monetaryValue) ? $this->monetaryValue : null;
    }
    /**
     * Set monetaryValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $monetaryValue
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType
     */
    public function setMonetaryValue($monetaryValue = null)
    {
        // validation for constraint: string
        if (!is_null($monetaryValue) && !is_string($monetaryValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($monetaryValue)), __LINE__);
        }
        if (is_null($monetaryValue) || (is_array($monetaryValue) && empty($monetaryValue))) {
            unset($this->monetaryValue);
        } else {
            $this->monetaryValue = $monetaryValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AmountType
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
