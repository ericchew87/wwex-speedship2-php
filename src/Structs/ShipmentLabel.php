<?php

namespace ericchew87\WWEXSpeedShip2PHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLabel Structs
 * @subpackage Structs
 */
class ShipmentLabel extends AbstractStructBase
{
    /**
     * The airBillNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $airBillNumber;
    /**
     * The imageFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $imageFormat;
    /**
     * The packageNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $packageNumber;
    /**
     * The shipmentLabelContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentLabelContent;
    /**
     * Constructor method for ShipmentLabel
     * @uses ShipmentLabel::setAirBillNumber()
     * @uses ShipmentLabel::setImageFormat()
     * @uses ShipmentLabel::setPackageNumber()
     * @uses ShipmentLabel::setShipmentLabelContent()
     * @param string $airBillNumber
     * @param string $imageFormat
     * @param string $packageNumber
     * @param string $shipmentLabelContent
     */
    public function __construct($airBillNumber = null, $imageFormat = null, $packageNumber = null, $shipmentLabelContent = null)
    {
        $this
            ->setAirBillNumber($airBillNumber)
            ->setImageFormat($imageFormat)
            ->setPackageNumber($packageNumber)
            ->setShipmentLabelContent($shipmentLabelContent);
    }
    /**
     * Get airBillNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAirBillNumber()
    {
        return isset($this->airBillNumber) ? $this->airBillNumber : null;
    }
    /**
     * Set airBillNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $airBillNumber
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel
     */
    public function setAirBillNumber($airBillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($airBillNumber) && !is_string($airBillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airBillNumber)), __LINE__);
        }
        if (is_null($airBillNumber) || (is_array($airBillNumber) && empty($airBillNumber))) {
            unset($this->airBillNumber);
        } else {
            $this->airBillNumber = $airBillNumber;
        }
        return $this;
    }
    /**
     * Get imageFormat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImageFormat()
    {
        return isset($this->imageFormat) ? $this->imageFormat : null;
    }
    /**
     * Set imageFormat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $imageFormat
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel
     */
    public function setImageFormat($imageFormat = null)
    {
        // validation for constraint: string
        if (!is_null($imageFormat) && !is_string($imageFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageFormat)), __LINE__);
        }
        if (is_null($imageFormat) || (is_array($imageFormat) && empty($imageFormat))) {
            unset($this->imageFormat);
        } else {
            $this->imageFormat = $imageFormat;
        }
        return $this;
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
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel
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
     * Get shipmentLabelContent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentLabelContent()
    {
        return isset($this->shipmentLabelContent) ? $this->shipmentLabelContent : null;
    }
    /**
     * Set shipmentLabelContent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentLabelContent
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel
     */
    public function setShipmentLabelContent($shipmentLabelContent = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentLabelContent) && !is_string($shipmentLabelContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentLabelContent)), __LINE__);
        }
        if (is_null($shipmentLabelContent) || (is_array($shipmentLabelContent) && empty($shipmentLabelContent))) {
            unset($this->shipmentLabelContent);
        } else {
            $this->shipmentLabelContent = $shipmentLabelContent;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ericchew87\WWEXSpeedShip2PHP\Structs\ShipmentLabel
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
