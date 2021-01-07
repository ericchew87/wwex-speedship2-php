<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentResponseDetail Structs
 * @subpackage Structs
 */
class ShipmentResponseDetail extends AbstractStructBase
{
    /**
     * The primaryAirBillNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $primaryAirBillNumber;
    /**
     * The shipmentDocs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs
     */
    public $shipmentDocs;
    /**
     * The shipmentLabels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels
     */
    public $shipmentLabels;
    /**
     * The shipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentType;
    /**
     * The upsServiceDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails
     */
    public $upsServiceDetails;
    /**
     * Constructor method for ShipmentResponseDetail
     * @uses ShipmentResponseDetail::setPrimaryAirBillNumber()
     * @uses ShipmentResponseDetail::setShipmentDocs()
     * @uses ShipmentResponseDetail::setShipmentLabels()
     * @uses ShipmentResponseDetail::setShipmentType()
     * @uses ShipmentResponseDetail::setUpsServiceDetails()
     * @param string $primaryAirBillNumber
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs $shipmentDocs
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels $shipmentLabels
     * @param string $shipmentType
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails $upsServiceDetails
     */
    public function __construct($primaryAirBillNumber = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs $shipmentDocs = null, \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels $shipmentLabels = null, $shipmentType = null, \ericchew87\WWEXSpeedShip2PHP\Structs\UPSServiceDetails $upsServiceDetails = null)
    {
        $this
            ->setPrimaryAirBillNumber($primaryAirBillNumber)
            ->setShipmentDocs($shipmentDocs)
            ->setShipmentLabels($shipmentLabels)
            ->setShipmentType($shipmentType)
            ->setUpsServiceDetails($upsServiceDetails);
    }
    /**
     * Get primaryAirBillNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrimaryAirBillNumber()
    {
        return isset($this->primaryAirBillNumber) ? $this->primaryAirBillNumber : null;
    }
    /**
     * Set primaryAirBillNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $primaryAirBillNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail
     */
    public function setPrimaryAirBillNumber($primaryAirBillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($primaryAirBillNumber) && !is_string($primaryAirBillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryAirBillNumber)), __LINE__);
        }
        if (is_null($primaryAirBillNumber) || (is_array($primaryAirBillNumber) && empty($primaryAirBillNumber))) {
            unset($this->primaryAirBillNumber);
        } else {
            $this->primaryAirBillNumber = $primaryAirBillNumber;
        }
        return $this;
    }
    /**
     * Get shipmentDocs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs|null
     */
    public function getShipmentDocs()
    {
        return isset($this->shipmentDocs) ? $this->shipmentDocs : null;
    }
    /**
     * Set shipmentDocs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs $shipmentDocs
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail
     */
    public function setShipmentDocs(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentDocs $shipmentDocs = null)
    {
        if (is_null($shipmentDocs) || (is_array($shipmentDocs) && empty($shipmentDocs))) {
            unset($this->shipmentDocs);
        } else {
            $this->shipmentDocs = $shipmentDocs;
        }
        return $this;
    }
    /**
     * Get shipmentLabels value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels|null
     */
    public function getShipmentLabels()
    {
        return isset($this->shipmentLabels) ? $this->shipmentLabels : null;
    }
    /**
     * Set shipmentLabels value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels $shipmentLabels
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail
     */
    public function setShipmentLabels(\ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabels $shipmentLabels = null)
    {
        if (is_null($shipmentLabels) || (is_array($shipmentLabels) && empty($shipmentLabels))) {
            unset($this->shipmentLabels);
        } else {
            $this->shipmentLabels = $shipmentLabels;
        }
        return $this;
    }
    /**
     * Get shipmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentType()
    {
        return isset($this->shipmentType) ? $this->shipmentType : null;
    }
    /**
     * Set shipmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentType
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail
     */
    public function setShipmentType($shipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentType) && !is_string($shipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentType)), __LINE__);
        }
        if (is_null($shipmentType) || (is_array($shipmentType) && empty($shipmentType))) {
            unset($this->shipmentType);
        } else {
            $this->shipmentType = $shipmentType;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentResponseDetail
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
