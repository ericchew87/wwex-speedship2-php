<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipRatedServiceResponse Structs
 * @subpackage Structs
 */
class ShipRatedServiceResponse extends AbstractStructBase
{
    /**
     * The upsShipmentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse
     */
    public $upsShipmentResponse;
    /**
     * Constructor method for shipRatedServiceResponse
     * @uses ShipRatedServiceResponse::setUpsShipmentResponse()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse $upsShipmentResponse
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse $upsShipmentResponse = null)
    {
        $this
            ->setUpsShipmentResponse($upsShipmentResponse);
    }
    /**
     * Get upsShipmentResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse|null
     */
    public function getUpsShipmentResponse()
    {
        return isset($this->upsShipmentResponse) ? $this->upsShipmentResponse : null;
    }
    /**
     * Set upsShipmentResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse $upsShipmentResponse
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceResponse
     */
    public function setUpsShipmentResponse(\ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse $upsShipmentResponse = null)
    {
        if (is_null($upsShipmentResponse) || (is_array($upsShipmentResponse) && empty($upsShipmentResponse))) {
            unset($this->upsShipmentResponse);
        } else {
            $this->upsShipmentResponse = $upsShipmentResponse;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceResponse
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
