<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillDutiesAndTaxesToDetail Structs
 * @subpackage Structs
 */
class BillDutiesAndTaxesToDetail extends AbstractStructBase
{
    /**
     * The billDutiesAndTaxesToInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo
     */
    public $billDutiesAndTaxesToInfo;
    /**
     * The billDutiesAndTaxesToOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $billDutiesAndTaxesToOption;
    /**
     * Constructor method for BillDutiesAndTaxesToDetail
     * @uses BillDutiesAndTaxesToDetail::setBillDutiesAndTaxesToInfo()
     * @uses BillDutiesAndTaxesToDetail::setBillDutiesAndTaxesToOption()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo $billDutiesAndTaxesToInfo
     * @param string $billDutiesAndTaxesToOption
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo $billDutiesAndTaxesToInfo = null, $billDutiesAndTaxesToOption = null)
    {
        $this
            ->setBillDutiesAndTaxesToInfo($billDutiesAndTaxesToInfo)
            ->setBillDutiesAndTaxesToOption($billDutiesAndTaxesToOption);
    }
    /**
     * Get billDutiesAndTaxesToInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo|null
     */
    public function getBillDutiesAndTaxesToInfo()
    {
        return isset($this->billDutiesAndTaxesToInfo) ? $this->billDutiesAndTaxesToInfo : null;
    }
    /**
     * Set billDutiesAndTaxesToInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo $billDutiesAndTaxesToInfo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail
     */
    public function setBillDutiesAndTaxesToInfo(\ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToInfo $billDutiesAndTaxesToInfo = null)
    {
        if (is_null($billDutiesAndTaxesToInfo) || (is_array($billDutiesAndTaxesToInfo) && empty($billDutiesAndTaxesToInfo))) {
            unset($this->billDutiesAndTaxesToInfo);
        } else {
            $this->billDutiesAndTaxesToInfo = $billDutiesAndTaxesToInfo;
        }
        return $this;
    }
    /**
     * Get billDutiesAndTaxesToOption value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBillDutiesAndTaxesToOption()
    {
        return isset($this->billDutiesAndTaxesToOption) ? $this->billDutiesAndTaxesToOption : null;
    }
    /**
     * Set billDutiesAndTaxesToOption value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $billDutiesAndTaxesToOption
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail
     */
    public function setBillDutiesAndTaxesToOption($billDutiesAndTaxesToOption = null)
    {
        // validation for constraint: string
        if (!is_null($billDutiesAndTaxesToOption) && !is_string($billDutiesAndTaxesToOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billDutiesAndTaxesToOption)), __LINE__);
        }
        if (is_null($billDutiesAndTaxesToOption) || (is_array($billDutiesAndTaxesToOption) && empty($billDutiesAndTaxesToOption))) {
            unset($this->billDutiesAndTaxesToOption);
        } else {
            $this->billDutiesAndTaxesToOption = $billDutiesAndTaxesToOption;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail
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
