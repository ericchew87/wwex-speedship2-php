<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackUPSShipmentResponse Structs
 * @subpackage Structs
 */
class TrackUPSShipmentResponse extends AbstractStructBase
{
    /**
     * The trackShipmentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse
     */
    public $trackShipmentResponse;
    /**
     * Constructor method for trackUPSShipmentResponse
     * @uses TrackUPSShipmentResponse::setTrackShipmentResponse()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse $trackShipmentResponse
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse $trackShipmentResponse = null)
    {
        $this
            ->setTrackShipmentResponse($trackShipmentResponse);
    }
    /**
     * Get trackShipmentResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse|null
     */
    public function getTrackShipmentResponse()
    {
        return isset($this->trackShipmentResponse) ? $this->trackShipmentResponse : null;
    }
    /**
     * Set trackShipmentResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse $trackShipmentResponse
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipmentResponse
     */
    public function setTrackShipmentResponse(\ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentResponse $trackShipmentResponse = null)
    {
        if (is_null($trackShipmentResponse) || (is_array($trackShipmentResponse) && empty($trackShipmentResponse))) {
            unset($this->trackShipmentResponse);
        } else {
            $this->trackShipmentResponse = $trackShipmentResponse;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipmentResponse
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
