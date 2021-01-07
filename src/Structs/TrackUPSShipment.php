<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackUPSShipment Structs
 * @subpackage Structs
 */
class TrackUPSShipment extends AbstractStructBase
{
    /**
     * The trackShipmentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest
     */
    public $trackShipmentRequest;
    /**
     * Constructor method for trackUPSShipment
     * @uses TrackUPSShipment::setTrackShipmentRequest()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest $trackShipmentRequest
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest $trackShipmentRequest = null)
    {
        $this
            ->setTrackShipmentRequest($trackShipmentRequest);
    }
    /**
     * Get trackShipmentRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest|null
     */
    public function getTrackShipmentRequest()
    {
        return isset($this->trackShipmentRequest) ? $this->trackShipmentRequest : null;
    }
    /**
     * Set trackShipmentRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest $trackShipmentRequest
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipment
     */
    public function setTrackShipmentRequest(\ericchew87\WWEXSpeedShip2PHP\Structs\TrackShipmentRequest $trackShipmentRequest = null)
    {
        if (is_null($trackShipmentRequest) || (is_array($trackShipmentRequest) && empty($trackShipmentRequest))) {
            unset($this->trackShipmentRequest);
        } else {
            $this->trackShipmentRequest = $trackShipmentRequest;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\TrackUPSShipment
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
