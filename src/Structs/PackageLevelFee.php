<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageLevelFee Structs
 * @subpackage Structs
 */
class PackageLevelFee extends AbstractStructBase
{
    /**
     * The feeItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems
     */
    public $feeItems;
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $packageNumber;
    /**
     * The totalFeePerPackageLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $totalFeePerPackageLevel;
    /**
     * Constructor method for PackageLevelFee
     * @uses PackageLevelFee::setFeeItems()
     * @uses PackageLevelFee::setPackageNumber()
     * @uses PackageLevelFee::setTotalFeePerPackageLevel()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems
     * @param string $packageNumber
     * @param string $totalFeePerPackageLevel
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems = null, $packageNumber = null, $totalFeePerPackageLevel = null)
    {
        $this
            ->setFeeItems($feeItems)
            ->setPackageNumber($packageNumber)
            ->setTotalFeePerPackageLevel($totalFeePerPackageLevel);
    }
    /**
     * Get feeItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems|null
     */
    public function getFeeItems()
    {
        return isset($this->feeItems) ? $this->feeItems : null;
    }
    /**
     * Set feeItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee
     */
    public function setFeeItems(\ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems $feeItems = null)
    {
        if (is_null($feeItems) || (is_array($feeItems) && empty($feeItems))) {
            unset($this->feeItems);
        } else {
            $this->feeItems = $feeItems;
        }
        return $this;
    }
    /**
     * Get packageNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageNumber()
    {
        return isset($this->packageNumber) ? $this->packageNumber : null;
    }
    /**
     * Set packageNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee
     */
    public function setPackageNumber($packageNumber = null)
    {
        // validation for constraint: string
        if (!is_null($packageNumber) && !is_string($packageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageNumber)), __LINE__);
        }
        if (is_null($packageNumber) || (is_array($packageNumber) && empty($packageNumber))) {
            unset($this->packageNumber);
        } else {
            $this->packageNumber = $packageNumber;
        }
        return $this;
    }
    /**
     * Get totalFeePerPackageLevel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTotalFeePerPackageLevel()
    {
        return isset($this->totalFeePerPackageLevel) ? $this->totalFeePerPackageLevel : null;
    }
    /**
     * Set totalFeePerPackageLevel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $totalFeePerPackageLevel
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee
     */
    public function setTotalFeePerPackageLevel($totalFeePerPackageLevel = null)
    {
        // validation for constraint: string
        if (!is_null($totalFeePerPackageLevel) && !is_string($totalFeePerPackageLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalFeePerPackageLevel)), __LINE__);
        }
        if (is_null($totalFeePerPackageLevel) || (is_array($totalFeePerPackageLevel) && empty($totalFeePerPackageLevel))) {
            unset($this->totalFeePerPackageLevel);
        } else {
            $this->totalFeePerPackageLevel = $totalFeePerPackageLevel;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee
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
