<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UPSShipmentResponse Structs
 * @subpackage Structs
 */
class UPSShipmentResponse extends AbstractStructBase
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
     * The shipmentResponseDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails
     */
    public $shipmentResponseDetails;
    /**
     * Constructor method for UPSShipmentResponse
     * @uses UPSShipmentResponse::setServiceResponse()
     * @uses UPSShipmentResponse::setShipmentResponseDetails()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails $shipmentResponseDetails
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails $shipmentResponseDetails = null)
    {
        $this
            ->setServiceResponse($serviceResponse)
            ->setShipmentResponseDetails($shipmentResponseDetails);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse
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
     * Get shipmentResponseDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails|null
     */
    public function getShipmentResponseDetails()
    {
        return isset($this->shipmentResponseDetails) ? $this->shipmentResponseDetails : null;
    }
    /**
     * Set shipmentResponseDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails $shipmentResponseDetails
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse
     */
    public function setShipmentResponseDetails(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetails $shipmentResponseDetails = null)
    {
        if (is_null($shipmentResponseDetails) || (is_array($shipmentResponseDetails) && empty($shipmentResponseDetails))) {
            unset($this->shipmentResponseDetails);
        } else {
            $this->shipmentResponseDetails = $shipmentResponseDetails;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSShipmentResponse
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
