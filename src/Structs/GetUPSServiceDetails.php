<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUPSServiceDetails Structs
 * @subpackage Structs
 */
class GetUPSServiceDetails extends AbstractStructBase
{
    /**
     * The upsServiceDetailRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest
     */
    public $upsServiceDetailRequest;
    /**
     * Constructor method for getUPSServiceDetails
     * @uses GetUPSServiceDetails::setUpsServiceDetailRequest()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest $upsServiceDetailRequest
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest $upsServiceDetailRequest = null)
    {
        $this
            ->setUpsServiceDetailRequest($upsServiceDetailRequest);
    }
    /**
     * Get upsServiceDetailRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest|null
     */
    public function getUpsServiceDetailRequest()
    {
        return isset($this->upsServiceDetailRequest) ? $this->upsServiceDetailRequest : null;
    }
    /**
     * Set upsServiceDetailRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest $upsServiceDetailRequest
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetails
     */
    public function setUpsServiceDetailRequest(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest $upsServiceDetailRequest = null)
    {
        if (is_null($upsServiceDetailRequest) || (is_array($upsServiceDetailRequest) && empty($upsServiceDetailRequest))) {
            unset($this->upsServiceDetailRequest);
        } else {
            $this->upsServiceDetailRequest = $upsServiceDetailRequest;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetails
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
