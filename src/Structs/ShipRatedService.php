<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipRatedService Structs
 * @subpackage Structs
 */
class ShipRatedService extends AbstractStructBase
{
    /**
     * The shipRatedServiceRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest
     */
    public $shipRatedServiceRequest;
    /**
     * Constructor method for shipRatedService
     * @uses ShipRatedService::setShipRatedServiceRequest()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest $shipRatedServiceRequest
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest $shipRatedServiceRequest = null)
    {
        $this
            ->setShipRatedServiceRequest($shipRatedServiceRequest);
    }
    /**
     * Get shipRatedServiceRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest|null
     */
    public function getShipRatedServiceRequest()
    {
        return isset($this->shipRatedServiceRequest) ? $this->shipRatedServiceRequest : null;
    }
    /**
     * Set shipRatedServiceRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest $shipRatedServiceRequest
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedService
     */
    public function setShipRatedServiceRequest(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedServiceRequest $shipRatedServiceRequest = null)
    {
        if (is_null($shipRatedServiceRequest) || (is_array($shipRatedServiceRequest) && empty($shipRatedServiceRequest))) {
            unset($this->shipRatedServiceRequest);
        } else {
            $this->shipRatedServiceRequest = $shipRatedServiceRequest;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipRatedService
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
