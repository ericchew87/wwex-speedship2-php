<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorDescription Structs
 * @subpackage Structs
 */
class ErrorDescription extends AbstractStructBase
{
    /**
     * The errorDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $errorDescription;
    /**
     * Constructor method for ErrorDescription
     * @uses ErrorDescription::setErrorDescription()
     * @param string[] $errorDescription
     */
    public function __construct(array $errorDescription = array())
    {
        $this
            ->setErrorDescription($errorDescription);
    }
    /**
     * Get errorDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getErrorDescription()
    {
        return isset($this->errorDescription) ? $this->errorDescription : null;
    }
    /**
     * Set errorDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $errorDescription
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription
     */
    public function setErrorDescription(array $errorDescription = array())
    {
        foreach ($errorDescription as $errorDescriptionErrorDescriptionItem) {
            // validation for constraint: itemType
            if (!is_string($errorDescriptionErrorDescriptionItem)) {
                throw new \InvalidArgumentException(sprintf('The errorDescription property can only contain items of string, "%s" given', is_object($errorDescriptionErrorDescriptionItem) ? get_class($errorDescriptionErrorDescriptionItem) : gettype($errorDescriptionErrorDescriptionItem)), __LINE__);
            }
        }
        if (is_null($errorDescription) || (is_array($errorDescription) && empty($errorDescription))) {
            unset($this->errorDescription);
        } else {
            $this->errorDescription = $errorDescription;
        }
        return $this;
    }
    /**
     * Add item to errorDescription value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription
     */
    public function addToErrorDescription($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The errorDescription property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->errorDescription[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ErrorDescription
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
