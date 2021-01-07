<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeItems Structs
 * @subpackage Structs
 */
class FeeItems extends AbstractStructBase
{
    /**
     * The feeItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem[]
     */
    public $feeItem;
    /**
     * Constructor method for FeeItems
     * @uses FeeItems::setFeeItem()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem[] $feeItem
     */
    public function __construct(array $feeItem = array())
    {
        $this
            ->setFeeItem($feeItem);
    }
    /**
     * Get feeItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem[]|null
     */
    public function getFeeItem()
    {
        return isset($this->feeItem) ? $this->feeItem : null;
    }
    /**
     * Set feeItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem[] $feeItem
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems
     */
    public function setFeeItem(array $feeItem = array())
    {
        foreach ($feeItem as $feeItemsFeeItemItem) {
            // validation for constraint: itemType
            if (!$feeItemsFeeItemItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem) {
                throw new \InvalidArgumentException(sprintf('The feeItem property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem, "%s" given', is_object($feeItemsFeeItemItem) ? get_class($feeItemsFeeItemItem) : gettype($feeItemsFeeItemItem)), __LINE__);
            }
        }
        if (is_null($feeItem) || (is_array($feeItem) && empty($feeItem))) {
            unset($this->feeItem);
        } else {
            $this->feeItem = $feeItem;
        }
        return $this;
    }
    /**
     * Add item to feeItem value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems
     */
    public function addToFeeItem(\ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem) {
            throw new \InvalidArgumentException(sprintf('The feeItem property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->feeItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\FeeItems
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
