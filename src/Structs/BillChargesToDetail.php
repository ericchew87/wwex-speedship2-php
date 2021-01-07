<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillChargesToDetail Structs
 * @subpackage Structs
 */
class BillChargesToDetail extends AbstractStructBase
{
    /**
     * The billDutiesAndTaxesToDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail
     */
    public $billDutiesAndTaxesToDetail;
    /**
     * The billShippingChargeToDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail
     */
    public $billShippingChargeToDetail;
    /**
     * Constructor method for BillChargesToDetail
     * @uses BillChargesToDetail::setBillDutiesAndTaxesToDetail()
     * @uses BillChargesToDetail::setBillShippingChargeToDetail()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail $billDutiesAndTaxesToDetail
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail $billShippingChargeToDetail
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail $billDutiesAndTaxesToDetail = null, \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail $billShippingChargeToDetail = null)
    {
        $this
            ->setBillDutiesAndTaxesToDetail($billDutiesAndTaxesToDetail)
            ->setBillShippingChargeToDetail($billShippingChargeToDetail);
    }
    /**
     * Get billDutiesAndTaxesToDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail|null
     */
    public function getBillDutiesAndTaxesToDetail()
    {
        return isset($this->billDutiesAndTaxesToDetail) ? $this->billDutiesAndTaxesToDetail : null;
    }
    /**
     * Set billDutiesAndTaxesToDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail $billDutiesAndTaxesToDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail
     */
    public function setBillDutiesAndTaxesToDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\BillDutiesAndTaxesToDetail $billDutiesAndTaxesToDetail = null)
    {
        if (is_null($billDutiesAndTaxesToDetail) || (is_array($billDutiesAndTaxesToDetail) && empty($billDutiesAndTaxesToDetail))) {
            unset($this->billDutiesAndTaxesToDetail);
        } else {
            $this->billDutiesAndTaxesToDetail = $billDutiesAndTaxesToDetail;
        }
        return $this;
    }
    /**
     * Get billShippingChargeToDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail|null
     */
    public function getBillShippingChargeToDetail()
    {
        return isset($this->billShippingChargeToDetail) ? $this->billShippingChargeToDetail : null;
    }
    /**
     * Set billShippingChargeToDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail $billShippingChargeToDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail
     */
    public function setBillShippingChargeToDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\BillShippingChargeToDetail $billShippingChargeToDetail = null)
    {
        if (is_null($billShippingChargeToDetail) || (is_array($billShippingChargeToDetail) && empty($billShippingChargeToDetail))) {
            unset($this->billShippingChargeToDetail);
        } else {
            $this->billShippingChargeToDetail = $billShippingChargeToDetail;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\BillChargesToDetail
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
