<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillShippingChargeToDetail Structs
 * @subpackage Structs
 */
class BillShippingChargeToDetail extends AbstractStructBase
{
    /**
     * The billShippingChargeToInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo
     */
    public $billShippingChargeToInfo;
    /**
     * The billShippingChargeToOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billShippingChargeToOption;
    /**
     * Constructor method for BillShippingChargeToDetail
     * @uses BillShippingChargeToDetail::setBillShippingChargeToInfo()
     * @uses BillShippingChargeToDetail::setBillShippingChargeToOption()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo $billShippingChargeToInfo
     * @param string $billShippingChargeToOption
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo $billShippingChargeToInfo = null, $billShippingChargeToOption = null)
    {
        $this
            ->setBillShippingChargeToInfo($billShippingChargeToInfo)
            ->setBillShippingChargeToOption($billShippingChargeToOption);
    }
    /**
     * Get billShippingChargeToInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo|null
     */
    public function getBillShippingChargeToInfo()
    {
        return isset($this->billShippingChargeToInfo) ? $this->billShippingChargeToInfo : null;
    }
    /**
     * Set billShippingChargeToInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo $billShippingChargeToInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail
     */
    public function setBillShippingChargeToInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToInfo $billShippingChargeToInfo = null)
    {
        if (is_null($billShippingChargeToInfo) || (is_array($billShippingChargeToInfo) && empty($billShippingChargeToInfo))) {
            unset($this->billShippingChargeToInfo);
        } else {
            $this->billShippingChargeToInfo = $billShippingChargeToInfo;
        }
        return $this;
    }
    /**
     * Get billShippingChargeToOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillShippingChargeToOption()
    {
        return isset($this->billShippingChargeToOption) ? $this->billShippingChargeToOption : null;
    }
    /**
     * Set billShippingChargeToOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billShippingChargeToOption
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail
     */
    public function setBillShippingChargeToOption($billShippingChargeToOption = null)
    {
        // validation for constraint: string
        if (!is_null($billShippingChargeToOption) && !is_string($billShippingChargeToOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billShippingChargeToOption)), __LINE__);
        }
        if (is_null($billShippingChargeToOption) || (is_array($billShippingChargeToOption) && empty($billShippingChargeToOption))) {
            unset($this->billShippingChargeToOption);
        } else {
            $this->billShippingChargeToOption = $billShippingChargeToOption;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail
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
