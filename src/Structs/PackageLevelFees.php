<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageLevelFees Structs
 * @subpackage Structs
 */
class PackageLevelFees extends AbstractStructBase
{
    /**
     * The packageLevelFee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee[]
     */
    public $packageLevelFee;
    /**
     * The packageLevelFeesSubTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $packageLevelFeesSubTotal;
    /**
     * Constructor method for PackageLevelFees
     * @uses PackageLevelFees::setPackageLevelFee()
     * @uses PackageLevelFees::setPackageLevelFeesSubTotal()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee[] $packageLevelFee
     * @param string $packageLevelFeesSubTotal
     */
    public function __construct(array $packageLevelFee = array(), $packageLevelFeesSubTotal = null)
    {
        $this
            ->setPackageLevelFee($packageLevelFee)
            ->setPackageLevelFeesSubTotal($packageLevelFeesSubTotal);
    }
    /**
     * Get packageLevelFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee[]|null
     */
    public function getPackageLevelFee()
    {
        return isset($this->packageLevelFee) ? $this->packageLevelFee : null;
    }
    /**
     * Set packageLevelFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee[] $packageLevelFee
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees
     */
    public function setPackageLevelFee(array $packageLevelFee = array())
    {
        foreach ($packageLevelFee as $packageLevelFeesPackageLevelFeeItem) {
            // validation for constraint: itemType
            if (!$packageLevelFeesPackageLevelFeeItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee) {
                throw new \InvalidArgumentException(sprintf('The packageLevelFee property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee, "%s" given', is_object($packageLevelFeesPackageLevelFeeItem) ? get_class($packageLevelFeesPackageLevelFeeItem) : gettype($packageLevelFeesPackageLevelFeeItem)), __LINE__);
            }
        }
        if (is_null($packageLevelFee) || (is_array($packageLevelFee) && empty($packageLevelFee))) {
            unset($this->packageLevelFee);
        } else {
            $this->packageLevelFee = $packageLevelFee;
        }
        return $this;
    }
    /**
     * Add item to packageLevelFee value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees
     */
    public function addToPackageLevelFee(\ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee) {
            throw new \InvalidArgumentException(sprintf('The packageLevelFee property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packageLevelFee[] = $item;
        return $this;
    }
    /**
     * Get packageLevelFeesSubTotal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageLevelFeesSubTotal()
    {
        return isset($this->packageLevelFeesSubTotal) ? $this->packageLevelFeesSubTotal : null;
    }
    /**
     * Set packageLevelFeesSubTotal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageLevelFeesSubTotal
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees
     */
    public function setPackageLevelFeesSubTotal($packageLevelFeesSubTotal = null)
    {
        // validation for constraint: string
        if (!is_null($packageLevelFeesSubTotal) && !is_string($packageLevelFeesSubTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageLevelFeesSubTotal)), __LINE__);
        }
        if (is_null($packageLevelFeesSubTotal) || (is_array($packageLevelFeesSubTotal) && empty($packageLevelFeesSubTotal))) {
            unset($this->packageLevelFeesSubTotal);
        } else {
            $this->packageLevelFeesSubTotal = $packageLevelFeesSubTotal;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\PackageLevelFees
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
