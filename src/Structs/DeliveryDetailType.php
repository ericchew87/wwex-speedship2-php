<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDetailType Structs
 * @subpackage Structs
 */
class DeliveryDetailType extends AbstractStructBase
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The time
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $time;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType
     */
    public $type;
    /**
     * Constructor method for DeliveryDetailType
     * @uses DeliveryDetailType::setDate()
     * @uses DeliveryDetailType::setTime()
     * @uses DeliveryDetailType::setType()
     * @param string $date
     * @param string $time
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type
     */
    public function __construct($date = null, $time = null, \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type = null)
    {
        $this
            ->setDate($date)
            ->setTime($time)
            ->setType($type);
    }
    /**
     * Get date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }
    /**
     * Set date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->date);
        } else {
            $this->date = $date;
        }
        return $this;
    }
    /**
     * Get time value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTime()
    {
        return isset($this->time) ? $this->time : null;
    }
    /**
     * Set time value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $time
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        if (is_null($time) || (is_array($time) && empty($time))) {
            unset($this->time);
        } else {
            $this->time = $time;
        }
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType
     */
    public function setType(\ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\DeliveryDetailType
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
