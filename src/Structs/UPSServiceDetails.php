<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UPSServiceDetails Structs
 * @subpackage Structs
 */
class UPSServiceDetails extends AbstractStructBase
{
    /**
     * The upsServiceDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail[]
     */
    public $upsServiceDetail;
    /**
     * Constructor method for UPSServiceDetails
     * @uses UPSServiceDetails::setUpsServiceDetail()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail[] $upsServiceDetail
     */
    public function __construct(array $upsServiceDetail = array())
    {
        $this
            ->setUpsServiceDetail($upsServiceDetail);
    }
    /**
     * Get upsServiceDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail[]|null
     */
    public function getUpsServiceDetail()
    {
        return isset($this->upsServiceDetail) ? $this->upsServiceDetail : null;
    }
    /**
     * Set upsServiceDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail[] $upsServiceDetail
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails
     */
    public function setUpsServiceDetail(array $upsServiceDetail = array())
    {
        foreach ($upsServiceDetail as $uPSServiceDetailsUpsServiceDetailItem) {
            // validation for constraint: itemType
            if (!$uPSServiceDetailsUpsServiceDetailItem instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail) {
                throw new \InvalidArgumentException(sprintf('The upsServiceDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail, "%s" given', is_object($uPSServiceDetailsUpsServiceDetailItem) ? get_class($uPSServiceDetailsUpsServiceDetailItem) : gettype($uPSServiceDetailsUpsServiceDetailItem)), __LINE__);
            }
        }
        if (is_null($upsServiceDetail) || (is_array($upsServiceDetail) && empty($upsServiceDetail))) {
            unset($this->upsServiceDetail);
        } else {
            $this->upsServiceDetail = $upsServiceDetail;
        }
        return $this;
    }
    /**
     * Add item to upsServiceDetail value
     * @throws \InvalidArgumentException
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail $item
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails
     */
    public function addToUpsServiceDetail(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail) {
            throw new \InvalidArgumentException(sprintf('The upsServiceDetail property can only contain items of \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->upsServiceDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails
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
