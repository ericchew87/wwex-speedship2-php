<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPickupInfo Structs
 * @subpackage Structs
 */
class ShipmentPickupInfo extends CommonFullAddress
{
    /**
     * The contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $contact;
    /**
     * The pickupByTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupByTime;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupDate;
    /**
     * The pickupFloor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupFloor;
    /**
     * The pickupLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupLocation;
    /**
     * The pickupRoom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupRoom;
    /**
     * The pickupType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $pickupType;
    /**
     * The readyTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $readyTime;
    /**
     * Constructor method for ShipmentPickupInfo
     * @uses ShipmentPickupInfo::setContact()
     * @uses ShipmentPickupInfo::setPickupByTime()
     * @uses ShipmentPickupInfo::setPickupDate()
     * @uses ShipmentPickupInfo::setPickupFloor()
     * @uses ShipmentPickupInfo::setPickupLocation()
     * @uses ShipmentPickupInfo::setPickupRoom()
     * @uses ShipmentPickupInfo::setPickupType()
     * @uses ShipmentPickupInfo::setReadyTime()
     * @param string $contact
     * @param string $pickupByTime
     * @param string $pickupDate
     * @param string $pickupFloor
     * @param string $pickupLocation
     * @param string $pickupRoom
     * @param string $pickupType
     * @param string $readyTime
     */
    public function __construct($contact = null, $pickupByTime = null, $pickupDate = null, $pickupFloor = null, $pickupLocation = null, $pickupRoom = null, $pickupType = null, $readyTime = null)
    {
        $this
            ->setContact($contact)
            ->setPickupByTime($pickupByTime)
            ->setPickupDate($pickupDate)
            ->setPickupFloor($pickupFloor)
            ->setPickupLocation($pickupLocation)
            ->setPickupRoom($pickupRoom)
            ->setPickupType($pickupType)
            ->setReadyTime($readyTime);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
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
     * Get pickupByTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupByTime()
    {
        return isset($this->pickupByTime) ? $this->pickupByTime : null;
    }
    /**
     * Set pickupByTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupByTime
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public function setPickupByTime($pickupByTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickupByTime) && !is_string($pickupByTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupByTime)), __LINE__);
        }
        if (is_null($pickupByTime) || (is_array($pickupByTime) && empty($pickupByTime))) {
            unset($this->pickupByTime);
        } else {
            $this->pickupByTime = $pickupByTime;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
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
     * Get pickupFloor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupFloor()
    {
        return isset($this->pickupFloor) ? $this->pickupFloor : null;
    }
    /**
     * Set pickupFloor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupFloor
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public function setPickupFloor($pickupFloor = null)
    {
        // validation for constraint: string
        if (!is_null($pickupFloor) && !is_string($pickupFloor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupFloor)), __LINE__);
        }
        if (is_null($pickupFloor) || (is_array($pickupFloor) && empty($pickupFloor))) {
            unset($this->pickupFloor);
        } else {
            $this->pickupFloor = $pickupFloor;
        }
        return $this;
    }
    /**
     * Get pickupLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupLocation()
    {
        return isset($this->pickupLocation) ? $this->pickupLocation : null;
    }
    /**
     * Set pickupLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupLocation
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public function setPickupLocation($pickupLocation = null)
    {
        // validation for constraint: string
        if (!is_null($pickupLocation) && !is_string($pickupLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupLocation)), __LINE__);
        }
        if (is_null($pickupLocation) || (is_array($pickupLocation) && empty($pickupLocation))) {
            unset($this->pickupLocation);
        } else {
            $this->pickupLocation = $pickupLocation;
        }
        return $this;
    }
    /**
     * Get pickupRoom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupRoom()
    {
        return isset($this->pickupRoom) ? $this->pickupRoom : null;
    }
    /**
     * Set pickupRoom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupRoom
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public function setPickupRoom($pickupRoom = null)
    {
        // validation for constraint: string
        if (!is_null($pickupRoom) && !is_string($pickupRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupRoom)), __LINE__);
        }
        if (is_null($pickupRoom) || (is_array($pickupRoom) && empty($pickupRoom))) {
            unset($this->pickupRoom);
        } else {
            $this->pickupRoom = $pickupRoom;
        }
        return $this;
    }
    /**
     * Get pickupType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupType()
    {
        return isset($this->pickupType) ? $this->pickupType : null;
    }
    /**
     * Set pickupType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupType
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public function setPickupType($pickupType = null)
    {
        // validation for constraint: string
        if (!is_null($pickupType) && !is_string($pickupType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupType)), __LINE__);
        }
        if (is_null($pickupType) || (is_array($pickupType) && empty($pickupType))) {
            unset($this->pickupType);
        } else {
            $this->pickupType = $pickupType;
        }
        return $this;
    }
    /**
     * Get readyTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReadyTime()
    {
        return isset($this->readyTime) ? $this->readyTime : null;
    }
    /**
     * Set readyTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $readyTime
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
     */
    public function setReadyTime($readyTime = null)
    {
        // validation for constraint: string
        if (!is_null($readyTime) && !is_string($readyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($readyTime)), __LINE__);
        }
        if (is_null($readyTime) || (is_array($readyTime) && empty($readyTime))) {
            unset($this->readyTime);
        } else {
            $this->readyTime = $readyTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPickupInfo
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
