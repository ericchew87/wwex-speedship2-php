<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentReference Structs
 * @subpackage Structs
 */
class ShipmentReference extends AbstractStructBase
{
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $packageNumber;
    /**
     * The shipmentReference1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentReference1;
    /**
     * The shipmentReference2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentReference2;
    /**
     * The shipmentReferenceBarcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentReferenceBarcode;
    /**
     * Constructor method for ShipmentReference
     * @uses ShipmentReference::setPackageNumber()
     * @uses ShipmentReference::setShipmentReference1()
     * @uses ShipmentReference::setShipmentReference2()
     * @uses ShipmentReference::setShipmentReferenceBarcode()
     * @param string $packageNumber
     * @param string $shipmentReference1
     * @param string $shipmentReference2
     * @param string $shipmentReferenceBarcode
     */
    public function __construct($packageNumber = null, $shipmentReference1 = null, $shipmentReference2 = null, $shipmentReferenceBarcode = null)
    {
        $this
            ->setPackageNumber($packageNumber)
            ->setShipmentReference1($shipmentReference1)
            ->setShipmentReference2($shipmentReference2)
            ->setShipmentReferenceBarcode($shipmentReferenceBarcode);
    }
    /**
     * Get packageNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageNumber()
    {
        return isset($this->packageNumber) ? $this->packageNumber : null;
    }
    /**
     * Set packageNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference
     */
    public function setPackageNumber($packageNumber = null)
    {
        // validation for constraint: string
        if (!is_null($packageNumber) && !is_string($packageNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageNumber)), __LINE__);
        }
        if (is_null($packageNumber) || (is_array($packageNumber) && empty($packageNumber))) {
            unset($this->packageNumber);
        } else {
            $this->packageNumber = $packageNumber;
        }
        return $this;
    }
    /**
     * Get shipmentReference1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentReference1()
    {
        return isset($this->shipmentReference1) ? $this->shipmentReference1 : null;
    }
    /**
     * Set shipmentReference1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentReference1
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference
     */
    public function setShipmentReference1($shipmentReference1 = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentReference1) && !is_string($shipmentReference1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentReference1)), __LINE__);
        }
        if (is_null($shipmentReference1) || (is_array($shipmentReference1) && empty($shipmentReference1))) {
            unset($this->shipmentReference1);
        } else {
            $this->shipmentReference1 = $shipmentReference1;
        }
        return $this;
    }
    /**
     * Get shipmentReference2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentReference2()
    {
        return isset($this->shipmentReference2) ? $this->shipmentReference2 : null;
    }
    /**
     * Set shipmentReference2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentReference2
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference
     */
    public function setShipmentReference2($shipmentReference2 = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentReference2) && !is_string($shipmentReference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentReference2)), __LINE__);
        }
        if (is_null($shipmentReference2) || (is_array($shipmentReference2) && empty($shipmentReference2))) {
            unset($this->shipmentReference2);
        } else {
            $this->shipmentReference2 = $shipmentReference2;
        }
        return $this;
    }
    /**
     * Get shipmentReferenceBarcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentReferenceBarcode()
    {
        return isset($this->shipmentReferenceBarcode) ? $this->shipmentReferenceBarcode : null;
    }
    /**
     * Set shipmentReferenceBarcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentReferenceBarcode
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference
     */
    public function setShipmentReferenceBarcode($shipmentReferenceBarcode = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentReferenceBarcode) && !is_string($shipmentReferenceBarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentReferenceBarcode)), __LINE__);
        }
        if (is_null($shipmentReferenceBarcode) || (is_array($shipmentReferenceBarcode) && empty($shipmentReferenceBarcode))) {
            unset($this->shipmentReferenceBarcode);
        } else {
            $this->shipmentReferenceBarcode = $shipmentReferenceBarcode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentReference
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
