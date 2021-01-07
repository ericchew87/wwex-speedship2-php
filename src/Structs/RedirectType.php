<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RedirectType Structs
 * @subpackage Structs
 */
class RedirectType extends AbstractStructBase
{
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $companyName;
    /**
     * The locationID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $locationID;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupDate;
    /**
     * Constructor method for RedirectType
     * @uses RedirectType::setCompanyName()
     * @uses RedirectType::setLocationID()
     * @uses RedirectType::setPickupDate()
     * @param string $companyName
     * @param string $locationID
     * @param string $pickupDate
     */
    public function __construct($companyName = null, $locationID = null, $pickupDate = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setLocationID($locationID)
            ->setPickupDate($pickupDate);
    }
    /**
     * Get companyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyName()
    {
        return isset($this->companyName) ? $this->companyName : null;
    }
    /**
     * Set companyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        if (is_null($companyName) || (is_array($companyName) && empty($companyName))) {
            unset($this->companyName);
        } else {
            $this->companyName = $companyName;
        }
        return $this;
    }
    /**
     * Get locationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationID()
    {
        return isset($this->locationID) ? $this->locationID : null;
    }
    /**
     * Set locationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationID
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType
     */
    public function setLocationID($locationID = null)
    {
        // validation for constraint: string
        if (!is_null($locationID) && !is_string($locationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationID)), __LINE__);
        }
        if (is_null($locationID) || (is_array($locationID) && empty($locationID))) {
            unset($this->locationID);
        } else {
            $this->locationID = $locationID;
        }
        return $this;
    }
    /**
     * Get pickupDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupDate()
    {
        return isset($this->pickupDate) ? $this->pickupDate : null;
    }
    /**
     * Set pickupDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupDate
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        if (is_null($pickupDate) || (is_array($pickupDate) && empty($pickupDate))) {
            unset($this->pickupDate);
        } else {
            $this->pickupDate = $pickupDate;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RedirectType
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
