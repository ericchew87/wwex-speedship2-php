<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for voidUPSShipmentResponse Structs
 * @subpackage Structs
 */
class VoidUPSShipmentResponse extends AbstractStructBase
{
    /**
     * The voidShipmentResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentResponse
     */
    public $voidShipmentResponse;
    /**
     * Constructor method for voidUPSShipmentResponse
     * @uses VoidUPSShipmentResponse::setVoidShipmentResponse()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentResponse $voidShipmentResponse
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentResponse $voidShipmentResponse = null)
    {
        $this
            ->setVoidShipmentResponse($voidShipmentResponse);
    }
    /**
     * Get voidShipmentResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentResponse|null
     */
    public function getVoidShipmentResponse()
    {
        return isset($this->voidShipmentResponse) ? $this->voidShipmentResponse : null;
    }
    /**
     * Set voidShipmentResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentResponse $voidShipmentResponse
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipmentResponse
     */
    public function setVoidShipmentResponse(\ericchew87\WWEXSpeedShip2PHP\Structs\VoidShipmentResponse $voidShipmentResponse = null)
    {
        if (is_null($voidShipmentResponse) || (is_array($voidShipmentResponse) && empty($voidShipmentResponse))) {
            unset($this->voidShipmentResponse);
        } else {
            $this->voidShipmentResponse = $voidShipmentResponse;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\VoidUPSShipmentResponse
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
