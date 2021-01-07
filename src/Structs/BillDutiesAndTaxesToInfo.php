<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillDutiesAndTaxesToInfo Structs
 * @subpackage Structs
 */
class BillDutiesAndTaxesToInfo extends AbstractStructBase
{
    /**
     * The billToCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billToCountryCode;
    /**
     * The billToPostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billToPostalCode;
    /**
     * The billToUPSAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billToUPSAccountNumber;
    /**
     * Constructor method for BillDutiesAndTaxesToInfo
     * @uses BillDutiesAndTaxesToInfo::setBillToCountryCode()
     * @uses BillDutiesAndTaxesToInfo::setBillToPostalCode()
     * @uses BillDutiesAndTaxesToInfo::setBillToUPSAccountNumber()
     * @param string $billToCountryCode
     * @param string $billToPostalCode
     * @param string $billToUPSAccountNumber
     */
    public function __construct($billToCountryCode = null, $billToPostalCode = null, $billToUPSAccountNumber = null)
    {
        $this
            ->setBillToCountryCode($billToCountryCode)
            ->setBillToPostalCode($billToPostalCode)
            ->setBillToUPSAccountNumber($billToUPSAccountNumber);
    }
    /**
     * Get billToCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillToCountryCode()
    {
        return isset($this->billToCountryCode) ? $this->billToCountryCode : null;
    }
    /**
     * Set billToCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billToCountryCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo
     */
    public function setBillToCountryCode($billToCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($billToCountryCode) && !is_string($billToCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billToCountryCode)), __LINE__);
        }
        if (is_null($billToCountryCode) || (is_array($billToCountryCode) && empty($billToCountryCode))) {
            unset($this->billToCountryCode);
        } else {
            $this->billToCountryCode = $billToCountryCode;
        }
        return $this;
    }
    /**
     * Get billToPostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillToPostalCode()
    {
        return isset($this->billToPostalCode) ? $this->billToPostalCode : null;
    }
    /**
     * Set billToPostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billToPostalCode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo
     */
    public function setBillToPostalCode($billToPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($billToPostalCode) && !is_string($billToPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billToPostalCode)), __LINE__);
        }
        if (is_null($billToPostalCode) || (is_array($billToPostalCode) && empty($billToPostalCode))) {
            unset($this->billToPostalCode);
        } else {
            $this->billToPostalCode = $billToPostalCode;
        }
        return $this;
    }
    /**
     * Get billToUPSAccountNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillToUPSAccountNumber()
    {
        return isset($this->billToUPSAccountNumber) ? $this->billToUPSAccountNumber : null;
    }
    /**
     * Set billToUPSAccountNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billToUPSAccountNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo
     */
    public function setBillToUPSAccountNumber($billToUPSAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billToUPSAccountNumber) && !is_string($billToUPSAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billToUPSAccountNumber)), __LINE__);
        }
        if (is_null($billToUPSAccountNumber) || (is_array($billToUPSAccountNumber) && empty($billToUPSAccountNumber))) {
            unset($this->billToUPSAccountNumber);
        } else {
            $this->billToUPSAccountNumber = $billToUPSAccountNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo
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
