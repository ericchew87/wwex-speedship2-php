<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillShippingChargeToInfo Structs
 * @subpackage Structs
 */
class BillShippingChargeToInfo extends AbstractStructBase
{
    /**
     * The associatedShipperUPSAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $associatedShipperUPSAccount;
    /**
     * The billDeclaredValueChargesToShipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billDeclaredValueChargesToShipper;
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
     * Constructor method for BillShippingChargeToInfo
     * @uses BillShippingChargeToInfo::setAssociatedShipperUPSAccount()
     * @uses BillShippingChargeToInfo::setBillDeclaredValueChargesToShipper()
     * @uses BillShippingChargeToInfo::setBillToCountryCode()
     * @uses BillShippingChargeToInfo::setBillToPostalCode()
     * @uses BillShippingChargeToInfo::setBillToUPSAccountNumber()
     * @param string $associatedShipperUPSAccount
     * @param string $billDeclaredValueChargesToShipper
     * @param string $billToCountryCode
     * @param string $billToPostalCode
     * @param string $billToUPSAccountNumber
     */
    public function __construct($associatedShipperUPSAccount = null, $billDeclaredValueChargesToShipper = null, $billToCountryCode = null, $billToPostalCode = null, $billToUPSAccountNumber = null)
    {
        $this
            ->setAssociatedShipperUPSAccount($associatedShipperUPSAccount)
            ->setBillDeclaredValueChargesToShipper($billDeclaredValueChargesToShipper)
            ->setBillToCountryCode($billToCountryCode)
            ->setBillToPostalCode($billToPostalCode)
            ->setBillToUPSAccountNumber($billToUPSAccountNumber);
    }
    /**
     * Get associatedShipperUPSAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssociatedShipperUPSAccount()
    {
        return isset($this->associatedShipperUPSAccount) ? $this->associatedShipperUPSAccount : null;
    }
    /**
     * Set associatedShipperUPSAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $associatedShipperUPSAccount
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
     */
    public function setAssociatedShipperUPSAccount($associatedShipperUPSAccount = null)
    {
        // validation for constraint: string
        if (!is_null($associatedShipperUPSAccount) && !is_string($associatedShipperUPSAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($associatedShipperUPSAccount)), __LINE__);
        }
        if (is_null($associatedShipperUPSAccount) || (is_array($associatedShipperUPSAccount) && empty($associatedShipperUPSAccount))) {
            unset($this->associatedShipperUPSAccount);
        } else {
            $this->associatedShipperUPSAccount = $associatedShipperUPSAccount;
        }
        return $this;
    }
    /**
     * Get billDeclaredValueChargesToShipper value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillDeclaredValueChargesToShipper()
    {
        return isset($this->billDeclaredValueChargesToShipper) ? $this->billDeclaredValueChargesToShipper : null;
    }
    /**
     * Set billDeclaredValueChargesToShipper value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billDeclaredValueChargesToShipper
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
     */
    public function setBillDeclaredValueChargesToShipper($billDeclaredValueChargesToShipper = null)
    {
        // validation for constraint: string
        if (!is_null($billDeclaredValueChargesToShipper) && !is_string($billDeclaredValueChargesToShipper)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billDeclaredValueChargesToShipper)), __LINE__);
        }
        if (is_null($billDeclaredValueChargesToShipper) || (is_array($billDeclaredValueChargesToShipper) && empty($billDeclaredValueChargesToShipper))) {
            unset($this->billDeclaredValueChargesToShipper);
        } else {
            $this->billDeclaredValueChargesToShipper = $billDeclaredValueChargesToShipper;
        }
        return $this;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
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
