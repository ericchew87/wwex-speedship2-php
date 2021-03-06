<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UPSServiceDetailResponse Structs
 * @subpackage Structs
 */
class UPSServiceDetailResponse extends AbstractStructBase
{
    /**
     * The serviceResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader
     */
    public $serviceResponse;
    /**
     * The upsServiceDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails
     */
    public $upsServiceDetails;
    /**
     * Constructor method for UPSServiceDetailResponse
     * @uses UPSServiceDetailResponse::setServiceResponse()
     * @uses UPSServiceDetailResponse::setUpsServiceDetails()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails $upsServiceDetails
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse = null, \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails $upsServiceDetails = null)
    {
        $this
            ->setServiceResponse($serviceResponse)
            ->setUpsServiceDetails($upsServiceDetails);
    }
    /**
     * Get serviceResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader|null
     */
    public function getServiceResponse()
    {
        return isset($this->serviceResponse) ? $this->serviceResponse : null;
    }
    /**
     * Set serviceResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse
     */
    public function setServiceResponse(\ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse = null)
    {
        if (is_null($serviceResponse) || (is_array($serviceResponse) && empty($serviceResponse))) {
            unset($this->serviceResponse);
        } else {
            $this->serviceResponse = $serviceResponse;
        }
        return $this;
    }
    /**
     * Get upsServiceDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails|null
     */
    public function getUpsServiceDetails()
    {
        return isset($this->upsServiceDetails) ? $this->upsServiceDetails : null;
    }
    /**
     * Set upsServiceDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails $upsServiceDetails
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse
     */
    public function setUpsServiceDetails(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails $upsServiceDetails = null)
    {
        if (is_null($upsServiceDetails) || (is_array($upsServiceDetails) && empty($upsServiceDetails))) {
            unset($this->upsServiceDetails);
        } else {
            $this->upsServiceDetails = $upsServiceDetails;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailResponse
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
