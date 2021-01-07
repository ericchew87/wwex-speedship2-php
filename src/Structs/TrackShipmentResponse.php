<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackShipmentResponse Structs
 * @subpackage Structs
 */
class TrackShipmentResponse extends AbstractStructBase
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
     * The shipmentTrackingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails
     */
    public $shipmentTrackingDetails;
    /**
     * Constructor method for TrackShipmentResponse
     * @uses TrackShipmentResponse::setServiceResponse()
     * @uses TrackShipmentResponse::setShipmentTrackingDetails()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails $shipmentTrackingDetails
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ResponseHeader $serviceResponse = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails $shipmentTrackingDetails = null)
    {
        $this
            ->setServiceResponse($serviceResponse)
            ->setShipmentTrackingDetails($shipmentTrackingDetails);
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse
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
     * Get shipmentTrackingDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails|null
     */
    public function getShipmentTrackingDetails()
    {
        return isset($this->shipmentTrackingDetails) ? $this->shipmentTrackingDetails : null;
    }
    /**
     * Set shipmentTrackingDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails $shipmentTrackingDetails
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse
     */
    public function setShipmentTrackingDetails(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentTrackingDetails $shipmentTrackingDetails = null)
    {
        if (is_null($shipmentTrackingDetails) || (is_array($shipmentTrackingDetails) && empty($shipmentTrackingDetails))) {
            unset($this->shipmentTrackingDetails);
        } else {
            $this->shipmentTrackingDetails = $shipmentTrackingDetails;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse
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
