<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentPackageDescription Structs
 * @subpackage Structs
 */
class ShipmentPackageDescription extends AbstractStructBase
{
    /**
     * The DNCVIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DNCVIndicator;
    /**
     * The descriptionOfGoods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $descriptionOfGoods;
    /**
     * Constructor method for ShipmentPackageDescription
     * @uses ShipmentPackageDescription::setDNCVIndicator()
     * @uses ShipmentPackageDescription::setDescriptionOfGoods()
     * @param string $dNCVIndicator
     * @param string $descriptionOfGoods
     */
    public function __construct($dNCVIndicator = null, $descriptionOfGoods = null)
    {
        $this
            ->setDNCVIndicator($dNCVIndicator)
            ->setDescriptionOfGoods($descriptionOfGoods);
    }
    /**
     * Get DNCVIndicator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDNCVIndicator()
    {
        return isset($this->DNCVIndicator) ? $this->DNCVIndicator : null;
    }
    /**
     * Set DNCVIndicator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dNCVIndicator
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescription
     */
    public function setDNCVIndicator($dNCVIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($dNCVIndicator) && !is_string($dNCVIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dNCVIndicator)), __LINE__);
        }
        if (is_null($dNCVIndicator) || (is_array($dNCVIndicator) && empty($dNCVIndicator))) {
            unset($this->DNCVIndicator);
        } else {
            $this->DNCVIndicator = $dNCVIndicator;
        }
        return $this;
    }
    /**
     * Get descriptionOfGoods value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescriptionOfGoods()
    {
        return isset($this->descriptionOfGoods) ? $this->descriptionOfGoods : null;
    }
    /**
     * Set descriptionOfGoods value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descriptionOfGoods
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescription
     */
    public function setDescriptionOfGoods($descriptionOfGoods = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionOfGoods) && !is_string($descriptionOfGoods)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionOfGoods)), __LINE__);
        }
        if (is_null($descriptionOfGoods) || (is_array($descriptionOfGoods) && empty($descriptionOfGoods))) {
            unset($this->descriptionOfGoods);
        } else {
            $this->descriptionOfGoods = $descriptionOfGoods;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackageDescription
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
