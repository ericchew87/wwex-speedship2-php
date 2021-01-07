<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentAddressType Structs
 * @subpackage Structs
 */
class ShipmentAddressType extends AbstractStructBase
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType
     */
    public $address;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType
     */
    public $type;
    /**
     * Constructor method for ShipmentAddressType
     * @uses ShipmentAddressType::setAddress()
     * @uses ShipmentAddressType::setType()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address = null, \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type = null)
    {
        $this
            ->setAddress($address)
            ->setType($type);
    }
    /**
     * Get address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType
     */
    public function setAddress(\ericchew87\WWEXSpeedShip2PHP\Structs\AddressType $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentAddressType
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
