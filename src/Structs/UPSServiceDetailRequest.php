<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UPSServiceDetailRequest Structs
 * @subpackage Structs
 */
class UPSServiceDetailRequest extends AbstractStructBase
{
    /**
     * The serviceOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions
     */
    public $serviceOptions;
    /**
     * The shipFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public $shipFrom;
    /**
     * The shipTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress
     */
    public $shipTo;
    /**
     * The shipmentPackages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages
     */
    public $shipmentPackages;
    /**
     * Constructor method for UPSServiceDetailRequest
     * @uses UPSServiceDetailRequest::setServiceOptions()
     * @uses UPSServiceDetailRequest::setShipFrom()
     * @uses UPSServiceDetailRequest::setShipTo()
     * @uses UPSServiceDetailRequest::setShipmentPackages()
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $serviceOptions
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipFrom
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipTo
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages $shipmentPackages
     */
    public function __construct(\ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $serviceOptions = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipFrom = null, \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipTo = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages $shipmentPackages = null)
    {
        $this
            ->setServiceOptions($serviceOptions)
            ->setShipFrom($shipFrom)
            ->setShipTo($shipTo)
            ->setShipmentPackages($shipmentPackages);
    }
    /**
     * Get serviceOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions|null
     */
    public function getServiceOptions()
    {
        return isset($this->serviceOptions) ? $this->serviceOptions : null;
    }
    /**
     * Set serviceOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $serviceOptions
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest
     */
    public function setServiceOptions(\ericchew87\WWEXSpeedShip2PHP\Structs\RateServiceOptions $serviceOptions = null)
    {
        if (is_null($serviceOptions) || (is_array($serviceOptions) && empty($serviceOptions))) {
            unset($this->serviceOptions);
        } else {
            $this->serviceOptions = $serviceOptions;
        }
        return $this;
    }
    /**
     * Get shipFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress|null
     */
    public function getShipFrom()
    {
        return isset($this->shipFrom) ? $this->shipFrom : null;
    }
    /**
     * Set shipFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipFrom
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest
     */
    public function setShipFrom(\ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipFrom = null)
    {
        if (is_null($shipFrom) || (is_array($shipFrom) && empty($shipFrom))) {
            unset($this->shipFrom);
        } else {
            $this->shipFrom = $shipFrom;
        }
        return $this;
    }
    /**
     * Get shipTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress|null
     */
    public function getShipTo()
    {
        return isset($this->shipTo) ? $this->shipTo : null;
    }
    /**
     * Set shipTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipTo
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest
     */
    public function setShipTo(\ericchew87\WWEXSpeedShip2PHP\Structs\SimpleShipmentAddress $shipTo = null)
    {
        if (is_null($shipTo) || (is_array($shipTo) && empty($shipTo))) {
            unset($this->shipTo);
        } else {
            $this->shipTo = $shipTo;
        }
        return $this;
    }
    /**
     * Get shipmentPackages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages|null
     */
    public function getShipmentPackages()
    {
        return isset($this->shipmentPackages) ? $this->shipmentPackages : null;
    }
    /**
     * Set shipmentPackages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages $shipmentPackages
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest
     */
    public function setShipmentPackages(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentPackages $shipmentPackages = null)
    {
        if (is_null($shipmentPackages) || (is_array($shipmentPackages) && empty($shipmentPackages))) {
            unset($this->shipmentPackages);
        } else {
            $this->shipmentPackages = $shipmentPackages;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetailRequest
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
