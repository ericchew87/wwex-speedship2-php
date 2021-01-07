<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getUPSServiceDetailsResponse Structs
 * @subpackage Structs
 */
class GetUPSServiceDetailsResponse extends AbstractStructBase
{
    /**
     * The upsServiceDetailResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse
     */
    public $upsServiceDetailResponse;
    /**
     * Constructor method for getUPSServiceDetailsResponse
     * @uses GetUPSServiceDetailsResponse::setUpsServiceDetailResponse()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse $upsServiceDetailResponse
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse $upsServiceDetailResponse = null)
    {
        $this
            ->setUpsServiceDetailResponse($upsServiceDetailResponse);
    }
    /**
     * Get upsServiceDetailResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse|null
     */
    public function getUpsServiceDetailResponse()
    {
        return isset($this->upsServiceDetailResponse) ? $this->upsServiceDetailResponse : null;
    }
    /**
     * Set upsServiceDetailResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse $upsServiceDetailResponse
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetailsResponse
     */
    public function setUpsServiceDetailResponse(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse $upsServiceDetailResponse = null)
    {
        if (is_null($upsServiceDetailResponse) || (is_array($upsServiceDetailResponse) && empty($upsServiceDetailResponse))) {
            unset($this->upsServiceDetailResponse);
        } else {
            $this->upsServiceDetailResponse = $upsServiceDetailResponse;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\GetUPSServiceDetailsResponse
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
