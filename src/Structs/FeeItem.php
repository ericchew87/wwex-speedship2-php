<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeItem Structs
 * @subpackage Structs
 */
class FeeItem extends AbstractStructBase
{
    /**
     * The feeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $feeAmount;
    /**
     * The feeDesc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $feeDesc;
    /**
     * Constructor method for FeeItem
     * @uses FeeItem::setFeeAmount()
     * @uses FeeItem::setFeeDesc()
     * @param string $feeAmount
     * @param string $feeDesc
     */
    public function __construct($feeAmount = null, $feeDesc = null)
    {
        $this
            ->setFeeAmount($feeAmount)
            ->setFeeDesc($feeDesc);
    }
    /**
     * Get feeAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFeeAmount()
    {
        return isset($this->feeAmount) ? $this->feeAmount : null;
    }
    /**
     * Set feeAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $feeAmount
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem
     */
    public function setFeeAmount($feeAmount = null)
    {
        // validation for constraint: string
        if (!is_null($feeAmount) && !is_string($feeAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeAmount)), __LINE__);
        }
        if (is_null($feeAmount) || (is_array($feeAmount) && empty($feeAmount))) {
            unset($this->feeAmount);
        } else {
            $this->feeAmount = $feeAmount;
        }
        return $this;
    }
    /**
     * Get feeDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFeeDesc()
    {
        return isset($this->feeDesc) ? $this->feeDesc : null;
    }
    /**
     * Set feeDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $feeDesc
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem
     */
    public function setFeeDesc($feeDesc = null)
    {
        // validation for constraint: string
        if (!is_null($feeDesc) && !is_string($feeDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeDesc)), __LINE__);
        }
        if (is_null($feeDesc) || (is_array($feeDesc) && empty($feeDesc))) {
            unset($this->feeDesc);
        } else {
            $this->feeDesc = $feeDesc;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem
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
