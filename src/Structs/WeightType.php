<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeightType Structs
 * @subpackage Structs
 */
class WeightType extends AbstractStructBase
{
    /**
     * The unitOfMeasurement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UnitOfMeasurementType
     */
    public $unitOfMeasurement;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $weight;
    /**
     * Constructor method for WeightType
     * @uses WeightType::setUnitOfMeasurement()
     * @uses WeightType::setWeight()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UnitOfMeasurementType $unitOfMeasurement
     * @param string $weight
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\UnitOfMeasurementType $unitOfMeasurement = null, $weight = null)
    {
        $this
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setWeight($weight);
    }
    /**
     * Get unitOfMeasurement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UnitOfMeasurementType|null
     */
    public function getUnitOfMeasurement()
    {
        return isset($this->unitOfMeasurement) ? $this->unitOfMeasurement : null;
    }
    /**
     * Set unitOfMeasurement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UnitOfMeasurementType $unitOfMeasurement
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType
     */
    public function setUnitOfMeasurement(\ericchew87\WWEXSpeedShip2PHP\Structs\UnitOfMeasurementType $unitOfMeasurement = null)
    {
        if (is_null($unitOfMeasurement) || (is_array($unitOfMeasurement) && empty($unitOfMeasurement))) {
            unset($this->unitOfMeasurement);
        } else {
            $this->unitOfMeasurement = $unitOfMeasurement;
        }
        return $this;
    }
    /**
     * Get weight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWeight()
    {
        return isset($this->weight) ? $this->weight : null;
    }
    /**
     * Set weight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $weight
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weight)), __LINE__);
        }
        if (is_null($weight) || (is_array($weight) && empty($weight))) {
            unset($this->weight);
        } else {
            $this->weight = $weight;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\WeightType
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
