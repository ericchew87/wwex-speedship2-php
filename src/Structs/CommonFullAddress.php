<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonFullAddress Structs
 * @subpackage Structs
 */
class CommonFullAddress extends SimpleShipmentAddress
{
    /**
     * The addressLine1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $addressLine1;
    /**
     * The addressLine2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $addressLine2;
    /**
     * The addressLine3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $addressLine3;
    /**
     * The companyOrName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $companyOrName;
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailAddress;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $phoneNumber;
    /**
     * Constructor method for CommonFullAddress
     * @uses CommonFullAddress::setAddressLine1()
     * @uses CommonFullAddress::setAddressLine2()
     * @uses CommonFullAddress::setAddressLine3()
     * @uses CommonFullAddress::setCompanyOrName()
     * @uses CommonFullAddress::setEmailAddress()
     * @uses CommonFullAddress::setPhoneNumber()
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $addressLine3
     * @param string $companyOrName
     * @param string $emailAddress
     * @param string $phoneNumber
     */
    public function __construct($addressLine1 = null, $addressLine2 = null, $addressLine3 = null, $companyOrName = null, $emailAddress = null, $phoneNumber = null)
    {
        $this
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setAddressLine3($addressLine3)
            ->setCompanyOrName($companyOrName)
            ->setEmailAddress($emailAddress)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get addressLine1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressLine1()
    {
        return isset($this->addressLine1) ? $this->addressLine1 : null;
    }
    /**
     * Set addressLine1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressLine1
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
     */
    public function setAddressLine1($addressLine1 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine1)), __LINE__);
        }
        if (is_null($addressLine1) || (is_array($addressLine1) && empty($addressLine1))) {
            unset($this->addressLine1);
        } else {
            $this->addressLine1 = $addressLine1;
        }
        return $this;
    }
    /**
     * Get addressLine2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressLine2()
    {
        return isset($this->addressLine2) ? $this->addressLine2 : null;
    }
    /**
     * Set addressLine2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressLine2
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
     */
    public function setAddressLine2($addressLine2 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine2)), __LINE__);
        }
        if (is_null($addressLine2) || (is_array($addressLine2) && empty($addressLine2))) {
            unset($this->addressLine2);
        } else {
            $this->addressLine2 = $addressLine2;
        }
        return $this;
    }
    /**
     * Get addressLine3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddressLine3()
    {
        return isset($this->addressLine3) ? $this->addressLine3 : null;
    }
    /**
     * Set addressLine3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addressLine3
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
     */
    public function setAddressLine3($addressLine3 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine3) && !is_string($addressLine3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine3)), __LINE__);
        }
        if (is_null($addressLine3) || (is_array($addressLine3) && empty($addressLine3))) {
            unset($this->addressLine3);
        } else {
            $this->addressLine3 = $addressLine3;
        }
        return $this;
    }
    /**
     * Get companyOrName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyOrName()
    {
        return isset($this->companyOrName) ? $this->companyOrName : null;
    }
    /**
     * Set companyOrName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyOrName
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
     */
    public function setCompanyOrName($companyOrName = null)
    {
        // validation for constraint: string
        if (!is_null($companyOrName) && !is_string($companyOrName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyOrName)), __LINE__);
        }
        if (is_null($companyOrName) || (is_array($companyOrName) && empty($companyOrName))) {
            unset($this->companyOrName);
        } else {
            $this->companyOrName = $companyOrName;
        }
        return $this;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
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
     * Get phoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return isset($this->phoneNumber) ? $this->phoneNumber : null;
    }
    /**
     * Set phoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->phoneNumber);
        } else {
            $this->phoneNumber = $phoneNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonFullAddress
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
