<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SenderFullAddress Structs
 * @subpackage Structs
 */
class SenderFullAddress extends CommonFullAddress
{
    /**
     * The additionalParameters
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters
     */
    public $additionalParameters;
    /**
     * The sentBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sentBy;
    /**
     * Constructor method for SenderFullAddress
     * @uses SenderFullAddress::setAdditionalParameters()
     * @uses SenderFullAddress::setSentBy()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @param string $sentBy
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null, $sentBy = null)
    {
        $this
            ->setAdditionalParameters($additionalParameters)
            ->setSentBy($sentBy);
    }
    /**
     * Get additionalParameters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters|null
     */
    public function getAdditionalParameters()
    {
        return isset($this->additionalParameters) ? $this->additionalParameters : null;
    }
    /**
     * Set additionalParameters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress
     */
    public function setAdditionalParameters(\ericchew87\WWEXSpeedShip2PHP\Structs\AdditionalParameters $additionalParameters = null)
    {
        if (is_null($additionalParameters) || (is_array($additionalParameters) && empty($additionalParameters))) {
            unset($this->additionalParameters);
        } else {
            $this->additionalParameters = $additionalParameters;
        }
        return $this;
    }
    /**
     * Get sentBy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSentBy()
    {
        return isset($this->sentBy) ? $this->sentBy : null;
    }
    /**
     * Set sentBy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sentBy
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress
     */
    public function setSentBy($sentBy = null)
    {
        // validation for constraint: string
        if (!is_null($sentBy) && !is_string($sentBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sentBy)), __LINE__);
        }
        if (is_null($sentBy) || (is_array($sentBy) && empty($sentBy))) {
            unset($this->sentBy);
        } else {
            $this->sentBy = $sentBy;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SenderFullAddress
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
