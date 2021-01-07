<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticationToken Structs
 * @subpackage Structs
 */
class AuthenticationToken extends AbstractStructBase
{
    /**
     * The loginId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $loginId;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The licenseKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $licenseKey;
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $accountNumber;
    /**
     * Constructor method for AuthenticationToken
     * @uses AuthenticationToken::setLoginId()
     * @uses AuthenticationToken::setPassword()
     * @uses AuthenticationToken::setLicenseKey()
     * @uses AuthenticationToken::setAccountNumber()
     * @param string $loginId
     * @param string $password
     * @param string $licenseKey
     * @param string $accountNumber
     */
    public function __construct($loginId = null, $password = null, $licenseKey = null, $accountNumber = null)
    {
        $this
            ->setLoginId($loginId)
            ->setPassword($password)
            ->setLicenseKey($licenseKey)
            ->setAccountNumber($accountNumber);
    }
    /**
     * Get loginId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLoginId()
    {
        return isset($this->loginId) ? $this->loginId : null;
    }
    /**
     * Set loginId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $loginId
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken
     */
    public function setLoginId($loginId = null)
    {
        // validation for constraint: string
        if (!is_null($loginId) && !is_string($loginId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loginId)), __LINE__);
        }
        if (is_null($loginId) || (is_array($loginId) && empty($loginId))) {
            unset($this->loginId);
        } else {
            $this->loginId = $loginId;
        }
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get licenseKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLicenseKey()
    {
        return isset($this->licenseKey) ? $this->licenseKey : null;
    }
    /**
     * Set licenseKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $licenseKey
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken
     */
    public function setLicenseKey($licenseKey = null)
    {
        // validation for constraint: string
        if (!is_null($licenseKey) && !is_string($licenseKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($licenseKey)), __LINE__);
        }
        if (is_null($licenseKey) || (is_array($licenseKey) && empty($licenseKey))) {
            unset($this->licenseKey);
        } else {
            $this->licenseKey = $licenseKey;
        }
        return $this;
    }
    /**
     * Get accountNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAccountNumber()
    {
        return isset($this->accountNumber) ? $this->accountNumber : null;
    }
    /**
     * Set accountNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $accountNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        if (is_null($accountNumber) || (is_array($accountNumber) && empty($accountNumber))) {
            unset($this->accountNumber);
        } else {
            $this->accountNumber = $accountNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AuthenticationToken
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
