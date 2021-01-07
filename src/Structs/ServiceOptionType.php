<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceOptionType Structs
 * @subpackage Structs
 */
class ServiceOptionType extends AbstractStructBase
{
    /**
     * The additionalAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[]
     */
    public $additionalAttribute;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType
     */
    public $type;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ServiceOptionType
     * @uses ServiceOptionType::setAdditionalAttribute()
     * @uses ServiceOptionType::setType()
     * @uses ServiceOptionType::setValue()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[] $additionalAttribute
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type
     * @param string $value
     */
    public function __construct(array $additionalAttribute = array(), \ericchew87\WWEXSpeedShip2PHP\Structs\CommonCodeDescriptionType $type = null, $value = null)
    {
        $this
            ->setAdditionalAttribute($additionalAttribute)
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get additionalAttribute value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[]|null
     */
    public function getAdditionalAttribute()
    {
        return isset($this->additionalAttribute) ? $this->additionalAttribute : null;
    }
    /**
     * Set additionalAttribute value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType[] $additionalAttribute
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType
     */
    public function setAdditionalAttribute(array $additionalAttribute = array())
    {
        foreach ($additionalAttribute as $serviceOptionTypeAdditionalAttributeItem) {
            // validation for constraint: itemType
            if (!$serviceOptionTypeAdditionalAttributeItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType) {
                throw new \InvalidArgumentException(sprintf('The additionalAttribute property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType, "%s" given', is_object($serviceOptionTypeAdditionalAttributeItem) ? get_class($serviceOptionTypeAdditionalAttributeItem) : gettype($serviceOptionTypeAdditionalAttributeItem)), __LINE__);
            }
        }
        if (is_null($additionalAttribute) || (is_array($additionalAttribute) && empty($additionalAttribute))) {
            unset($this->additionalAttribute);
        } else {
            $this->additionalAttribute = $additionalAttribute;
        }
        return $this;
    }
    /**
     * Add item to additionalAttribute value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType
     */
    public function addToAdditionalAttribute(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType) {
            throw new \InvalidArgumentException(sprintf('The additionalAttribute property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalCodeDescriptionValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->additionalAttribute[] = $item;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType
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
     * Get value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : null;
    }
    /**
     * Set value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->value);
        } else {
            $this->value = $value;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ServiceOptionType
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
